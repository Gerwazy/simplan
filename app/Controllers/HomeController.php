<?php 

namespace App\Controllers;
use App\Models\User;
use Slim\Views\Twig as View;


class HomeController extends Controller {


		public function home($request, $response) {
			return $this->view->render($response, 'home.twig');
			//$id = $request->getParam('id');
			//$user = $this->db->table('users')->find($id);

	    	//var_dump($user->name); 
	    	//var_dump($user->email); 
	    	//var_dump($user->password); 
	    	//$user = User::where('email', 'tomeks@o2.pl')->first();
			
		}

		public function about($request, $response) {
		return $this->view->render($response, 'about.twig');
		//	$id = $request->getParam('name');
		//	echo "<hr>";
		//	echo $id;
		//	echo "<hr>";
		//	var_dump($id);
		//	return 'Home Controller';
		}

}

?>