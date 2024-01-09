<?php
include('function.php');
//generating new project
$num_random = random_int(0, 99);
$new_dir = "download/".$appName."_".$num_random;

$print = "Generating a new project named ".$appName."! \n";
echo $print;
$msg = $print;
sendSseMessage($print);

$print = "Generating project skeleton...\n";
echo $print;
$msg .= $print;
sendSseMessage($print);

if($appType == "project") {
	shell_exec("xcopy skeleton\\project download\\".$appName."_".$num_random. " /E/H/C/I");
}elseif($appType == "website"){
	shell_exec("xcopy skeleton\\website download\\".$appName."_".$num_random. " /E/H/C/I");
}

$print = "Generated project skeleton.\n";
echo $print;
$msg .= $print;
sendSseMessage($print);

$print = "Generating project info...\n";
echo $print;
$msg .= $print;
sendSseMessage($print);

$currentUrl = "http";
$currentUrl .= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://";
$currentUrl .= $_SERVER['HTTP_HOST'];
$currentUrl .= "../../".$_SERVER['REQUEST_URI'];

$project_link = $currentUrl."/".$appName."_".$num_random."/public/";
//==================[app_info]===================
		$file_data = "
\n
#--------------------------------------------------------------------\n
# APP\n
#--------------------------------------------------------------------\n
\n
 app.baseURL = '".$project_link."'\n
# If you have trouble with `.`, you could also use `_`.\n
# app_baseURL = ''\n
# app.forceGlobalSecureRequests = false\n
# app.CSPEnabled = false\n
\n
#--------------------------------------------------------------------\n
# APP INFO\n
#--------------------------------------------------------------------\n
\n
PROJECT_NAME = \"".$appName."\"\n
PROJECT_AUTHOR = \"".$appAuthor."\"\n
PROJECT_DESCRIPTION = \"".$appDescription."\"\n
PROJECT_VERSION = 1.0.0\n
MAIN_LANGUAGE_ARABIC = TRUE\n
";
		$file_data .= file_get_contents("$new_dir/.env");
	  file_put_contents("$new_dir/.env", $file_data);


		$print = "Generated project info.\n";
		echo $print;
		$msg .= $print;
		sendSseMessage($print);

		//Zip the project
		$zip = new ZipArchive();
		$zipFilename = 'zip/'.$appName.'_'.$num_random.'.zip';

		if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
		    $sourceFolder = $new_dir;
		    addFilesToZip($zip, $new_dir, $appName.'_'.$num_random);
		    $zip->close();

		    $print = "ZIP archive created successfully.\n";
		    echo $print;
		    $msg .= $print;
		    sendSseMessage($print);
		} else {

		    $print = "Failed to create ZIP archive.\n";
		    echo $print;
		    $msg .= $print;
		    sendSseMessage($print);
		}

		$print = "Done! \n";
		echo $print;
		$msg .= $print;
		sendSseMessage($print);

		$print = $zipFilename."\n";
		echo $print;
		$msg .= $print;
		sendSseMessage($print);
?>
