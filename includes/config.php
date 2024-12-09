<?php


# Global variables
$productTitle = "Chama Management System";



# print the title of the product in all pages of the website
echo '<title>'.$productTitle.'</title>';

# connect the project to the database
$conn = mysqli_connect("localhost", "root", "",  "membershiphp")
        or die("Database Connection Failed");


// Start Session
session_start();
