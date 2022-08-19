


<?php $__env->startSection('content'); ?>
<div class="container">



<?php if(Session :: has('mensaje')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
<?php echo e(Session :: get('mensaje')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>





<a href="<?php echo e(url('producto/create')); ?>" 
class="btn btn-success"
>Registrar nuevo producto</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre </th>
            <th>Descripción </th>
            <th>Precio </th>
            <th>Stock</th>
             <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($producto->id); ?></td>


            <td>
                <img class="img-thumbnail img-fluid"
                src="<?php echo e(asset('storage').'/'.$producto->Foto); ?>" alt="" width="100">

               
            </td>


            <td><?php echo e($producto->Nombre); ?></td>
            <td><?php echo e($producto->Descripción); ?></td>
            <td><?php echo e($producto->Precio); ?></td>
            <td><?php echo e($producto->Stock); ?></td>
            <td>
                <a href="<?php echo e(url('/producto/'.$producto->id.'/edit')); ?>" 
                class="btn btn-warning"
                >
                Editar
                </a>
            |
                
            <form action="<?php echo e(url('/producto/'.$producto->id)); ?>"
             method="post"
             class="d-inline"
             >
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input type="submit" value="Borrar" onclick="return confirm('¿Quieres borrar?')"
            class="btn btn-danger"
            >
            </form>
            
           </td>
            <td></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $productos->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crudProductos\resources\views/producto/index.blade.php ENDPATH**/ ?>