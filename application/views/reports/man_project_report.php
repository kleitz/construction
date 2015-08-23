<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Day of Work</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Man Power</a></li>
    <!-- <li class="active"><a data-toggle="tab" href="#menu1">Material Report</a></li> -->
    <li><a data-toggle="tab" href="#menu2">Scope of Work Report</a></li>
    <li><a data-toggle="tab" href="#menu3">Equipment report</a></li>
    <!-- <li><a data-toggle="tab" href="#menu4">Equipment report</a></li> -->
        <!-- <li><a data-toggle="tab" href="#menu5">User Log</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="menu1" class="tab-pane fade active in">
      <?php $this->load->view('reports/man_power') ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <?php $this->load->view('reports/scope_of_work') ?>
      </div>
    <div id="menu3" class="tab-pane fade">
      <?php $this->load->view('reports/equipment') ?>
    </div>
    <div id="menu4" class="tab-pane fade">

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
