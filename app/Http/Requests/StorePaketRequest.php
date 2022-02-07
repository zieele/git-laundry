<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaketRequest extends FormRequest
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
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id_outlet.required' => 'Outlet dibutuhkan.',
            'jenis.required' => 'Pilih jenis terlebih dahulu.',
            'nama_paket.required' => 'Nama paket dibutuhkan.',
            'harga.required' => 'Harga dibutuhkan.',
        ];
    }
}
