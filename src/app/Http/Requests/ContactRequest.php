<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    {　調べる！！！
        return [
            '' => ['required','string'],
            'name' => ['required', 'string'],
            '' => ['required'],
            'email' => ['required', 'string', 'email'],
            'tal' => ['required','numeric','max:5'],
            '' => ['required'],
            'contact' => ['required'],
            'contact' => ['required','max:120'],
        ];
    }

    public function messages()
     {　調べる！！！
         return [
             '.required' => '姓を入力してください',
             'name.required' => '名を入力してください',
             '.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'tel.required' => '電話番号を入力してください',
             '.required' => '住所を入力してください',
             'contact.' => 'お問い合わせの種類を選択してください',
             'name.required' => 'お問い合わせ内容を入力してください',
             'email.string' => 'メールアドレスはメール形式で入力してください',
             'tel.digits_between' => '電話番号は5桁までの数字で入力してください',
             'contact.max' => 'お問い合わせ内容は120文字以内で入力してください',
         ];
     }
}
