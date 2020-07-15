<?php   
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    //define('CONSTANT_NAME','constant_value');

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'crud');
    
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    /*
    === Query for create table 
    
    CREATE TABLE employees (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        address VARCHAR(255) NOT NULL,
        salary INT(10) NOT NULL
    );

    */
    

?>
    
