<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
</head>
<body>
    <form action="<?php echo e(route('photo.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="photo" id="">
        <input type="submit" value="Submit">
    </form>
    <?php if(Session('status')): ?> <?php echo e(session('status')); ?> <?php endif; ?>
</body>
</html><?php /**PATH D:\practice5\resources\views/photo.blade.php ENDPATH**/ ?>