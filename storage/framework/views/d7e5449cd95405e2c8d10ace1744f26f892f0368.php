<?php $__env->startSection('title', 'Student Managemet'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e('/save'); ?>" method="post">
<?php echo csrf_field(); ?>
<div class="m-4">
  <h4>お問い合わせフォーム</h4>
</div>

    <div class="form-group">
      <label for="disabledTextInput">名前</label>
      <input name="name" type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">メールアドレス</label>
      <input name="mailaddress" type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">電話番号</label>
      <input name="phonenumber" type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">お問い合わせ内容</label>
      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">送信</button>

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/management/resources/views/contact.blade.php ENDPATH**/ ?>