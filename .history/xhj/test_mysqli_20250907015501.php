<?php
// Test database connection with mysqli
$host = 'localhost';
$dbname = 'jys1';
$username = 'root';
$password = '';

$connection = @mysqli_connect($host, $username, $password);

if (!$connection) {
    echo "MySQL connection failed: " . mysqli_connect_error();
} else {
    echo "MySQL connection successful!<br>";
    
    // Try to select database
    if (mysqli_select_db($connection, $dbname)) {
        echo "Database '$dbname' exists!<br>";
        
        // Check tables
        $result = mysqli_query($connection, "SHOW TABLES LIKE 'tw_admin'");
        if (mysqli_num_rows($result) > 0) {
            echo "Admin table exists!<br>";
            
            $admin_query = mysqli_query($connection, "SELECT username FROM tw_admin LIMIT 1");
            if ($admin_query && mysqli_num_rows($admin_query) > 0) {
                $admin = mysqli_fetch_assoc($admin_query);
                echo "Admin user found: " . $admin['username'] . "<br>";
            } else {
                echo "No admin users found<br>";
            }
        } else {
            echo "Admin table does not exist<br>";
        }
    } else {
        echo "Database '$dbname' does not exist. Creating...<br>";
        if (mysqli_query($connection, "CREATE DATABASE $dbname")) {
            echo "Database created successfully<br>";
        } else {
            echo "Error creating database: " . mysqli_error($connection);
        }
    }
    
    mysqli_close($connection);
}
?>
