<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Estimated ost of Proposed Worked</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>




        <table class="table table-bordered table-hover display" cellspacing="0" width="100%">

         <tr>
           <th class="table_color" colspan="4">Minimum Equipment Required</th>
           <th class="table_color" colspan="4">Technical Personnel Required</th>

         </tr>
         <tr>
           <th class="table_color" >Description</th>
           <th class="table_color" >No.</th>
           <th class="table_color" >Description</th>
           <th class="table_color" >No.</th>
           <th class="table_color" >Description</th>
           <th class="table_color" >No.</th>
           <th class="table_color" >Description</th>
           <th class="table_color" >No.</th>

         </tr>


 <?php for ($i=1; $i <=1; $i++) { ?>
             <tr>
               <td class="bordered">Description</td>
               <td class="bordered">no</td>
               <td class="bordered">Description</td>
               <td class="bordered">no</td>
               <td class="bordered">Description</td>
               <td class="bordered">no</td>
               <td class="bordered">Description</td>
               <td class="bordered">no</td>
             </tr>
 <?php  } ?>
        </table>
        <br />














    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">

       <tr>
         <th class="table_color">Item No.</th>
         <th class="table_color">Desciption</th>
         <th class="table_color">%of</th>
         <th class="table_color">Unit</th>
         <th class="table_color">Qty</th>
         <th class="table_color">Unit Cost</th>
         <th class="table_color">Total</th>

       </tr>

         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td class="bordered">Item No.</td>
             <td class="bordered">Desciption</td>
             <td class="bordered">%of</td>
             <td class="bordered">Unit</td>
             <td class="bordered">Qty</td>
             <td class="bordered">Unit Cost</td>
             <td class="bordered">Total</td>

           </tr>

       <?php  } ?>

      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
