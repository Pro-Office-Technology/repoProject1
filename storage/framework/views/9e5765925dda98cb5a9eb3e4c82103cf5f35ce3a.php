<?php $__env->startSection('title', 'Index Field'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Index Field</h6>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <span class="font-weight-bold" style="font-size: 24px; color: black;">Index Field</span>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="card-body">
        <div class="text-right">
             <?php if(auth()->user()->level == 'Admin'): ?>
            <a href="<?php echo e(route('products.add')); ?>" class="btn btn-primary mb-3" style="color: #333;">Add</a>
            <?php endif; ?>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <?php if(auth()->user()->level == 'Admin'): ?>
                        <th>Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php ($no = 1); ?>
                     <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->name); ?></td>
                        <td><?php echo e($row->type); ?></td>
                        <?php if(auth()->user()->level == 'Admin'): ?>
                        <td>
                            <a href="<?php echo e(route('products.update', $row->id)); ?>" class="btn btn-warning">Edit</a>
                             <a href="<?php echo e(route('products.delete', $row->id)); ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\contoh\resources\views/products/index.blade.php ENDPATH**/ ?>