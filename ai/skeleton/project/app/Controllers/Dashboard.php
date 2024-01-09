<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller {

	public function __construct()
	{

			helper(
				['langs', 'sendmail', 'IsLogedin','timefunction','Mode','countrynames', 'functions_zone','app_info']
		);
$this->comman_model = new \App\Models\Comman_model();
			echo Checkloginhome(base_url());

	if(isset($_COOKIE['id']) && !isset($_SESSION['username'])){
//===========================[cookie function]===============================
	$encryption = $_COOKIE['id'];
	$options   = 0;
	$decryption_iv = '1234567891011121';
	$ciphering = "AES-128-CTR";
	$decryption_key = $_SERVER['REMOTE_ADDR'];
	$decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);

//========================[fetch data]==============================
$req = "still";
	$vpsql = "SELECT * FROM signup WHERE id= '$decryption'";
	$FetchedData=$this->comman_model->get_all_data_by_query($vpsql);
	foreach($FetchedData as $row_fetch){
		$fields = $this->comman_model->getFieldData('signup');
	  foreach ($fields as $postsfetchi)
	  {
		  ${"var".$postsfetchi->name} = $row_fetch[$postsfetchi->name];
	}
	}
//=========================[settings]=======================================
	$uisql = "SELECT * FROM settings WHERE user_id= '$varid'";
	$udata=$this->comman_model->get_all_data_by_query($uisql);
	foreach($udata as $rowx){
	$value_n = $rowx['value'];
	$type_n = $rowx['type'];
	session()->set($type_n, $value_n);
	}
//========================[create sessions]=================================
$fields = $this->comman_model->getFieldData('signup');
foreach ($fields as $postsfetchi)
{
	session()->set($postsfetchi->name, ${"var" . $postsfetchi->name});
}
	}
			LoadLang();
	}
	public function index()
	{
		 if(sessionCI('user_email_status') == "not verified"){
			header("location:".base_url()."Account/email_verification");
		}

		$data['page'] = "home";
		$data['title'] = "";

		$user_id = sessionCI('id');
		echo view('dashboard/home', $data);
	}

}
