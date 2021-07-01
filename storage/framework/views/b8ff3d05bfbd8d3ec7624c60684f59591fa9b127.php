<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show-Box Newsletter</title>
    <!--<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    
  </head>
  <body>
    <div class="container">
    <?php if(\Session::has('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
      </div><br />
     <?php endif; ?>
     <?php if(\Session::has('failure')): ?>
      <div class="alert alert-danger">
        <p><?php echo e(\Session::get('failure')); ?></p>
      </div><br />
     <?php endif; ?>
      <h2>Show-Box Newsletter</h2><br/>
      <form method="post" action="<?php echo e(url('newsletter')); ?>">
        <?php echo csrf_field(); ?>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-movies-example-master\resources\views/newsletter.blade.php ENDPATH**/ ?>