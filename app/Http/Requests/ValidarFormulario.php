<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormulario extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            //
            "nome"=>["bail","required","max:100","min:4"],
         

        ];
    }

    public function messages()
    {
        # code...

        return[



                "nome.required"=>"Insira um Nome Por favor",
                "nome.min"=>"no minimo 4 caracter"
              
        ];
    }
}
