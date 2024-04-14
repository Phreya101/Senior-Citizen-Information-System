<?php
$conn = new mysqli('localhost', 'root', '', 'sps_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
