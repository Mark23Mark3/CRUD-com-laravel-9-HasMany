@extends("master")




<div class="py-4 px-[400px] ">

    <form method="POST" action="{{route("update_categoria")}}">
        @csrf
        <input type="hidden" name="editado" value="{{$categoria->id}}">
        <div class="mb-6">
          <label for="texto" class="block mb-2 text-sm font-medium  text-gray-300">Editar Categoria</label>
          <input type="text" name="nome"  class=" border 
   text-sm rounded-lg 
           block w-full
           outline-none
        
           p-2.5 bg-gray-700  border-gray-600 
    placeholder-gray-400
        text-white focus:ring-blue-500 focus:border-blue-500" value="{{$categoria->nome}}" placeholder="Insira a sua categoria" >
        </div>
        @error("nome")
            
        <p class="bg-red-500 text-white px-4 py-1 my-3  rounded">{{ $message}}</p>
        @enderror

        @if (session("sucesso"))

             <p class="bg-green-500 text-white px-4 py-1 my-3  rounded">
                 {{ session("sucesso")}}</p>
        @endif
    
        <button type="submit" class="
         
     text-white
        font-medium rounded-lg text-sm w-full sm:w-auto
         px-5 py-2.5 text-center bg-blue-600 
         hover:bg-blue-700 focus:ring-blue-800">editar</button>
         
        <a href="{{route("inicio")}}" type="submit" class="
         
        text-white
           font-medium rounded-lg text-sm w-full sm:w-auto
            px-5 py-2.5 text-center bg-blue-600 
            hover:bg-blue-700 focus:ring-blue-800">Voltar</a>
      </form>
    
</div>













@include("admin.categoria.rodape")