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
		$query->execute(array(':user_id'
         => Session::get('user_id'), ':post_id' => $post_id));

		return $query->fetch();
	}

public static function createPost($post_text)
    {
        if (!$post_text || strlen($post_text) == 0) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO posts (post_text, user_id) VALUES (:post_text, :user_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':post_text' => $post_text, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    /**
     * Update an existing post
     * @param int $post_id id of the specific post
     * @param string $post_text new text of the specific post
     * @return bool feedback (was the update successful ?)
     */
    
    }

}