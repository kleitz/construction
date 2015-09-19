<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Add construction project name</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="/insert_independent_monitoring" method="post">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Project</label>
            <div class="col-sm-6">
              <input type="text" name="project" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Scope of Work</label>
            <div class="col-sm-6">
              <input type="text" name="scope_of_work" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Duration Time</label>
            <div class="col-sm-6">
              <input type="number" name="duration_time" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Possible Action</label>
            <div class="col-sm-6">
              <input type="number" name="possible_action" value="" class="form-control">
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
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color">Project</th>
         <th class="table_color">Scope of Work</th>
         <th class="table_color">Duration Time</th>
         <th class="table_color">Possible Action</th>
         <th class="table_color">Action</th>
              </tr>

     </thead>
       <tbody>
<?php foreach ($this->common->select_independent_monitoring() as $key => $value):
     extract($value);
  ?>
            <tr>
              <td class="bordered"><?php echo $project ?></td>
              <td class="bordered"><?php echo $scope_of_work ?></td>
              <td class="bordered"><?php echo $duration_time ?></td>
              <td class="bordered"><?php  echo $possible_action?></td>
              <td class="bordered">
                   <a  class="a-table label label-info" href="#">Update&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></a>
                   <a  class="a-table label label-danger" href="/del_independent_monitoring/<?php echo $id ?>">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
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
