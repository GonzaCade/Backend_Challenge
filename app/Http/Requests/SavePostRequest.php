<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SavePostRequest extends FormRequest
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
            'titulo' => 'required|max:100',
            'slug' => [
                'required',
                Rule::unique('posts')->ignore($this->route('post')),
                'max:100'
            ],
            'descripcion' => 'required',
            'imagen' => [
                $this->route('post') ? 'nullable' : 'required',
                'mimes:jpeg,png,jpg',
                'max:10240'
            ]
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El post no contiene un titulo',
            'slug.required' => 'El post no contiene un slug',
            'slug.unique' => 'Ya existe un post con ese slug',
            'descripcion.required' => 'El post no contiene una descripcion',
            'imagen.required' => 'El post no contiene una imagen',
            'imagen.image' => 'El archivo subido no es una imagen, o es un archivo muy pesado'
        ];
    }
}
