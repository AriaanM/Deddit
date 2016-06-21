<?php

class postController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        //Auth::checkAuthentication();
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
        PostModel::createPost(Request::post('post_title'), Request::post('post_text'));
        Redirect::to('post');
    }

    public function read($post_id)
    {
        $this->View->render('post/read', array(
            'post' => PostModel::getPost($post_id)
        ));
    }
}
 