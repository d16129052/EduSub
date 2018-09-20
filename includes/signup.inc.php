<?php
	//Here we include our database connection
	include_once 'dbh.inc.php';

	//Here we fetch the data from the URL that was passed from our HTML form
	    $schoolID = $_POST['schoolID'];
        $datePosted = $_POST['datePosted'];
        $title = $_POST['title'];
        $level = $_POST['level'];
        $dateFrom = $_POST['dateFrom'];
        $dateTo = $_POST['dateTo'];
        $description = $_POST['description'];
   
       $sql = "INSERT INTO jobs (schoolID, title,  description, datePosted, level, dateFrom, dateTo) VALUES ('$schoolID', '$title', '$description', '$datePosted', '$level', '$dateFrom', '$dateTo');";
     
       mysqli_query($conn, $sql);

	//We don't need to do anythin else in order to insert data
	//HOWEVER!!!
	//We have not added ANY security to our code by filtering the data the user typed into the HTML form. We will learn about security later using prepared statements!

	//Here we go back to the front page
	header("Location: ../index.php?signup=success");

