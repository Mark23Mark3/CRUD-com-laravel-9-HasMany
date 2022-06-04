<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularioProduto extends FormRequest
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
            "preco"=>["bail","required","max:1000","numeric"],
         

        ];
    }

    public function messages()
    {
        # code...

        return[



                "nome.required"=>"Insira um Nome Por favor",
                "preco.required"=>"Insira um preco Por favor",
                "preco.numeric"=>"Insira um valor numerico Por favor"
            
              
        ];
    }
}
