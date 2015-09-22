<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Report On Project Site</h2></strong></div>
  <div class="panel-body">

    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color">Project Site</th>
         <th class="table_color" style="width:300px">Action</th>
       </tr>

     </thead>
       <tbody>

             <?php foreach ($this->common->select_project1($this->session->userdata('id')) as $key => $value):
               extract ($value)?>
                  <tr>
               <td class="bordered"><?php echo $project_site ?></td>
               <td class="bordered">
                 <a  class="a-table label label-info" href="/proposal_work/<?php echo $id ?>">View Report&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                </td>
                   </tr>
             <?php endforeach; ?>



       </tbody>
      </table>




      <br />
    </div>
  </div>
</div>
<br/><br/>
