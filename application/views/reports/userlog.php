<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>User Log</h2></strong></div>
  <div class="panel-body">
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color"></th>
         <th class="table_color">Name</th>
         <th class="table_color">Activities</th>
         <th class="table_color">Date</th>
         <th class="table_color">Time</th>
       </tr>

     </thead>
       <tbody>
         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td><?php echo $i ?></td>
             <td class="bordered">Joleco</td>
             <td class="bordered">Login</td>
             <td class="bordered">8/17/2015</td>
             <td class="bordered">8:00</td>
           </tr>

       <?php  } ?>

       </tbody>
      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
