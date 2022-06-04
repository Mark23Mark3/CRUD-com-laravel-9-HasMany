
<?php $__env->startSection("tabela"); ?>

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

            <?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($p->count() <= 0): ?>
            
            <tr>

                sem produtos
            </tr>
                
            <?php else: ?>

                   
          
            <tr class=" border-b bg-gray-80 file:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                    <?php echo e($p->nome); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($p->preco); ?> kZ
                </td>
                <td class="px-6 py-4">
                    <?php echo e($p->categoria->nome); ?>

                </td>
                <td class="px-6 py-4">
                    <a href="<?php echo e(route("editar_produto",["id"=>$p->id])); ?>"   class="text-yellow-500">editar</a>
                    <a href="<?php echo e(route("apagar_produto",["id"=>$p->id])); ?>" class="text-red-500 ">apagar</a>
                </td>
              
            </tr>


            <?php endif; ?>
         
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
    </table>
</div>

</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\Users\M\Desktop\Fase 1\PraticaLaravel\resources\views/admin/produto/tabela.blade.php ENDPATH**/ ?>