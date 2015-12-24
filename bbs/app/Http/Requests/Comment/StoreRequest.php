<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {

    public function rules() {
        return [
            'user' => 'required',
            'comment' => 'required',
        ];
    }
    public function messages() {
        return [
            'user.required' => '投稿者を正しく入力してください。',
            'comment.required' => '本文を正しく入力してください。'
        ];
    }

    public function authorize() {
         return true;
    }

}
