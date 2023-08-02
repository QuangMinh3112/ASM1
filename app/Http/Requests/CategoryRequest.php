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
    public function rules()
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'post':
                switch ($currentAction) {
                    case 'add':
                        $rules = [
                            'name' => 'required|unique:categories,name|max:50',
                        ];
                        break;
                    default:
                        break;
                }
            default:
                break;
        }
        return $rules;
        // return [
        //     'name' => 'required|unique:categories,name|max:50'
        // ];
    }
}
