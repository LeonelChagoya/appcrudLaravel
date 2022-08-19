<br>
<h1><?php echo e($modo); ?> producto</h1>

<?php if(count($errors)>0): ?>
       
       <div class="alert alert-danger" role="alert">
        <ul>
       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <li> <?php echo e($error); ?></li>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
       </div>
      
<?php endif; ?>




    <div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input type='text' name="Nombre" value="<?php echo e(isset($producto->Nombre)?$producto->Nombre:old('Nombre')); ?>" id="Nombre"  class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Descripción"> Descripción</label>
    <input type='text' name="Descripción" value="<?php echo e(isset($producto->Descripción)?$producto->Descripción:old('Descripción')); ?>" id="Descripción" class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Precio"> Precio </label>
    <input type='text' name="Precio" value="<?php echo e(isset($producto->Precio)?$producto->Precio:old('Pricio')); ?>" id="Precio" class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Stock"> Stock</label>
    <input type='text' name="Stock" value="<?php echo e(isset($producto->Stock)?$producto->Stock:old('Stock')); ?>"  id="Stock" class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Foto"> </label>
   <?php if(isset($producto->Foto)): ?>
   
    <img src="<?php echo e(asset('storage').'/'.$producto->Foto); ?>" alt="" width="150"
    class="img-thumbnail img-fluid"
    >
    <?php endif; ?>
    </div>
    <br>
    <div class="form-group">
    <input type='file' name="Foto" value="" id="Foto" class="form-control"> 
    <br>
    </div>

    <input type='submit' value='<?php echo e($modo); ?> datos'  class="btn btn-secondary" >
    <a href="<?php echo e(url('producto/')); ?>"  class="btn btn-primary" >Regresar</a>
    <br>
   <?php /**PATH C:\xampp\htdocs\crudProductos\resources\views/producto/form.blade.php ENDPATH**/ ?>