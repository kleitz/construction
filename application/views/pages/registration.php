<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Registration</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php
      echo $this->session->flashdata('message');
      ?>

      <form class="form-horizontal" action="/insert_account" method="post">
              <div class="form-group">
            <label for="" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>
        </div>
              <div class="form-group">
            <label for="" class="col-sm-2 control-label">Type</label>
            <div class="col-sm-6">
              <select class="form-control" name="type">
                <option value="1">Project Manager</option>
                  <option value="2">Admin</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-6">
              <input type="text" name="username" value="" class="form-control">
            </div>
        </div>
<div class="form-group">
            <label for="" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-6">
              <input type="password" name="password" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-6">
              <input type="password" name="cpassword" value="" class="form-control">
            </div>
        </div>


                       <div class="form-group">
          <label class="col-sm-6"></label>
          <div class="col-sm-2">
            <label for="">&nbsp;</label>
                  <button type="submit" class="btn btn-success" name="button">Save</button>
                  <button type="#" class="btn btn-info" name="button">Cancel</button>
          </div>

        </div>
      </form>
    </div>
    <div class="table-responsive col-md-12">
     <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color">no</th>
         <th class="table_color">Name</th>
         <th class="table_color">Action</th>
          </tr>

     </thead>
       <tbody>
         <?php foreach ($this->common->select_allaccount() as $key => $value):
           extract($value);
           ?>
           <tr>
             <td class="bordered"><?php echo $id ?></td>
             <td class="bordered"><?php echo $name ?></td>
             <td class="bordered">
                  <a  class="a-table label label-info" href="/update_account/<?php echo $id ?>">Update&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></a>
                  <a  class="a-table label label-danger" href="/del_account/<?php echo $id ?>">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
                  </td>
           </tr>
         <?php endforeach; ?>


       </tbody>
      </table>



      <br />
    </div>
  </div>
</div>
<br/><br/>
