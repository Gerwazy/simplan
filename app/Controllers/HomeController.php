<?php 

namespace App\Controllers;
use Slim\Views\Twig as View;

class HomeController extends Controller {


		public function home($request, $response) {
			return $this->view->render($response, 'home.twig');
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