<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Supply Management</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="index.html" method="post">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Date to Deliver</label>
            <div class="col-sm-6">
              <input type="date" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Time</label>
            <div class="col-sm-6">
              <input type="time" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Material</label>
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
        <div class="form-group" >
            <label for="" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-6">
                <input type="text" name="name" value="" class="form-control">
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
         <th class="table_color"></th>
         <th class="table_color">Material</th>
         <th class="table_color">Unit</th>
         <th class="table_color">Quantity</th>
         <th class="table_color">Price</th>
         <th class="table_color">Total</th>
         <th class="table_color">DATE RECIEVE</th>
         <th class="table_color">Time</th>
         <th class="table_color">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td><?php echo $i ?></td>
             <td class="bordered">Portland Cement</td>
             <td class="bordered">CU.M.</td>
             <td class="bordered">83</td>
             <td class="bordered">900</td>
             <td class="bordered">74,700.00</td>
             <td>Date</td>
             <td>Time</td>
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
