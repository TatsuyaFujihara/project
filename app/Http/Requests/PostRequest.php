<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:7|confirmed',
          ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'name.min' => '名前は2文字以上入力して下さい。',
            'name.max' => '名前は5文字以下で入力して下さい。',
            'email.required' => 'メールアドレスを入力して下さい。',
            'email.email' => '正しいメールアドレスを入力して下さい。',
            'password.required' => 'パスワードを入力して下さい。',
            'password.min' => 'パスワードは7文字以上入力して下さい。',
            'password.confirmed' => '入力されたパスワードが確認用パスワードと異なります。',
        ];
    }
}
