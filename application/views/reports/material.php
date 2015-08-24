<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Material Stock Report</h2></strong></div>
  <div class="panel-body">
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color"></th>
         <th class="table_color">Material</th>
         <th class="table_color">Unit</th>
         <th class="table_color">Quantity</th>
         <th class="table_color">Price</th>
       </tr>

     </thead>
       <tbody>
         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td><?php echo $i ?></td>
             <td class="bordered">Portland Cement</td>
             <td class="bordered">CU.M.</td>
             <td class="bordered">83</td>
             <td class="bordered">100</td>
           </tr>

       <?php  } ?>

       </tbody>
      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
