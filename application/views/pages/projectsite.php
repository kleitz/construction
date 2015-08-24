<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Add construction project name</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="index.html" method="post">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Project Site</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Upload Blueprint</label>
            <div class="col-sm-6">
              <button type="button" name="button">Browse...</button>
            </div>
        </div>

        <div class="form-group">
          <label class="col-sm-6"></label>
          <div class="col-sm-2">
            <label for="">&nbsp;</label>
                  <button type="button" class="btn btn-success" name="button">Save</button>
                  <button type="button" class="btn btn-info" name="button">Cancel</button>
          </div>

        </div>
      </form>
    </div>
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color" style="width:5px"></th>
         <th class="table_color">Project Site</th>
         <th class="table_color" style="width:300px">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td><?php echo $i ?></td>
             <td class="bordered">Portland Cement</td>
             <td class="bordered">
                  <a  class="a-table label label-info" href="/add-material">Add Materials&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                  <a  class="a-table label label-info" href="#">Blueprint&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></a>
                  <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
                  </td>
           </tr>

       <?php  } ?>

       </tbody>
      </table>




      <br />
    </div>
  </div>
</div>
<br/><br/>
