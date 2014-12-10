<?php
namespace Shop\Forms;

use Laracasts\Validation\FormValidator;

class UserCommentForm extends FormValidator {
    /**
     * Validation rules for the registration form
     * @var array
     */
    protected $rules = [
        'user_id' => 'required',
        'commenter_id' => 'required',
        'body' => 'required'
    ];
}