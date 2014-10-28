<?php
class Post extends AppModel {

	/**
	 * Function to get posts
	 */
	public function getPosts() {
		
		return $this->find('all', array(
			'order' => array('Post.id' => 'desc')
			));
	}
}
