<?php
namespace Shop\Forms;

use Laracasts\Validation\FormValidator;

class ProductCommentForm extends FormValidator {
    /**
     * Validation rules for the registration form
     * @var array
     */
    protected $rules = [
        'product_id' => 'required',
        'commenter_id' => 'required',
        'body' => 'required'
    ];
}