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

 		$query = $database->prepare($sql);
		$query->execute(array(':user_id' => Session::get('user_id'), ':post_id' => $post_id));

		return $query->fetch();
	}


 public static function createPost($post_title, $post_text)
    {
        if (!$post_text || strlen($post_text) == 0) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        if (!$post_title || strlen($post_title) == 0) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO posts (post_title, post_text) VALUES (:post_title, :post_text)";
        $query = $database->prepare($sql);
        $query->execute(array(':post_title' => $post_title, ':post_text' => $post_text));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    }
 }