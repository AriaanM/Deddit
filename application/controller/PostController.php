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
    NoteModel::createNote(Request::post('note_text'));
    Redirect::to('note');
}
}
 