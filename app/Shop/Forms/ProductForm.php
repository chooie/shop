<?php
namespace Shop\Forms;

use Laracasts\Validation\FormValidator;

class ProductForm extends FormValidator {
    /**
     * Validation rules for the registration form
     * @var array
     */
    protected $rules = [
        'name' => 'required|max:255',
        'price' => 'required|numeric|max:999999.99|regex:/^\d*(\.\d{2})?$/'
    ];
}