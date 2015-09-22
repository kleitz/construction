<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Estimated ost of Proposed Worked</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>



    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">

       <tr>
         <th class="table_color">Description</th>
         <th class="table_color">QTY</th>
         <th class="table_color">Unit</th>
         <th class="table_color">Unit Cost</th>
         <th class="table_color">Amount</th>
         <th class="table_color">Total Amount</th>

       </tr>

         <?php 
  foreach ($this->common->get_allmaterial($id) as $key => $va):
                extract($va)
             ?>
             <tr>
                <td class="bordered"><?php echo $scopework ?></td>
                <td class="bordered"><?php echo $tquantity ?></td>
                <td class="bordered"><?php echo $unit ?></td>
                <td class="bordered"><?php echo ($unitcost/$tquantity) ?></td>
                <td class="bordered"><?php echo $unitcost ?></td>
                <td class="bordered"><?php echo $unitcost ?></td>
                <td class="bordered"></td>
                </td>
              </tr>

           <?php endforeach; ?>

                 

      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
