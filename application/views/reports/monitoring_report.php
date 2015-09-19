<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>User Log</h2></strong></div>
  <div class="panel-body">
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

         <tr>
           <th class="table_color"colspan="5">Visual Monitoring Report</th>
           <th class="table_color"colspan="4">Independent Monitoring Report</th>
         </tr>
       <tr>
         <th class="table_color">Project</th>
         <th class="table_color">Scope of Work</th>
         <th class="table_color">No of Days</th>
         <th class="table_color">Rate %</th>
         <th class="table_color">Image</th>
         <th class="table_color">Duration time</th>
         <th class="table_color">Possible Action</th>
         <th class="table_color">Image</th>
            <th class="table_color">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php for ($i=1; $i <= 11; $i++) { ?>
           <tr>
             <td class="bordered">Project</td>
             <td class="bordered">Scope of Work</td>
             <td class="bordered">No of Days</td>
             <td class="bordered">Rate %</td>
             <td class="bordered">Image</td>
             <td class="bordered">Duration time</td>
             <td class="bordered">Possible Action</td>
             <td class="bordered">Image</td>
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
