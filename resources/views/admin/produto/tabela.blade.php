
@section("tabela")

<div class="py-4 px-[300px] mb-[20px]" >


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-400">
        <thead class="text-xs uppercase  bg-gray-700 text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
             
                    <th scope="col" class="px-6 py-3">
                        Preço
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                <th scope="col" class="px-6 py-3">
                    Opcoes
                </th>
            
            </tr>
        </thead>
        <tbody>

            @foreach ($produto as $p )

            @if ($p->count() <= 0)
            
            <tr>

                sem produtos
            </tr>
                
            @else

                   
          
            <tr class=" border-b bg-gray-80 file:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                    {{ $p->nome}}
                </td>
                <td class="px-6 py-4">
                    {{ $p->preco}} kZ
                </td>
                <td class="px-6 py-4">
                    {{ $p->categoria->nome}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route("editar_produto",["id"=>$p->id])}}"   class="text-yellow-500">editar</a>
                    <a href="{{route("apagar_produto",["id"=>$p->id])}}" class="text-red-500 ">apagar</a>
                </td>
              
            </tr>


            @endif
         
            @endforeach
        
        </tbody>
    </table>
</div>

</div>
@endsection