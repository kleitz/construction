<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Add category scope of work</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="/insert_add_scopework" method="post">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">scope of work</label>
            <div class="col-sm-6">
              <input type="text" name="scopework" value="" class="form-control">
            </div>

        </div>
          <div class="form-group">
          <label class="col-sm-6"></label>
          <div class="col-sm-2">
            <label for="">&nbsp;</label>
                  <button type="submit" class="btn btn-success" name="button">Save</button>
                  <a href="#" class="btn btn-info" name="button">Cancel</a>
          </div>

        </div>
      </form>
    </div>
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">
       <thead>

       <tr>
         <th class="table_color">Scope of Work</th>
         <th class="table_color">Action</th>
       </tr>

     </thead>
       <tbody>
         <?php foreach ($this->common->select_scopework() as $key => $value):
           extract ($value);
           ?>
           <tr>
            <td><?php echo $scopework ?></td>
            <td class="bordered">
              <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="/del_scope_work/<?php echo $id ?>">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
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
