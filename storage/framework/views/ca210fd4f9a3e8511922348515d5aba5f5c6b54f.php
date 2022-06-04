<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

     
    </head>
    <body class="antiliased bg-gray-200 grid grid-cols-2 grid-rows-1 m-2 " >
       
        




    
<form class="w-full bg-white shadow  rounded  p-10">
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome</label>
      <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nome" >
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email" >
      </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">senha</label>
      <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
 
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
  </form>
      





  
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full ">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                           Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Senha
                        </th>
                     
                        <th scope="col" class="px-6 py-3">
                        
                          opcoes
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                     
                        <td class="px-6 py-4">
                            <?php echo e($p->name); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($p->email); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($p->password); ?>

                        </td>
                        <td class="px-6 py-4">
                        
                            <span class="text-white">
                                <a href="<?php echo e(route("editar",["id",$p->usuarios])); ?>">editar</a>
                            </span>
                            <span class="text-red-400">apagar</span>
                        </td>
                      
                    </tr>
                   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
       
       

        


  <script src="<?php echo e(mix('js/app.js')); ?>"></script

    </body>
</html>
<?php /**PATH C:\Users\M\Desktop\Fase 1\PraticaLaravel\resources\views/welcome.blade.php ENDPATH**/ ?>