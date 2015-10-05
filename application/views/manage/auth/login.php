<div class="row">
<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
<form method="POST" action="<?php echo site_url("manage/auth/login/");?>" >
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="username ...." name="user">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
</div>
</div>