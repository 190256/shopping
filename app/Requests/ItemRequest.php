<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ItemRequest extends FormRequest
{
    public function authorize()
    {
        //return false;
        // true に変更
        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
