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
            <label for="" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Calenday Days to Complete</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Approciation</label>
            <div class="col-sm-6">
              <input type="number" name="name" value="" class="form-control">
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
         <th class="table_color">Project Site</th>
         <th class="table_color">Location</th>
         <th class="table_color">Calendar Days to Complete</th>
         <th class="table_color">Approciation</th>
         <th class="table_color" style="width:230px">Action</th>
       </tr>

     </thead>
       <tbody>

           <tr>
             <td class="bordered">Construction of 2 Storey 6 Classrooms School Building</td>
             <td class="bordered">Bato SOF,bato Leyte</td>
             <td class="bordered">120 Calendr Days</td>
             <td class="bordered">P 8,214,965.05</td>
             <td class="bordered">
                  <a  class="a-table label label-info" href="/add-material">Add Materials&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                  <a  class="a-table label label-info" href="#">Blueprint&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></a>
                  <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
                  </td>
           </tr>

       </tbody>
      </table>




      <br />
    </div>
  </div>
</div>
<br/><br/>
