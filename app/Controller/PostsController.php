<?php 
/**
* Class post controller extendes parent class AppController
* PostsController manages different functionallities of posts
*/
class PostsController extends AppController
{
	public $components = array('RequestHandler');
	
	/**
	 * Index action
	 */
	public function index() {

	}

	/**
	 * API _JSON
	 */
	public function api_getPosts() {
		$this->autoRender = false;
		//$result['status'] = true;
  		// $result['posts'] = $this->Post->getPosts();
		// $this->set(array('result' => $result, '_serialize' => 'result'));
		$array = array(
			'Batman' => array(
				'Suite' => 'Yes',
				'Flys' => 'No',
				'Superpowers' => 'No'
				),
			'Spiderman' => array(
				'Suite' => 'Yes',
				'Flys' => 'No',
				'Superpowers' => 'Yes'
				),
			'Thor' => array(
				'Suite' => 'Yes',
				'Flys' => 'Yes',
				'Superpowers' => 'Yes'
				),
			);

		echo json_encode($array);
	}
}

?>