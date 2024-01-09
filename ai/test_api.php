<?php
// API URL
$api_url = 'http://localhost/magic/ai/api.php'; // Replace with your API endpoint

// Data to send as POST parameters
$post_data = [
'api' => 'GPT_API_KEY',
'appName' => 'test_app',
'appDescription' => 'random app',
'appAuthor' => 'feras',
'appColor' => 'blue',
'appType' => 'website',
];

// Initialize cURL session
$ch = curl_init($api_url);

// Set cURL options for a POST request
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data)); // Convert the data to a URL-encoded string

// Set other cURL options as needed, e.g., headers

// Receive the response as a string instead of outputting it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
    exit();
}

// Close the cURL session
curl_close($ch);

// Process the API response
echo $response;
