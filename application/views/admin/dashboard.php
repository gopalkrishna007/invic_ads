<div class="page-content">
   <div class="clearfix"></div>
   <div class="content">
      <div class="row">
         <div class="col-md-4 col-vlg-3 col-sm-6">
            <div class="tiles green m-b-10">
               <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  <div class="tiles-title text-black">OVERALL SALES </div>
                  <div class="widget-stats">
                     <div class="wrapper transparent"><span class="item-title">Overall Sales</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($invoiceData['totalcount']) ?>" data-animation-duration="700"><?= number_format($invoiceData['totalcount']) ?></span></div>
                  </div>
                  <div class="widget-stats">
                     <div class="wrapper transparent"><span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($invoiceData['totalcount_today']) ?>" data-animation-duration="700"><?= number_format($invoiceData['totalcount_today']) ?></span></div>
                  </div>
                  <div class="widget-stats ">
                     <div class="wrapper last"><span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($invoiceData['totalcount_month']) ?>" data-animation-duration="700"><?= number_format($invoiceData['totalcount_month']) ?></span></div>
                  </div>
                  <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                     <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%" style="width: 64.8%;"></div>
                  </div>
                 <!-- <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span></div>-->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-vlg-3 col-sm-6">
            <div class="tiles blue m-b-10">
               <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  <div class="tiles-title text-black">OVERALL USERS </div>
                  <div class="widget-stats">
                     <div class="wrapper transparent"><span class="item-title">Overall users</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($usersData['userscount']) ?>" data-="" animation-duration="700"><?= number_format($usersData['userscount']) ?></span></div>
                  </div>
                  <div class="widget-stats">
                     <div class="wrapper transparent"><span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($usersData['userscount_today']) ?>" data-animation-duration="700"><?= number_format($usersData['userscount_today']) ?></span></div>
                  </div>
                  <div class="widget-stats ">
                     <div class="wrapper last"><span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($usersData['userscount_month']) ?>" data-animation-duration="700"><?= number_format($usersData['userscount_month']) ?></span></div>
                  </div>
                  <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                     <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="54%" style="width: 54%;"></div>
                  </div>
                  <!-- <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span></div>-->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-vlg-3 col-sm-6">
            <div class="tiles purple m-b-10">
               <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  <div class="tiles-title text-black">OVERALL TEACHERS</div>
                  <div class="widget-stats">
                     <div class="wrapper transparent"><span class="item-title">Overall Trainers</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($tutorsData['userscount']) ?>" data-animation-duration="700"><?= number_format($tutorsData['userscount']) ?></span></div>
                  </div>
                  <div class="widget-stats">
                     <div class="wrapper transparent"><span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($tutorsData['userscount_today']) ?>" data-animation-duration="700"><?= number_format($tutorsData['userscount_today']) ?></span></div>
                  </div>
                  <div class="widget-stats ">
                     <div class="wrapper last"><span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($tutorsData['userscount_month']) ?>" data-animation-duration="700"><?= number_format($tutorsData['userscount_month']) ?></span></div>
                  </div>
                  <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                     <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="90%" style="width: 90%;"></div>
                  </div>
                  <!-- <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span></div>-->
               </div>
            </div>
         </div>
        <div class="col-md-4 col-vlg-3 visible-xlg visible-sm col-sm-6">
                <div class="tiles red m-b-10">
                    <div class="tiles-body">
                        <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                        <div class="tiles-title text-black">OVERALL PREMIUM USERS </div>
                        <div class="widget-stats">
                            <div class="wrapper transparent"><span class="item-title">Overall Sales</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($premiumsData['userscount']) ?>" data-animation-duration="700"><?= number_format($premiumsData['userscount']) ?></span></div>
                        </div>
                        <div class="widget-stats">
                            <div class="wrapper transparent"><span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($premiumsData['userscount_today']) ?>" data-animation-duration="700"><?= number_format($premiumsData['userscount_today']) ?></span></div>
                        </div>
                        <div class="widget-stats ">
                            <div class="wrapper last"><span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="<?= number_format($premiumsData['userscount_month']) ?>" data-animation-duration="700"><?= number_format($premiumsData['userscount_month']) ?></span></div>
                        </div>
                        <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                            <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%" style="width: 64.8%;"></div>
                        </div>
                        <!-- <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
                        </div>-->
                    </div>
                </div>
        </div>
      </div>
      <div class="row" style="display:none;">
         <div class="col-md-12">
            <div class="grid simple">
               <div class="grid-title no-border">
                  <h4>Flot <span class="semi-bold">Charts</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               </div>
               <div class="grid-body no-border">
                  <h3>Flot <span class="semi-bold">Charts</span></h3>
                  <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>
                  <br>
                  <div id="placeholder" class="demo-placeholder" style="width:100%;height:250px;"></div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="mini-chart-wrapper">
                           <div class="chart-details-wrapper">
                              <div class="chartname"> New Orders </div>
                              <div class="chart-value"> 17,555 </div>
                           </div>
                           <div class="mini-chart">
                              <div id="mini-chart-orders"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mini-chart-wrapper">
                           <div class="chart-details-wrapper">
                              <div class="chartname"> My Balance </div>
                              <div class="chart-value"> $17,555 </div>
                           </div>
                           <div class="mini-chart">
                              <div id="mini-chart-other"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="display:none;">
         <div class="col-md-7">
            <div class="grid simple">
               <div class="grid-title no-border">
                  <h4>Sparkline <span class="semi-bold">Charts</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               </div>
               <div class="grid-body no-border">
                  <h3>More <span class="semi-bold">Options</span></h3>
                  <p>Sparkline line charts using <code>HTML</code> attributes. This method allows for all options </p>
               </div>
               <div class="tiles white no-margin"> <span id="spark-2"></span> </div>
            </div>
         </div>
         <div class="col-md-5 ">
            <div class="tiles white no-margin">
               <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  <div class="tiles-title"> SERVER LOAD </div>
                  <div class="heading text-black "> 250 GB </div>
                  <div class="progress  progress-small no-radius progress-success">
                     <div class="bar animate-progress-bar" data-percentage="25%"></div>
                  </div>
                  <div class="description"> <span class="mini-description"><span class="text-black">250GB</span> of <span class="text-black">1,024GB</span> used</span> </div>
               </div>
            </div>
            <div class="tiles white no-margin">
               <div id="updatingChart"> </div>
            </div>
         </div>
      </div>
      <br>
      <div class="row" style="display:none;">
         <div class="col-md-12">
            <div class="grid simple">
               <div class="grid-title no-border">
                  <h4>Morris <span class="semi-bold">Charts</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               </div>
               <div class="grid-body no-border">
                  <div class="row">
                     <div class="col-md-6">
                        <h4>Morris <span class="semi-bold">Line Charts</span></h4>
                        <p> Line graphs are probably the most widely used graph for showing trends.Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>
                        <div id="line-example"> </div>
                     </div>
                     <div class="col-md-6">
                        <h4>Morris <span class="semi-bold">Area Charts</span></h4>
                        <p> Line graphs are probably the most widely used graph for showing trends.Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>
                        <div id="area-example"> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="grid simple">
               <div class="grid-body no-border">
                  <h4>Ordered Bar <span class="semi-bold"> Charts</span></h4>
                  <p>Bar charts are powered by flot plugin, here is ordered stack bar chart with a legend in it. Everything in this chart is customizable</p>
                  <br>
                  <div id="placeholder-bar-chart" style="height:250px"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="display:none;">
         <div class="col-md-4">
            <div class="grid simple">
               <div class="grid-title no-border">
                  <h4>Morris <span class="semi-bold">Charts</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               </div>
               <div class="grid-body no-border">
                  <h4>Morris <span class="semi-bold">Donut Charts</span></h4>
                  <p>Similar to pie charts, doughnut charts are great for showing proportional data.Chart.js offers the same customisation options as for pie charts, but with a custom sized inner cutout to turn your pies into doughnuts. </p>
                  <div id="donut-example" style="height:200px;"> </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
$(document).ready(function() {
var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var today = new Date();
var d;
var month = [];
for(var i = 4; i >= 0; i -= 1) {
  d = new Date(today.getFullYear(), today.getMonth() - i, 1);
  month.push(monthNames[d.getMonth()]);
}
var d1_1 = [
		
		[1325376000000,<?= $usersData_month[0]['userscount'] ?>],[1328054400000,<?= $usersData_month[1]['userscount'] ?>],[1330560000000,<?= $usersData_month[2]['userscount'] ?>],[1333238400000,<?= $usersData_month[3]['userscount'] ?>],[1335830400000,<?= $usersData_month[4]['userscount'] ?>]
    ];
    var d1_2 = [
       
		[1325376000000,<?= $tutorsData_month[0]['userscount'] ?>],[1328054400000,<?= $tutorsData_month[1]['userscount'] ?>],[1330560000000,<?= $tutorsData_month[2]['userscount'] ?>],[1333238400000,<?= $tutorsData_month[3]['userscount'] ?>],[1335830400000,<?= $tutorsData_month[4]['userscount'] ?>]
		
    ];
    var d1_3 = [
       
		[1325376000000,<?= $premiumusersData_month[0]['userscount'] ?>],[1328054400000,<?= $premiumusersData_month[1]['userscount'] ?>],[1330560000000,<?= $premiumusersData_month[2]['userscount'] ?>],[1333238400000,<?= $premiumusersData_month[3]['userscount'] ?>],[1335830400000,<?= $premiumusersData_month[4]['userscount'] ?>]
		
    ];
   
    var data1 = [{
        label: "Users",
        data: d1_1,
        bars: {
            show: true,
            barWidth: 12 * 24 * 60 * 60 * 300,
            fill: true,
            lineWidth: 0,
            order: 1,
            fillColor: "rgba(243, 89, 88, 0.7)"
        },
        color: "rgba(243, 89, 88, 0.7)"
    }, {
        label: "Teachers",
        data: d1_2,
        bars: {
            show: true,
            barWidth: 12 * 24 * 60 * 60 * 300,
            fill: true,
            lineWidth: 0,
            order: 2,
            fillColor: "rgba(251, 176, 94, 0.7)"
        },
        color: "rgba(251, 176, 94, 0.7)"
    }, {
        label: "Premium Users",
        data: d1_3,
        bars: {
            show: true,
            barWidth: 12 * 24 * 60 * 60 * 300,
            fill: true,
            lineWidth: 0,
            order: 3,
            fillColor: "rgba(10, 166, 153, 0.7)"
        },
        color: "rgba(10, 166, 153, 0.7)"
    },];
    $.plot($("#placeholder-bar-chart"), data1, {
        xaxis: {
            min: (new Date(2011, 11, 15)).getTime(),
            max: (new Date(2012, 04, 18)).getTime(),
            mode: "time",
            timeformat: "%b",
            tickSize: [1, "month"],
            monthNames: month,
            tickLength: 1,
            axisLabel: 'Month',
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
            axisLabelPadding: 5,
        },
        yaxis: {
            axisLabel: 'Value',
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
            axisLabelPadding: 5
        },
        grid: {
            hoverable: true,
            clickable: false,
            borderWidth: 1,
            borderColor: '#f0f0f0',
            labelMargin: 8,
        },
        series: {
            shadowSize: 1
        }
    });
});
</script>