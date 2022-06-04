<?php $__env->startSection("conteudo"); ?>


<div class="grid grid-cols-2 grid-rows-1 h-screen w-full ">
  <div class="bg-gray-200 flex flex-col justify-center items-center px-4">
   
    <table class="w-full text-sm text-left  rounded">
      <thead class="text-xs rounded text-white  uppercase bg-gray-500 ">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Nome
              </th>
              <th scope="col" class="px-6 py-3">
                Email
              </th>
              <th scope="col" class="px-6 py-3">
                  Telemovel
              </th>
          
              <th scope="col" class="px-6 py-3">
                  Opções
              </th>
          </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      
        <?php if($pessoa->count() > 0): ?>
          
        
      
          <tr class="bg-gray-700 border-b ">
              <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                 <?php echo e($pessoa->nome); ?>

              </th>
              <td class="px-6 py-4 text-white">
                <?php echo e($pessoa->email); ?>

              </td>
              <td class="px-6 py-4 text-white">
                <?php echo e($pessoa->telemovel); ?>

              </td>
           
              <td class="px-6 py-4 text-right space-x-2">
                  <a href="<?php echo e(route('editar',["id"=>$pessoa->id])); ?>" class="font-medium hover:underline">
                    <i class="fas fa-edit text-xl text-yellow-300  "></i>
                  </a>
                  <a href="<?php echo e(route('apagar',["id"=>$pessoa->id])); ?>" class="font-medium  hover:underline">
                    <i class="fa fa-trash text-xl text-red-300 "></i>
                  </a>
              </td>
          </tr>
     
          <?php else: ?>



          <p>Sem usuarios</p>
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
  </table>
  </div>


  <div class="flex flex-col justify-center items-center  bg-gray-800 ">
    <form class="outline-none" method="POST" action="<?php echo e(route("adicionar")); ?>" >
      <?php echo csrf_field(); ?>
      <div class="mb-6">
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-300">Nome</label>
        <input type="text" id="nome" name="nome" class="border 
        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block focus:outline-none
         w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 
         text-white " placeholder="Nome">
      </div>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
        <input type="email" id="email" name="email" placeholder="email" class="border 
        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block focus:outline-none
         w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 
         text-white ">
      </div>
      <div class="mb-6">
        <label for="telemovel" class="block mb-2 text-sm font-medium text-gray-300">Telemovel</label>
        <input type="number" id="telemovel" name="telemovel" class="border  
        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block focus:outline-none
         w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 
         text-white " >
      </div>

      <button type="submit" class="text-white  focus:ring-4 focus:outline-none
        font-medium rounded-lg text-sm w-full 
       sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700
        focus:ring-blue-800">Salvar</button>
    </form>
  </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M\Desktop\Fase 1\PraticaLaravel\resources\views/Home.blade.php ENDPATH**/ ?>