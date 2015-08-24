<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 10px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>User Login</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-6 col-md-offset-3">
      <?php echo $this->session->flashdata('message'); ?>
      <form  action="/verify-login" method="post">
          <label for="username">Username</label>
          <input type="text" name="username" value="" class="form-control" placeholder="Username">
          <label for="password">Password</label>
          <input type="password" name="password" value="" class="form-control" placeholder="Password">
          <br />
            <button type="submit" class="btn btn-success" style="width:90px">Login</button>
              <a href="/" class="btn btn-info" style="width:90px">Cancel</a>
      </form>
    </div>
  </div>
</div>
<br/><br/>
