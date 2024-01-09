<?php
//generation
header("Content-Type: application/json");

function sendSseMessage($data) {

}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode("Method not allowed");
    return false;
}
    // Retrieve the POST data
    $appName = filter_var(htmlentities($_POST['appName']),FILTER_SANITIZE_STRING);
     $appDescription = filter_var(htmlentities($_POST['appDescription']),FILTER_SANITIZE_STRING);
     $appAuthor = filter_var(htmlentities($_POST['appAuthor']),FILTER_SANITIZE_STRING);
     $appColor = filter_var(htmlentities($_POST['appColor']),FILTER_SANITIZE_STRING);
     $appType = filter_var(htmlentities($_POST['appType']),FILTER_SANITIZE_STRING);

     include('includes/gpt.php');

    // Check if 'param1' and 'param2' are set in the request
    if (empty($appName) && empty($appDescription) && empty($appAuthor) && empty($appColor) && empty($appType)) {
        http_response_code(400); // Bad Request
        echo json_encode('Invalid parameters');
        return false;
    }

    if($appType == "ai"){
      include('includes/prompt.php');
    }else{
      include('includes/basic.php');
    }
?>
