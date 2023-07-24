<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        switch($this->method())
        {
            case 'POST':
                switch($currentAction)
                {
                    case 'add_category':
                        $rules = [
                            'name' => 'required|unique:categories,name|max:255'
                        ];
                        break;
                    default :
                        break;
                }
                break;
        }
        return $rules;
    }
}
