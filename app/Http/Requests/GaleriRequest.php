<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
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
            'nama_proker' => 'required|string|unique:galeris,nama,'.$this->galeri_id,
            'nama_proker_singkatan' => 'required|string|unique:galeris,nama_singkatan,'.$this->galeri_id ,
            'tanggal_acara' => 'required',
            'deskripsi' => 'required|string',
        ];
    }
}
