<?php

namespace App\Http\Requests\Thread;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {

    public function rules() {
        return [
            'title' => 'required',
            'user' => 'required',
            'description' => 'required'
        ];
    }
    public function messages() {
        return [
            'title.required' => 'タイトルを正しく入力してください。',
            'user.required' => '投稿者を正しく入力してください。',
            'description.required' => '本文を正しく入力してください。'
        ];
    }

    public function authorize() {
         return true;
    }

}
