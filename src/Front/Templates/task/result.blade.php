{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Front\FrontPackage                   Package object.
 * @var $view     \Windwalker\Data\Data                       Some information of this view.
 * @var $uri      \Windwalker\Uri\UriData               Uri information, example: $uri->path
 * @var $datetime \Windwalker\Core\DateTime\Chronos           PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\PackageRouter       Router object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $item  \Front\Record\TaskRecord
 * @var $state \Windwalker\Structure\Structure
 */
?>

@extends('_global.html')

@section('content')
    <div class="sidebar">
       <ul>
           <li>
               <a href="#">
                   <i class="pg-comment"></i>
               </a>
           </li>
           <li class="active">
               <a href="#">
                   <i class="pg-charts"></i>
               </a>
           </li>
       </ul>

    </div>
    <div class="container task-item m-t-100">
       <div class="row">
           <div class="col-md-11 col-md-offset-1">
               <div class="row">
                   <div class="col-md-6">
                       <h3 class="bold">Time</h3>
                       <h5>How long it take to finish the task</h5>
                       <div class="row">
                           <div class="col-md-4">
                               <h3 class="bold">5:03</h3>
                               <h5>You</h5>
                           </div>
                           <div class="col-md-4">
                               <h3 class="bold">4:13</h3>
                               <h5>Average</h5>
                           </div>
                           <div class="col-md-4">
                               <h3 class="bold">3:50</h3>
                               <h5>Ideal</h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <h3 class="bold">Time</h3>
                       <h5>How long it take to finish the task</h5>
                       <div class="row">
                           <div class="col-md-4">
                               <h3 class="bold">20</h3>
                               <h5>Times</h5>
                           </div>
                           <div class="col-md-4">
                               <h3 class="bold">18</h3>
                               <h5>Times</h5>
                           </div>
                           <div class="col-md-4">
                               <h3 class="bold">18</h3>
                               <h5>Times</h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-12 m-t-60">
                       <h3 class="bold">The User's Journey</h3>
                       <h5>How was the user feeling during doing the task.</h5>
                       <div id="nvd3-line2" class="line-chart"
                           data-line-color="success"
                           data-area-color="master"
                           data-points="true"
                           data-point-color="white"
                           data-stroke-width="2">
                           <svg></svg>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

    <script>
        d3.json('http://revox.io/json/charts.json', function(data) {
            (function() {
                nv.addGraph(function() {
                    var chart = nv.models.lineChart().x(function(d) {
                        return d[0]
                    }).y(function(d) {
                        return d[1] / 100
                    }).color([$.Pages.getColor('success')]).useInteractiveGuideline(true);
                    chart.xAxis.tickFormat(function(d) {
                        return d3.time.format('%X')(new Date(d))
                    });
                    chart.yAxis.tickFormat(d3.format(',.2f'));
                    d3.select('#nvd3-line2 svg').datum(data.nvd3.monthSales).transition().duration(500).call(chart);
                    nv.utils.windowResize(function() {
                        chart.update();
                        setTimeout(function() {
                            d3.selectAll('#nvd3-line2 .nvd3 circle.nv-point').attr("r", "4");
                        }, 400);
                    });
                    $('#nvd3-line2').data('chart', chart);
                    return chart;
                }, function() {});
            })();
        });
    </script>
@stop
