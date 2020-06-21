<?php $__env->startSection('title', 'Student Management'); ?>

<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(url('/create')); ?>" class="ml-5">学生登録</a>
    <a href="<?php echo e(url('/contact')); ?>" class="ml-4">お問い合わせ</a>

   

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">姓</th>
          <th scope="col">名</th>
          <th scope="col">年齢</th>
          <th scope="col">学部</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>    
      <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($student->firstName); ?></td>
          <td><?php echo e($student->secondName); ?></td>
          <td><?php echo e($student->age); ?></td>
          <td><?php echo e($student->major); ?></td>
          <td>
            <a href="<?php echo e(url('/edit/'. $student->id)); ?>" class="btn btn-sm btn-warning">編集</a>
            <a href="<?php echo e(url('/delete/'. $student->id)); ?>" class="btn btn-sm btn-info">削除</a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

<?php $__env->stopSection(); ?>






















<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/management/resources/views/student.blade.php ENDPATH**/ ?>