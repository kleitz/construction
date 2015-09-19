<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Add construction project name</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="/insert_projectsite" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Project Site</label>
            <div class="col-sm-6">
              <input type="text" name="project_site" value="" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-6">
              <input type="text" name="location" value="" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Calenday Days to Complete</label>
            <div class="col-sm-6">
              <input type="number" name="cdtc" value="" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Bid Price</label>
            <div class="col-sm-6">
              <input type="number" name="bid_price" value="" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Upload Pert-Cpm</label>
            <div class="col-sm-6">
              <input  type="file" name="files">
              </div>
        </div>

        <div class="form-group">
          <label class="col-sm-6"></label>
          <div class="col-sm-2">
            <label for="">&nbsp;</label>
                  <button type="submit" class="btn btn-success" name="button">Save</button>
                  <a href="#" class="btn btn-info" name="button">Cancel</a>
          </div>

        </div>
      </form>
    </div>
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color">Project Site</th>
         <th class="table_color">Location</th>
         <th class="table_color">Calendar Days to Complete</th>
         <th class="table_color">Bid Price</th>
         <th class="table_color" style="width:250px">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php foreach ($this->common->select_project() as $key => $value):
           extract($value);
           ?>
           <tr>
             <td class="bordered"><?php echo $project_site ?></td>
             <td class="bordered"><?php echo $location ?></td>
             <td class="bordered"><?php echo $cdtc ?></td>
             <td class="bordered"><?php echo $bid_price ?></td>
             <td class="bordered">
                  <a  class="a-table label label-info" href="/add-material/<?php echo $id ?>">view Summary&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                  <a  class="a-table label label-info" href="/down_pert/<?php echo $id ?>">Pert-Cpm&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></a>
                  <a  class="a-table label label-danger" href="/del_project_site/<?php echo $id ?>">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
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
