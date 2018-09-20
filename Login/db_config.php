<?php

/*
 * All database connection variables
 * --- CHANGE THESE TO MATCH YOUR DATABASE ---
 */

define("DB_USER", "root"); // db user
define("DB_PASSWORD", "root"); // db password (mention your db password here)
define("DB_DATABASE", "edusub_db"); // database name
define("DB_SERVER", "localhost:3306"); // db server
$db = mysqli_connect(DB_USER,DB_PASSWORD,DB_DATABASE,DB_SERVER);
?>