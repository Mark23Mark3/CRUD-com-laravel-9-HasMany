



<div class="grid grid-cols-2 grid-rows-1  w-full ">


<form class="w-[50%] justify-center items-center flex flex-col" method="POST" action="<?php echo e(route("create")); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome</label>
      <input type="text"
      
      value="<?php echo e(old('nome')); ?>"

      name="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nome" >
    </div>
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descrisao</label>
      <input type="text" 
      value="<?php echo e(old('nome')); ?>"
      name="descrisao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
  

    <?php $__errorArgs = ["nome"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p class="bg-red-400 text-white px-4 py-1  w-[200px]  mb-2 rounded text-center">
        <?php echo e($message); ?>

    </p>
        
    
        
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
 
  
    <?php $__errorArgs = ["descrisao"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p class="bg-red-400 text-white px-4 py-1  w-[200px]  mb-2 rounded text-center">
        <?php echo e($message); ?>

    </p>
        
    
        
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">add</button>
  </form>





<div class=" flex justify-center items-center mr-6">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nome
            </th>
            <th scope="col" class="px-6 py-3">
              descrisao
            </th>
            <th scope="col" class="px-6 py-3">
                opcoes
            </th>
       
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
              
                <?php echo e($p->nome); ?>

            </th>
            <td class="px-6 py-4">
                <?php echo e($p->nome); ?>

            </td>
         
            <td class="px-6 py-4 text-right">
                <a href="<?php echo e(route('edit',["id"=>$p->id])); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="<?php echo e(route('destroy',["id"=>$p->id])); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">apagar</a>
            </td>
           
        </tr>
 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
    </tbody>
</table>

</div>

    
</div>



<?php echo $__env->make("master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M\Desktop\Fase 1\PraticaLaravel\resources\views/home.blade.php ENDPATH**/ ?>