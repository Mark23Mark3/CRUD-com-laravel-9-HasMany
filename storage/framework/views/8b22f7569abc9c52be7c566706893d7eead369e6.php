<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

     
    </head>
    <body class="bg-gray-800">
       
      
      <?php echo $__env->yieldContent("header"); ?>
      <?php echo $__env->yieldContent("input"); ?>
      <?php echo $__env->yieldContent("tabela"); ?>


      <?php echo $__env->yieldContent("rodape"); ?>
        


  <script src="<?php echo e(mix('js/app.js')); ?>"></script> 
 <script src="<?php echo e(('js/icones.js')); ?>"></script>    
 

    </body>
</html>
<?php /**PATH C:\Users\M\Desktop\Fase 1\PraticaLaravel\resources\views/master.blade.php ENDPATH**/ ?>