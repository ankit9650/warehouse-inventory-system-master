<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<style>
<?php include_once('libs\css\main.css'); ?>
</style>

<div class="login-page">  
    <div class="text-center">
       <h1>Welcome to <span>Inventoriel</span></h1> 
       <p>Sign in to start your session</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
                <button type="submit" >Login</button>
        </div>
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>

