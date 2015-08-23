<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Add Estemate to Proposed Construction</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
      <?php echo $this->session->flashdata('message'); ?>
      <form class="form-horizontal" action="index.html" method="post">
        <!-- <div class="form-group">
            <label for="" class="col-sm-2 control-label">Item No.</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div> -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Scope of Work</label>
            <div class="col-sm-6">
              <select class="form-control" name="">
                <option>Excavation</option>
                <option>Embankment</option>
                <option>Reinforced Concrete</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Type</label>
            <div class="col-sm-6">
              <select class="form-control" name="">
                <option>Materials</option>
                <option>Labor</option>
                <option>Equipment</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Unit</label>
          <div class="col-sm-6">
            <select class="form-control" name="">
              <option>None</option>
              <option>Kgs</option>
              <option>Kgs</option>
            </select>
          </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-6">
              <input type="text" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Amount</label>
            <div class="col-sm-6">
              <input type="number" name="name" value="" class="form-control">
            </div>

        </div>
        <div class="form-group">
          <label class="col-sm-6"></label>
          <div class="col-sm-2">
            <label for="">&nbsp;</label>
                  <button type="button" class="btn btn-success" name="button">Save</button>
                  <button type="button" class="btn btn-info" name="button">Cancel</button>
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
           <tr>
             <td class="bordered" colspan="6"><b>Excavation</b></td>
           </tr>
           <tr>
             <td></td>
             <td colspan="5"><b>Materials</b></td>
           </tr>
           <tr>
             <td></td>
             <td>Coco Lumber</td>
             <td>bd. ft</td>
             <td>400</td>
             <td>15</td>
             <td>6,000.00</td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>
           <tr>
             <td></td>
             <td>6mm Thick Ordinary Plywood</td>
             <td>sheet</td>
             <td>8</td>
             <td>350.00</td>
             <td>2,800.00</td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>

           <tr>
             <td></td>
             <td>Common Wire Nail</td>
             <td>kgs</td>
             <td>10</td>
             <td>70.00</td>
             <td><u>700.00</u></td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td>9,500.00</td>
           </tr>


           <tr>
             <td></td>
             <td colspan="5"><b>Labor</b></td>
           </tr>
           <tr>
             <td></td>
             <td>1 Foreman</td>
             <td>none</td>
             <td>2</td>
             <td>520.32</td>
             <td>1,040.64</td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>
           <tr>
             <td></td>
             <td>1 Skilled Worker</td>
             <td>none</td>
             <td>4</td>
             <td>376.64</td>
             <td>2,800.00</td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>

           <tr>
             <td></td>
             <td>6 Unskilled Worker</td>
             <td>none</td>
             <td>4</td>
             <td>2,329.06</td>
             <td><u>9,318.40</u></td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td>12,952.24</td>
           </tr>


           <tr>
             <td></td>
             <td colspan="5"><b>Equipment</b></td>
           </tr>
           <tr>
             <td></td>
             <td>Backhoe 0.80s</td>
             <td>c.um</td>
             <td>2</td>
             <td>12,056.00</td>
             <td><u>24,112.00</u></td>
             <td>
               <a  class="a-table label label-info" href="#">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></a>
                <a  class="a-table label label-danger" href="#">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></a>
             </td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td>24,112.00</td>
           </tr>
      </table>
      <br />
    </div>
  </div>
</div>
<br/><br/>
