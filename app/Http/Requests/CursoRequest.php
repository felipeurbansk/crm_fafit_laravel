<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'duracao' => 'required|integer',
            'ch_total' => 'required|numeric',
            'descricao' => 'required',
        ];
    }

    public function messages(){
      return [
          'nome.required' => '* É necessário informar o nome completo',
          'duracao.required' => '* É necessário informar o número de semestres do curso',
          'duracao.integer' => '* A duração é obrigatoriamente um valor inteiro',
          'ch_total.required' => '* É necessário informar o total de carga horaria',
          'ch_total.numeric' => '* A carga horaria é obrigatoriamente um valor descimal',
          'descricao.required' => '* É necessário uma descrição sobre o curso',
      ];
    }


}
