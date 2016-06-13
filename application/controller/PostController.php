<?php

class postController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /overview/index in your app.
     * Shows a list of all users.
     */
    public function index()
    {
        $this->View->render('post/index', array(
        	 'post' => PostModel::getAllPosts()));
    }
    public function create()
    {
        PostModel::createPost(Request::post('post_text'));
        Redirect::to('post');
    }

    /**
     * This method controls what happens when you move to /note/edit(/XX) in your app.
     * Shows the current content of the note and an editing form.
     * @param $note_id int id of the note
     */
    public function edit($post_id)
    {
        $this->View->render('post/edit', array(
            'post' => PostModel::getPost($post_id)
        ));
    }

    /**
     * This method controls what happens when you move to /note/editSave in your app.
     * Edits a note (performs the editing after form submit).
     * POST request.
     */
    public function editSave()
    {
        PostModel::updatePost(Request::post('post_id'), Request::post('post_text'));
        Redirect::to('post');
    }

    /**
     * This method controls what happens when you move to /note/delete(/XX) in your app.
     * Deletes a note. In a real application a deletion via GET/URL is not recommended, but for demo purposes it's
     * totally okay.
     * @param int $note_id id of the note
     */
    public function delete($post_id)
    {
        PostModel::deletePost($post_id);
        Redirect::to('post');
    }
}
