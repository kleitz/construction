<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Reports</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
  <ul class="nav nav-tabs">
      <!-- <li class="active"><a data-toggle="tab" href="#menu1">Material Report</a></li> -->
    <li><a data-toggle="tab" href="#menu2">Detailed Summary</a></li>
    <!--  <li><a data-toggle="tab" href="#menu3">Construction Project</a></li>
        <li><a data-toggle="tab" href="#menu4">Evaluation</a></li>-->
        <?php if ($this->session->userdata('type') == 1): ?>
          <li><a data-toggle="tab" href="#menu5">User Log</a></li>  
        <?php endif ?>
        
  </ul>

  <div class="tab-content">
      <div id="menu2" class="tab-pane fade">
      <?php $this->load->view('reports/projectsite_report') ?>
      </div>
    <div id="menu3" class="tab-pane fade">
      <?php $this->load->view('reports/list_project') ?>
    </div>
    <div id="menu4" class="tab-pane fade">
<?php $this->load->view('reports/evaluation_list') ?>
    </div>
    <div id="menu5" class="tab-pane fade">
      <?php $this->load->view('reports/userlog') ?>
    </div>
  </div>
</div>





      <br />
    </div>
  </div>
</div>
<br/><br/>
