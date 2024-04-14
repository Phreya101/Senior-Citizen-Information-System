<?php
// Include the file containing the class definition
require_once 'class.php';
require_once '../auth/conn.php';

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if action parameter is set
    if (isset($_POST['action']) && !empty($_POST['action'])) {
        // Instantiate your class
        $crudHandler = new CrudHandler($conn);

        // Get the action parameter value
        $action = $_POST['action'];

        // Perform action based on the value of action parameter
        switch ($action) {
            case 'editUser':
                $result = $crudHandler->editUser($_POST);
                echo $result; // Echo response back to AJAX call
                break;
            case 'disableUser':
                $result = $crudHandler->disableUser();
                echo $result;
                break;
            case 'enableUser':
                $result = $crudHandler->enableUser();
                echo $result;
                break;
            case 'addUser':
                $result = $crudHandler->addUser($_POST);
                echo $result;
                break;
            case 'deleteUser':
                $result = $crudHandler->deleteUser();
                echo $result;
                break;
            case 'addSenior':
                $result = $crudHandler->addSenior($_POST);
                echo $result;
                break;
            case 'editSenior':
                $result = $crudHandler->editSenior($_POST);
                echo $result;
                break;
            case 'deleteSenior':
                $result = $crudHandler->deleteSenior();
                echo $result;
                break;
            default:
                echo "Invalid action specified";
                break;
        }
    } else {
        echo "Action parameter is missing";
    }
} else {
    echo "Only POST requests are allowed";
}
