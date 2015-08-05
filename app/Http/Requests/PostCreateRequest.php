<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostCreateRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
    //        'slug' => 'required|unique:posts,slug',
            'summary' => 'required|min:3|max:65000',
            'content' => 'required|min:3|max:65000',
            'tags' => 'tags'
        //    'created_at' => ['required', 'date']
        ];
    }
}

