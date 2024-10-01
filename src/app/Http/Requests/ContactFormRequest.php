<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'gender' => 'required|between:1,3',
            'email' => 'required|email|max:255',
            'tel.*' => 'required|numeric|digits_between:1,5',
            'address' => 'required|max:255',
            'building' => 'required|max:255',
            'category_id' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value > Category::count()) {
                        $fail('システムエラーです');
                    }
                }
            ],
            'detail' => 'nullable|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'last_name.max' => '姓が長すぎます',
            'first_name.required' => '名を入力してください',
            'first_name.max' => '名が長すぎます',
            'gender.required' => '性別を選択してください',
            'gender.between' => '性別の選択が正しくありません',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレスを入力してください',
            'email.max' => 'メールアドレスが長すぎます',
            'tel.*.required' => '電話番号を入力してください',
            'tel.*.numeric' => '電話番号は数字で入力してください',
            'tel.*.max' => '電話番号は5桁以内で入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所が長すぎます',
            'building.required' => '建物名を入力してください',
            'building.max' => '建物名が長すぎます',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
