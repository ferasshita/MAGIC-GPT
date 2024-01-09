<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Includes extends Controller {

   public function __construct()
 	{

 			helper(
 				['langs', 'IsLogedin','timefunction','Mode','countrynames', 'functions_zone','app_info']
 		);
    $this->comman_model = new \App\Models\Comman_model();
 			LoadLang();
 			// Your own constructor code


 	}
	public function hi()
	{

		$query = $_GET['q'];
		// Perform the search query and retrieve the results

		// Perform the search query
		$sql = "SELECT * FROM signup WHERE username LIKE '%$query%'";
		$result=$this->comman_model->get_all_data_by_query($sql);
		if($result->num_rows > 0) {
			// Loop through the results and store them in an array
			$results = array();
			while($row = $result->fetch_assoc()) {
				$results[] = $row;
			}
			// Format the results as HTML
			foreach($results as $result) {
				echo '<div class="result">';
				echo '<a href="'.$result['url'].'">'.$result['username'].'</a>';
				echo '<p>'.$result['description'].'</p>';
				echo '</div>';
			}
		} else {
			echo 'No results found.';
		}

	}
	public function fetch_posts_home()
	{
		$sid = $_SESSION['id'];
		$plimit = filter_var(htmlspecialchars($this->request->getPost('plimit')), FILTER_SANITIZE_NUMBER_INT);
		$fPosts_sql_sql = "SELECT * FROM transaction ORDER BY date DESC LIMIT $plimit,10";
		$FetchData=$this->comman_model->get_all_data_by_query($fPosts_sql_sql);
		$view_postsNum = count($FetchData);

		if ($view_postsNum > 0) {
//code
			echo"$view_postsNum hi";
		} else {
			echo "0";
		}

	}
	public function delete_transaction()
	{
		$c_id = htmlentities($this->request->getPost('cid'), ENT_QUOTES);
		$table = htmlentities($this->request->getPost('table'), ENT_QUOTES);

		$delete_comm_sql = "DELETE FROM $table WHERE id = $c_id";
		$IsUpdate=$this->comman_model->run_query($delete_comm_sql);
		echo "done";
	}
	public function mode()
	{
    $id = $_SESSION['id'];
    $dhsh = date("H");

if($_SESSION['mode'] == "light" || ($_SESSION['mode'] == "auto" && $dhsh>=4&&$dhsh<=18)){
$mode = "night";
}else{
$mode = "light";
}
     $update_info_sql = "UPDATE signup SET mode= '$mode' WHERE id= '$id'";
     $update_info=$this->comman_model->run_query($update_info_sql);

         $_SESSION['mode'] = $mode;

echo"yes";
	}
}
