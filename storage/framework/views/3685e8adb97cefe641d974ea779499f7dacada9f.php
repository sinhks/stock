

<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-10 col-lg-10 p-3">
    <div class="fs-5 text-success"><i class="fa-solid fa-plus"></i> Category</div>
    <div class="mt-2">
        <a href="" class="text-decoration-none text-secondary"><i class="fa-solid fa-hand-point-left"></i>ត្រឡប់ទៅវិញ</a>
    </div>
    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>woops</strong> There were some problems with your input
        <br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
   
        
    <?php endif; ?>
        <form action="<?php echo e(route('category.store')); ?>"method="POST" class="mt-4 card p-5">
        <?php echo csrf_field(); ?>
       
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ឈ្មោះក្រុមប្រភេទ</span>
        <input type="text" name="category_name" class="form-control" placeholder="សូមបញ្ចូលក្រុមប្រភេទ" aria-label="Username" aria-describedby="basic-addon1">
        </div>


        
        <div class="input-group mb-3">
            <span class="input-group-text">បរិយាយ</span>
            <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
        </div>
        <div class="form-check">
  <input class="form-check-input" type="radio" name="status" >
  <label class="form-check-label" >
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    No
  </label>
</div>
        <button class="btn btn-light"><i class="fa-solid fa-arrow-left"></i> ត្រឡប់ក្រោយ</button>
        <!-- <input type="submit" name="រក្សាទុក" id="" value="រក្សាទុក" class="btn btn-success"> -->
        <button type="submit" class="btn btn-success">រក្សាទុក</button>
    </form>
        
    
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/category/create.blade.php ENDPATH**/ ?>