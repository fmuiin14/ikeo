<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // default false, kita ubah gunanya untuk cek udh login apa ngga
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // untuk aturan yg akan ditambahkan
        return [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer'
        ];
    }
}
