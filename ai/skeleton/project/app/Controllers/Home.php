<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		helper(
			['langs', 'Islogedin', 'functions_zone','numkmcount','app_info']
	);
$this->comman_model = new \App\Models\Comman_model();
			LoadLang();

	}
	public function about()
	{
		loginRedirect(base_url()."Account/login");

		$data['page'] = "about";
		$data['title'] = "";
		LoadLang();
		$user_id = \Config\Services::session()->get('id');

		echo view('home/about', $data);
	}
	public function contact()
	{
		loginRedirect(base_url()."Account/login");

		$data['page'] = "contact";
		$data['title'] = "";
		LoadLang();
		$user_id = \Config\Services::session()->get('id');

		echo view('home/contact', $data);
	}
	public function home()
	{
		loginRedirect(base_url()."Account/login");

		$data['page'] = "Projects";
		$data['title'] = "";
		LoadLang();
		$user_id = \Config\Services::session()->get('id');

		echo view('home/home', $data);
	}
	public function index()
	{
		if($_ENV['LANDING_PAGE'] == "FALSE"){
	  return redirect()->to(base_url()."Account/login");
		}
		loginRedirect(base_url()."Account/login");

		$data['page'] = "Projects";
		$data['title'] = "";
		LoadLang();
		$user_id = \Config\Services::session()->get('id');

		echo view('home/home', $data);
	}
	public function pay()
	{
		if($_ENV['PAYMENT'] == "TRUE"){


		$data['page'] = "Payment";
		$data['title'] = "";
		LoadLang();

		echo view('home/pay', $data);
	}
	}

}
