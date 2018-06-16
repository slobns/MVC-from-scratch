<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<style type="text/css">
  body {
    background-image: url(https://pixabay.com/get/ea37b60c2cf6043ed1534705fb0938c9bd22ffd41cb3144694f9c678a3/northern-lights-3273425_1920.jpg);
    background-repeat: no-repeat;
  }

   .well {
      margin-top: 250px;
    }
</style>
<div class="container">
<div class="col-md-6 col-md-offset-3 col-xs-12 well">
  <form class="form" action="<?=PROOT?>register/login" method="post">
  <h3 class="text-center">Log in</h3>  
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="Remember me"><input type="checkbox" id="remember_me" name="remember_me" value="on"> Remember me</label>
  </div>
 <div class="form-group">
    <input type="submit" value="Login" class="btn btn-primary">
 </div>
 <div class="text-right">
   <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
 </div>
</form>
</div>
</div>
<?php $this->end(); ?>