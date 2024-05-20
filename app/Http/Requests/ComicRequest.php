<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'thumb' => 'required|min:3|max:350',
            'price' => 'required|min:3|max:50',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|min:3|max:50',
            'type' => 'required|min:3|max:50',
            'artists' => 'required|min:3|max:250',
            'writers' => 'required|min:3|max:250',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'thumb.required' => 'La copertina è un campo obbligatorio',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'series.required' => 'La serie è un campo obbligatorio',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'artists.required' => 'Gli artisti è un campo obbligatorio',
            'writers.required' => 'Gli scrittori è un campo obbligatorio',

            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'thumb.min' => 'La copertina deve contenere almeno :min caratteri',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'sale_date.min' => 'La data deve contenere almeno :min caratteri',
            'type.min' => 'Il tipo deve contenere almeno :min caratteri',
            'artists.min' => 'Gli artisti deve contenere almeno :min caratteri',
            'writers.min' => 'Gli scrittori deve contenere almeno :min caratteri',

            'title.max' => 'Il titolo deve contenere non piu di :max caratteri',
            'thumb.max' => 'La copertina deve contenere non piu di :max caratteri',
            'price.max' => 'Il prezzo deve contenere non piu di :max caratteri',
            'series.max' => 'La serie deve contenere non piu di :max caratteri',
            'sale_date.max' => 'La data deve contenere non piu di :max caratteri',
            'type.max' => 'Il tipo deve contenere non piu di :max caratteri',
            'artists.max' => 'Gli artisti deve contenere non piu di :max caratteri',
            'writers.max' => 'Gli scrittori deve contenere non piu di :max caratteri',
        ];
    }
}
