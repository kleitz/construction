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
         <th class="table_color">Unit Cost</th>
         <th class="table_color">Indirect Cost</th>
         <th class="table_color">No of Days to be Finished</th>
         <th class="table_color">Accomplishment %</th>
         <th class="table_color">Remarks</th>

       </tr>

         <?php for ($i=1; $i <= 1; $i++) { ?>
           <tr>
             <td class="bordered">Excavation</td>
             <td class="bordered">159.99</td>
             <td class="bordered">595.69</td>
             <td class="bordered">41,800</td>
             <td class="bordered">4</td>
             <td class="bordered">100%</td>
             <td class="bordered"></td>

           </tr>


       <?php  } ?>

      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
