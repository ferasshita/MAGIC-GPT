<?php
function getTextBetween($input) {
  $start = "//===START_ANSWER===";
  $end = "//===END_ANSWER===";
    $startPos = strpos($input, $start);
    $strlen = strlen($input);

    $endPos = strpos($input, $end, $startPos);

    if($endPos === false && $startPos === false){
      return $input;
    }

    if ($endPos === false) {
        return substr($input, 20+$startPos); // Start text not found
    }

    if ($startPos === false) {
        return substr($input, $startPos, $endPos-$strlen); // End text not found
    }

    $startPos += strlen($start);

    if ($endPos != false && $endPos != false) {
    return substr($input, $startPos, $endPos - $startPos);
  }

}

function addFilesToZip($zip, $source, $baseFolder = '') {
    $source = rtrim($source, DIRECTORY_SEPARATOR);
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($files as $file) {
        if ($file->isDir()) {
            $directory = ltrim(str_replace($source, '', $file), DIRECTORY_SEPARATOR);
            $zip->addEmptyDir($baseFolder . DIRECTORY_SEPARATOR . $directory);
        } elseif ($file->isFile()) {
            $relativePath = ltrim(str_replace($source, '', $file), DIRECTORY_SEPARATOR);
            $zip->addFile($file, $baseFolder . DIRECTORY_SEPARATOR . $relativePath);
        }
    }
}
?>
