<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBarangRequest extends FormRequest
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
            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'qty' => 'required',
            'kondisi' => 'required',
            'tanggal_pengadaan' => 'required'
        ];
    }
}
