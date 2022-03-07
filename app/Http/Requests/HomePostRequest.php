<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //edited, original = false
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
            'title' => 'required_without_all:genere,type,director,actor|max:255',
            'type' => 'required_without_all:title,genere,director,actor',
            'genere' => 'required_without_all:type,title,director,actor',
            'director' => 'required_without_all:genere,title,type,actor',
            'actor' => 'required_without_all:genere,title,type,director',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'type.required_without_all' => "You need to fill in at least one field to filter movies.",
            'title.required_without_all' => "You can't search without a flick title.",
            'title.max' => "Flick term too long, can't exceed 255 characters",
        ];
    }
}
