<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessoreRequest extends FormRequest
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
            'nome' => 'required',
            'titulacao' => 'required',
            'descricao' => 'required',
            'coordenador' => 'required',
        ];
    }

    public function messages(){
      return [
        'nome.required' => '* É necessário informar o nome completo',
        'titulacao.required' => '* É necessário informar a titulação que o professor possui',
        'descricao.required' => '* É necessário uma descrição do professor',
        'coordenador.required' => '* É necessário dizer se o professor é o coordenador de um curso',
      ];
    }
}
