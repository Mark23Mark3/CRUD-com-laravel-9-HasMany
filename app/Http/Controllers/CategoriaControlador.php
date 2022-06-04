<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarFormulario;
use App\Models\Categoria;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class CategoriaControlador extends Controller
{
    //
    public function index(){
        $categorias = Categoria::all();
        return view("admin.categoria.index",["categoria"=>$categorias]);
    }

    public function adicionar(ValidarFormulario $request){

    
     

      Categoria::create(
         [
             "nome"=>$request->nome,
             "slug"=>Str::slug($request->nome)
         ]
      );

      return redirect()
      ->route("inicio")
      ->with("sucesso","categoria adicionada");
      ;
        
    }





    public function apagar($id){


        Categoria::destroy($id);
        return redirect()->route("inicio");


    }

    public function editar($id){

        $categorias =Categoria::find($id);
        return view("admin.categoria.editar_categoria",["categoria"=>$categorias])->with("sucesso","editado com sucesso");

    }
    public function update(ValidarFormulario $request){


        $id = $request->input("editado");

        $categorias=Categoria::find($id);
        $categorias->update($request->all());


       $categorias->save();

      return  redirect()->route("inicio")->with("sucesso","editado com sucesso");


    }



}
