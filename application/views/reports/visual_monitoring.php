<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Add construction project name</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="/insert_visual_monitoring" method="post">
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Project</label>
            <div class="col-sm-4">
              <select class="form-control" name="scopeofwork">
                <?php foreach ($this->common->select_scopework($id) as $key => $value):
                  extract($value);
                  ?>
                        <option value=<?php echo $id ?>><?php echo $scopework ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            
        </div>
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Scope of Work</label>
            <div class="col-sm-4">
              <select class="form-control" name="scopeofwork">
                <?php foreach ($this->common->select_scopework() as $key => $value):
                  extract($value);
                  ?>
                        <option value=<?php echo $id ?>><?php echo $scopework ?></option>
                <?php endforeach; ?>
              </select>

            </div>
            
        </div>
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">no. of days completed</label>
            <div class="col-sm-4">
              <input type="number" name="days" value="" class="form-control">
            </div>
        </div>
            <div class="form-group">
            <label for="" class="col-sm-4 control-label">Upload Blueprint</label>
            <div class="col-sm-4">
              <button class="btn btn-success"  type="button" name="button">Browse...</button>
              <div class="pull-right">
                  <button type="submit" class="btn btn-success" name="button">Save</button>
                  <button type="#" class="btn btn-info" name="button">Cancel</button>
              </div>
              
            </div>
        </div>

        <div class="col-md-12">
          <label class="col-sm-6"></label>
          <div class="col-sm-4">
            <label for="">&nbsp;</label>
                
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
         <th class="table_color">No of Days Completed</th>
             <th class="table_color" style="width:230px">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php foreach ($this->common->select_visual_monitoring() as $key => $value):
           extract($value);
           ?>
              <tr>
             <td class="bordered"><?php echo $project ?></td>
             <td class="bordered"><?php echo $scope_of_work ?></td>
             <td class="bordered"><?php echo $days ?></td>
                 <td class="bordered">
                  <a  class="a-table label label-info" href="#">Update&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></a>
                  <a  class="a-table label label-danger" href="/del_visual_monitoring/<?php echo $id ?>">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
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
