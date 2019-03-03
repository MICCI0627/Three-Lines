<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShare extends FormRequest
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
            'url' => 'required|max:2100',
            'text1' => 'required|max:30',
            'text2' => 'required|max:30',
            'text3' => 'required|max:30',
        ];
    }

    public function attributes()
    {
        return [
            'url' => 'リンク記事のURL',
            'text1' => '1行目のまとめ',
            'text2' => '2行目のまとめ',
            'text3' => '3行目のまとめ',
        ];
    }
}
