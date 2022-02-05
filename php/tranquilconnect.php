<?php

// Set up Connection
$conn = new mysqli('localhost', 'root', '', 'tranquildb');

// Check Connection successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection Problem";
}