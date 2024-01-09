<?php
//chat GPT settings
function prompt($text){
  $gpt_api_key_field = isset($_POST['api']) ? filter_var(htmlentities($_POST['api']), FILTER_SANITIZE_STRING) : null;

  $gpt_api_key_text = 'YOUR_API_KEY';
  
  if($gpt_api_key_field == NULL){
  $gpt_api_key = $gpt_api_key_text;
  }else{
  $gpt_api_key = $gpt_api_key_field;
  }
  $gpt_api_endpoint = 'https://api.pawan.krd/v1/completions';

if($text == 33045){
  $connectionCheckResult = checkApiConnection($gpt_api_endpoint);
    if(strpos($connectionCheckResult, "Error") !== false) {
        return $connectionCheckResult." \n";
    }
  }

  $data = [
      'prompt' => $text,
      'max_tokens' => 100,
      // Add other API request parameters as needed
  ];

  $options = [
      'http' => [
          'header' => "Authorization: Bearer $gpt_api_key\r\n" .
                      "Content-Type: application/json\r\n",
          'method' => 'POST',
          'content' => json_encode($data),
      ],
  ];

  $context = stream_context_create($options);
  $response = file_get_contents($gpt_api_endpoint, false, $context);
  $answer = json_decode($response)->choices[0]->text;

    return $answer;
}
function checkApiConnection($api_url) {
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout to 10 seconds

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($http_code == 200) {
        // You can also process the $response data if needed
    } else {
        return "Error connecting to API. HTTP Code: $http_code";
        // Handle the error accordingly
    }
}

?>
