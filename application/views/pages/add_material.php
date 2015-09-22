<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Add details to Proposed Construction</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php
      echo $this->session->flashdata('message');
      $fs = $id;
      ?>

      <form class="form-horizontal" action="/insert_add_material" method="post">
        <input type="hidden" name="hidden_id" value="<?php echo  $id;?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">Scope of Work</label>
            <div class="col-sm-6">
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
            <label class="col-sm-2 control-label">Type</label>
            <div class="col-sm-6">
              <select class="form-control" name="type">
                <option value="1">Materials</option>
                <option value="2">Labor</option>
                <option value="3">Equipment</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-6">
              <input type="text" name="description" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Unit</label>
          <div class="col-sm-6">
            <select class="form-control" name="unit">
              <option>None</option>
              <option>Kgs</option>
              <option>Kgs</option>
            </select>
          </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Total Quantity</label>
            <div class="col-sm-6">
              <input type="number" name="tquantity"step="any" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-6">
              <input type="number" name="quantity" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Unit Cost</label>
            <div class="col-sm-6">
              <input type="number" name="unitcost"step="any" value="" class="form-control">
            </div>

        </div>
              <div class="form-group">
            <label for="" class="col-sm-2 control-label">No of days to be Finished</label>
            <div class="col-sm-6">
              <input type="number" name="days" value="<?php echo $id ?>" class="form-control">
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
      <table cellspacing="0" width="100%">
       <tr>
         <th  class="table_color">Scope Of Work</th>
         <th class="table_color">Description</th>
         <th class="table_color">Unit</th>
         <th class="table_color">Qty</th>
         <th class="table_color">Unit Cost</th>
         <th class="table_color">Total</th>
         <th class="table_color">Action</th>
       </tr>


       <?php
          foreach ($this->common->get_scopes($fs) as $k):
        ?>
         <tr>
             <td class="bordered" colspan="6"><b><?php echo $k['sc'] ?></b></td>

         </tr>
         <?php foreach ($this->common->get_type($k['scope_of_work'], $fs) as $key => $value): ?>
           <tr>
             <td></td>

             <?php if ($value['type'] == 1): ?>
               <td colspan="5"><b>Materials</b></td>
             <?php elseif ($value['type'] == 2): ?>
               <td colspan="5"><b>Laborers</b></td>
             <?php elseif ($value['type'] == 3): ?>
               <td colspan="5"><b>Equipment</b></td>
             <?php endif; ?>
           </tr>
           <?php
              foreach ($this->common->get_all_mat($value['type'], $fs,$k['scope_of_work']) as $key => $va):
                extract($va)
             ?>
             <tr>
              <td></td>
                <td><?php echo $description ?></td>
                <td><?php echo $unit ?></td>
                <td><?php echo $quantity ?></td>
                <td><?php echo $unit_cost; ?></td>
                <td><?php echo $quantity * $unit_cost ?></td>
                <td>
                     <a  class="a-table label label-danger" href="del_project-site">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
                </td>
              </tr>

           <?php endforeach; ?>
         <?php endforeach; ?>
       <?php endforeach; ?>
      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
