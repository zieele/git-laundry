<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tlp' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama dibutuhkan.',
            'alamat.required' => 'Alamat dibutuhkan.',
            'jenis_kelamin.required' => 'Jenis Kelamin dibutuhkan.',
            'tlp.required' => 'No. Telp dibutuhkan.',
        ];
    }
}
