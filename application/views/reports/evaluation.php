<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px">
  <div class="panel-heading"><strong><h2>Evaluation</h2></strong></div>
  <div class="panel-body">
    <div class="table-responsive col-md-12">
      <table class="table table-bordered table-hover display" id="example" cellspacing="0" width="100%">

       <tr>
         <th class="table_color">No.</th>
         <th class="table_color">Question</th>
         <th class="table_color">1</th>
         <th class="table_color">2</th>
         <th class="table_color">3</th>
         <th class="table_color">4</th>
         <th class="table_color">5</th>
       </tr>
        <?php for ($i=1; $i <  5; $i++) { ?>
          <tr>
            <td><?php echo $i ?></td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td class="bordered"><input type="radio" name=<?php echo $i ?> value="1"></td>
            <td class="bordered"><input type="radio" name=<?php echo $i ?> value="2"></td>
            <td class="bordered"><input type="radio" name=<?php echo $i ?> value="3"></td>
            <td class="bordered"><input type="radio" name=<?php echo $i ?> value="4"></td>
            <td class="bordered"><input type="radio" name=<?php echo $i ?> value="5"></td>
           </tr>
        <?php  } ?>

    </table>
    <button type="submit" class="btn btn-success pull-right" name="button" style="margin-top:10px">Submit</button>
      <br />
    </div>
  </div>
</div>
<br/><br/>
