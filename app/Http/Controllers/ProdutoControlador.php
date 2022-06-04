<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Requests\ValidarFormularioProduto;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ProdutoControlador extends Controller
{
    //

    public function index(){

        $categoria = Categoria::all();
  $produto = Produto::all();
        return view("admin.produto.index",["produto"=>$produto,"categoriass"=>$categoria]);
    }

    public function adicionar(ValidarFormularioProduto $request){

    
        $categoria= Categoria::find($request->categoria_id);


        $categoria->produtos()->create(
        [
             "nome"=>$request->nome,
             "preco"=>$request->preco, 
             "slug"=>Str::slug($request->nome)
         ]
      );

      

     return redirect()
      ->route("inicio_produto")
      ->with("sucesso","produto adicionada");
      ;


      
      
        
    }





    public function apagar($id){


        Produto::destroy($id);
        return redirect()->route("inicio_produto");


    }

    public function editar($id){

       

        $produto =Produto::find($id);
        $categoria = Categoria::all();
        return view("admin.produto.editar_produto",["produto"=>$produto,"categoria"=>$categoria])->with("sucesso","editado com sucesso");

    }
    public function update(ValidarFormularioProduto $request){

        


      $id = $request->input("editado_produto");
      $categoria=Categoria::find($request->categoria_id);
       $categoria->produtos()->where("id",$id)->update(

        [
            "nome"=>$request->nome,
            "slug"=>Str::slug($request->nome),
            "preco"=>$request->preco
            
            ]

       );

       $categoria->save();
      








      return  redirect()->route("inicio_produto")->with("sucesso","editado com sucesso");


    }

}
