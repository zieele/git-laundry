<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOutletRequest extends FormRequest
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
            'tlp' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama dibutuhkan.',
            'alamat.required' => 'Alamat dibutuhkan.',
            'tlp.required' => 'No. Telp dibutuhkan.',
        ];
    }
}
