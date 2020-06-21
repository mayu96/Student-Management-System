<?php $__env->startSection('title', 'Student Management'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e('/update/'. $student->id); ?>" method="post">
<?php echo csrf_field(); ?>
                
<div class="form-group">
    <label>姓</label>
    <input value="<?php echo e($student->firstName); ?>" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
</div>
<div class="form-group">
    <label>名</label>
    <input value="<?php echo e($student->secondName); ?>" name="secondName" type="text" class="form-control" placeholder="Enter second name">
</div>
<div class="form-group">
    <label>年齢</label>
    <input value="<?php echo e($student->age); ?>" name="age" type="text" class="form-control" placeholder="Enter the Age">
</div>
<div class="form-group">
    <label>学部</label>
    <input value="<?php echo e($student->major); ?>" name="major" type="text" class="form-control" placeholder="Enter major">
</div>
<input type="submit" class="btn btn-info" value="更新">
<input type="reset" class="btn btn-warning" value="リセット">     

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/management/resources/views/edit.blade.php ENDPATH**/ ?>