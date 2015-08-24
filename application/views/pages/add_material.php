<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Add Material to Proposed Construction</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="index.html" method="post">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Item No.</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">% of</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Unit</label>
          <div class="col-sm-6">
            <select class="form-control" name="">

            </select>
          </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Unit</label>
            <div class="col-sm-6">
              <input type="number" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Total</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control-disable">
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
         <th class="table_color">Item No.</th>
         <th class="table_color">Desciption</th>
         <th class="table_color">%of</th>
         <th class="table_color">Unit</th>
         <th class="table_color">Qty</th>
         <th class="table_color">Unit Cost</th>
         <th class="table_color">Total</th>
         <th class="table_color">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td class="bordered">Item No.</td>
             <td class="bordered">Desciption</td>
             <td class="bordered">%of</td>
             <td class="bordered">Unit</td>
             <td class="bordered">Qty</td>
             <td class="bordered">Unit Cost</td>
             <td class="bordered">Total</td>
             <td class="bordered">
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
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
