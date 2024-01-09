<?php
function sendSseMessage($data) {

}
  // Retrieve terminal data
  echo"App name: ";$appName = trim(fgets(STDIN));
  echo"App description: ";$appDescription = trim(fgets(STDIN));
  echo"App author: ";$appAuthor = trim(fgets(STDIN));
  echo"App brand color: ";$appColor = trim(fgets(STDIN));

// Prompt the user to enter the type of version they want to update
echo "Enter the type of version you want to update:\n";
echo "1 - Create with AI\n";
echo "2 - Basic CodeIgniter website\n";
echo "3 - Basic CodeIgniter skeleton\n";
$appType = trim(fgets(STDIN));

if (empty($appName) && empty($appDescription) && empty($appAuthor) && empty($appColor)) {
die('Complete all fields \n');
return false;
}

// Check if the version type is valid
if (!in_array($appType, array('1', '2', '3'))) {
	die('Error: Invalid version type. Please enter either "1", "2" or "3".');
}
if($appType == "1"){
  $appType = "ai";
}elseif($appType == "2"){
  $appType = "website";
}else{
  $appType = "project";
}

  include('includes/gpt.php');

if($appType == "ai"){
  include('includes/prompt.php');
}else{
  include('includes/basic.php');
}
  exit();
?>
