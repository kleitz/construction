<div class="panel panel-default" style="margin:10px;box-shadow:0px 0px 20px gray;margin-top:20px;">
  <div class="panel-heading"><strong><h2>Reports</h2></strong></div>
  <div class="panel-body">
    <div class="col-md-12">
  <ul class="nav nav-tabs">
      <!-- <li class="active"><a data-toggle="tab" href="#menu1">Material Report</a></li> -->
    <li><a data-toggle="tab" href="#menu2">Visual Monitoring</a></li>
      <li><a data-toggle="tab" href="#menu3">Independent Monitoring</a></li>
      <!--  <li><a data-toggle="tab" href="#menu4">Monitoring Report</a></li>-->
          </ul>

  <div class="tab-content">
      <div id="menu2" class="tab-pane fade">
      <?php $this->load->view('reports/visual_monitoring') ?>
      </div>
    <div id="menu3" class="tab-pane fade">
      <?php $this->load->view('reports/independent_monitoring') ?>
    </div>
    <div id="menu4" class="tab-pane fade">
      <?php $this->load->view('reports/monitoring_report') ?>
    </div>
      </div>
</div>

      <br />
    </div>
  </div>
</div>
<br/><br/>
