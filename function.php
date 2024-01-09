<?php
function getFileContent($dir){
  return htmlspecialchars(file_get_contents($dir));
}
$path = $_POST['path'];
echo getFileContent($path);
 ?>
