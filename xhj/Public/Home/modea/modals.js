class Modals {
    constructor(props = {}) {
        const isDefined = (val) => typeof val !== 'undefined'

        this.allowMultiple = isDefined(props.allowMultiple) ? !!props.allowMultiple : false
        this.lockScroll = isDefined(props.lockScroll) ? !!props.lockScroll : true

        this.overlay = this.constructor.createOverlay()

        this.updateModals()

        let allowAction = true

        const handleClick = (event) => {
            const openBtn = event.target.closest('.modal-open')
            const closeBtn = event.target.closest('.modal-close')
            const clickedOutside = event.target.closest('.modal') &&
                !event.target.closest('.modal-content')

            if (!openBtn && !closeBtn && !clickedOutside) return

            event.preventDefault()

            if (openBtn) {
                if (!allowAction) return
                allowAction = false

                const id = openBtn.dataset.modal

                if (!isDefined(id)) {
                    throw new Error('data-modal is not specified')
                }

                this.constructor.waitForAction(this.getModal(id).element, () => {
                    allowAction = true
                })

                return this.openModal(id)
            }

            if (closeBtn) {
                if (!allowAction) return
                allowAction = false

                const id = closeBtn.dataset.modal
                const modal = closeBtn.closest('.modal')

                if (!isDefined(id) && !modal) {
                    throw new Error('no data-modal or closest modal element')
                }

                this.constructor.waitForAction(this.getModal(id || modal.id).element, () => {
                    allowAction = true
                })

                return this.closeModal(id || modal.id)
            }

            if (this.activeModal && clickedOutside) {
                if (!allowAction) return
                allowAction = false

                this.constructor.waitForAction(this.activeModal.element, () => {
                    allowAction = true
                })

                return this.closeModal(this.activeModal.id)
            }
        }
        document.addEventListener('click', handleClick)
    }

    static createOverlay() {
        let overlay = document.querySelector('.modal-overlay')
        if (overlay) return overlay

        overlay = document.createElement('div')
        overlay.classList.add('modal-overlay')
        document.body.append(overlay)
        return overlay
    }

    static waitForAction(element, callback) {
        const modalStyles = window.getComputedStyle(element)
        const transitionDuration = modalStyles.getPropertyValue('transition-duration')

        setTimeout(callback, parseFloat(transitionDuration) * 1000)
    }

    updateModals() {
        const allModals = Array.from(document.querySelectorAll('.modal'))
        const activeModal = document.querySelector('.modal._active')
        const allModalsArr = allModals.map(item => {
            return {id: item.id, element: item}
        })

        if (!this.bufferedModals) this.bufferedModals = []
        if (activeModal) this.activeModal = {element: activeModal, id: activeModal.id}
        else this.activeModal = null
        this.allModals = allModalsArr
    }

    openModal(id) {
        if (this.activeModal) this.activeModal.element.classList.remove('_active')
        if (this.activeModal && this.allowMultiple) this.bufferedModals.unshift(this.activeModal)

        const modal = this.getModal(id)
        modal.element.classList.add('_active')
        this.overlay.classList.add('_active')

        this.updateModals()

        if (this.lockScroll) {
            if (!document.documentElement.style.paddingRight) {
                const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth
                document.documentElement.style.paddingRight = scrollbarWidth + 'px'
            }
            document.documentElement.classList.add('_modal')
        }

        if(this.openHandlers && this.openHandlers[id]) this.openHandlers[id](modal)
    }

    closeModal(id) {
        if (this.allowMultiple && this.bufferedModals.length) {
            this.bufferedModals.shift().element.classList.add('_active')
        }

        const modal = this.getModal(id)
        modal.element.classList.remove('_active')

        this.updateModals()

        if (this.lockScroll && !this.activeModal) {
            const modalStyles = window.getComputedStyle(modal.element)
            const transitionDuration = modalStyles.getPropertyValue('transition-duration')

            setTimeout(() => {
                document.documentElement.style.paddingRight = ''
                document.documentElement.classList.remove('_modal')
            }, parseFloat(transitionDuration) * 1000)

            this.overlay.classList.remove('_active')
        }

        if(this.closeHandlers && this.closeHandlers[id]) this.closeHandlers[id](modal)
    }

    getModal(id) {
        return this.allModals.find(i => i.id === id)
    }

    onOpen(id, callback) {
        if(!this.getModal(id)) return
        if(!this.openHandlers) this.openHandlers = {}

        this.openHandlers[id] = callback
    }

    onClose(id, callback) {
        if(!this.getModal(id)) return
        if(!this.closeHandlers) this.closeHandlers = {}

        this.closeHandlers[id] = callback
    }

    closeAll() {
        if(!this.activeModal) return
        if(this.bufferedModals.length) this.bufferedModals = []
        this.closeModal(this.activeModal.id)
    }
}
