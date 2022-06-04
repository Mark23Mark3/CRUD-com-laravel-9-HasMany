




<div class="py-4 px-[400px] ">

    <form method="POST" action="<?php echo e(route("update_categoria")); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="editado" value="<?php echo e($categoria->id); ?>">
        <div class="mb-6">
          <label for="texto" class="block mb-2 text-sm font-medium  text-gray-300">Editar Categoria</label>
          <input type="text" name="nome"  class=" border 
   text-sm rounded-lg 
           block w-full
           outline-none
        
           p-2.5 bg-gray-700  border-gray-600 
    placeholder-gray-400
        text-white focus:ring-blue-500 focus:border-blue-500" value="<?php echo e($categoria->nome); ?>" placeholder="Insira a sua categoria" >
        </div>
        <?php $__errorArgs = ["nome"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            
        <p class="bg-red-500 text-white px-4 py-1 my-3  rounded"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <?php if(session("sucesso")): ?>

             <p class="bg-green-500 text-white px-4 py-1 my-3  rounded">
                 <?php echo e(session("sucesso")); ?></p>
        <?php endif; ?>
    
        <button type="submit" class="
         
     text-white
        font-medium rounded-lg text-sm w-full sm:w-auto
         px-5 py-2.5 text-center bg-blue-600 
         hover:bg-blue-700 focus:ring-blue-800">Adicionar</button>
         
        <a href="<?php echo e(route("inicio")); ?>" type="submit" class="
         
        text-white
           font-medium rounded-lg text-sm w-full sm:w-auto
            px-5 py-2.5 text-center bg-blue-600 
            hover:bg-blue-700 focus:ring-blue-800">Voltar</a>
      </form>
    
</div>













<?php echo $__env->make("admin.categoria.rodape", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M\Desktop\Fase 1\PraticaLaravel\resources\views/admin/categoria/editar_categoria.blade.php ENDPATH**/ ?>