<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Unused Material</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="index.html" method="post">

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
                 <td class="bordered"><?php $x = 900 - (900*.10 )  ;
                  echo $x; ?></td>
                 <td class="bordered"><?php echo 83 * $x; ?></td>
                    <td class="bordered">
                   <a  class="a-table label label-info" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Buy&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                   <a  class="a-table label label-info" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">Rent&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                    </td>

               </tr>

           <?php  } ?>

           </tbody>
          </table>


      </form>
      </div>
      </div>
      </div>

      <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="index.html" method="post">
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Date to Deliver</label>
              <div class="col-sm-9">
                <input type="date" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Time</label>
              <div class="col-sm-9">
                <input type="time" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Material</label>
              <div class="col-sm-9">
                <input type="text" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Unit</label>
            <div class="col-sm-9">
              <select class="form-control" name="">

              </select>
            </div>
          </div>
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-9">
                <input type="text" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group" >
              <label for="" class="col-sm-3 control-label">Price</label>
              <div class="col-sm-9">
                  <input type="text" name="name" value="" class="form-control">
              </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>





<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="index.html" method="post">
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Date to Deliver</label>
              <div class="col-sm-9">
                <input type="date" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Time</label>
              <div class="col-sm-9">
              <input type="time" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Material</label>
              <div class="col-sm-9">
                  <label for="" class="col-sm-3 control-label">Material</label>
              </div>

          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Unit</label>
            <div class="col-sm-9">
                <label for="" class="col-sm-3 control-label">Unit</label>
            </div>
          </div>
          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-9">
                <input type="text" name="name" value="" class="form-control">
              </div>

          </div>
          <div class="form-group" >
              <label for="" class="col-sm-3 control-label">Price</label>
              <div class="col-sm-9">
                  <label for="" class="col-sm-3 control-label">810</label>
              </div>
          </div>

          <div class="form-group" >
              <label for="" class="col-sm-3 control-label">Days</label>
              <div class="col-sm-9">
                  <input type="number" name="name" value="" class="form-control">
              </div>
          </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
