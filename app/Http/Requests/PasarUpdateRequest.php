<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasarUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_pedagang' => 'required|min:3|max:191',
            'jenis_dagangan' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nama_pedagang.required' => 'Kolom nama wajib diisi!',
            'nama_pedagang.min' => 'Kolom nama minimal 3 karakter!',
            'nama_pedagang.max' => 'Kolom nama maksimal 191 karakter!'
        ];
    }
}
