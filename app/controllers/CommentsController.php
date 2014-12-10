<?php

use Shop\Comments\ProductComment;
use Shop\Comments\UserComment;
use Shop\Forms\ProductCommentForm;
use Shop\Forms\UserCommentForm;

/**
 * Class CommentsController
 */
class CommentsController extends \BaseController {

    /**
     * @var ProductForm
     */
    private $productCommentForm;

    /**
     * @var
     */
    private $userCommentForm;


    /**
     * Constructor
     * @param ProductForm $registrationForm
     * @param UserComment $userComment
     */
    function __construct(
        ProductCommentForm $productCommentForm,
        UserCommentForm $userCommentForm)
    {
        $this->productCommentForm = $productCommentForm;
        $this->userCommentForm = $userCommentForm;
        $this->beforeFilter('auth');
    }

    /**
     * @return mixed
     */
    public function productComment()
    {
        $input = Input::all();

        $this->productCommentForm->validate($input);

        if (Auth::user()->id != $input['commenter_id'])
        {
            dd('fail');
        }

        $comment = new ProductComment();

        $comment->product_id = $input['product_id'];
        $comment->commenter_id = $input['commenter_id'];
        $comment->body = $input['body'];

        $comment->save();

        Flash::message('Thanks for joining in on the discussion!');

        return Redirect::back();
    }

    /**
     *
     */
    public function userComment()
    {
        $input = Input::all();

        $this->userCommentForm->validate($input);

        if (Auth::user()->id != $input['commenter_id'])
        {
            dd('fail');
        }

        $comment = new UserComment();

        $comment->user_id = $input['user_id'];
        $comment->commenter_id = $input['commenter_id'];
        $comment->body = $input['body'];

        $comment->save();

        Flash::message('Thanks for joining in on the discussion!');

        return Redirect::back();
    }

}