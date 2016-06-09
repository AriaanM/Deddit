<?php

class PostModel
	{

	public static function getAllPosts()
	{
		$database = Databasefactory::getFactory()->getConnection();

		$sql = "SELECT * FROM posts";
		$query = $database->prepare($sql);
		$query->execute();

		$all_posts = array();

		return $query->fetchAll();

	}

	public static function getPost($post_id)
	{
		$database = Databasefactory::getFactory()->getConnection();

		$sql = "SELECT * FROM posts";
		$query = $database->prepare($sql);
		$query->execute(array(':user_id' => Session::get('user_id'), ':post_id' => $post_id));

		return $query->fetch();
	}
}