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
 * @var $item     \Front\Record\TaskRecord
 * @var $state    \Windwalker\Structure\Structure
 */
?>

@extends('_global.html')

@section('content')

    <div class="card-transparent flex-row">
        <ul class="sidebar nav nav-tabs nav-tabs-simple nav-tabs-left bg-white" id="tab-3">
            <li class="nav-item active">
                <a href="#" data-toggle="tab" data-target="#tab3hellowWorld" aria-expanded="true">
                    <i class="pg-comment"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" data-toggle="tab" data-target="#tab3FollowUs" class="" aria-expanded="false">
                    <i class="pg-charts"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content bg-white">
            <div class="tab-pane active" id="tab3hellowWorld" aria-expanded="true">
                <div class="task-comment">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">{{ $item->title }}</li>
                        <li class="breadcrumb-item active">Result</li>
                    </ol>
                    <div class="container task-item m-t-100">
                        <div class="controls">
                            <div class="users control">
                                <div class="user">
                                    <div class="active">
                                        Yin Chin
                                        <i class="fa fa-users round"></i>
                                    </div>
                                    <div class="user-list hide">
                                        <ul>
                                            <li>
                                                All Users
                                                <i class="fa fa-users round"></i>
                                            </li>
                                            <li>
                                                Yin Chin1
                                                <i class="fa fa-user round"></i>
                                            </li>
                                            <li>
                                                Yin Chin2
                                                <i class="fa fa-user round"></i>
                                            </li>
                                            <li>
                                                Yin Chin3
                                                <i class="fa fa-user round"></i>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="messages control">
                                Messages
                                <input type="checkbox" data-init-plugin="switchery" checked="checked" style="display: none;" data-switchery="true">
                            </div>
                            <div class="click control">
                                Click
                                <input type="checkbox" data-init-plugin="switchery" checked="checked" style="display: none;" data-switchery="true">
                            </div>
                        </div>
                        <div class="clrearfix"></div>
                        <div class="records">
                            <div class="inner">
                                <div class="slider-for" id="aniimated-thumbnials">
                                    <img src="https://lyratest.s3.amazonaws.com/hackathon/images/projects/Group+6.png" alt="Image" class="aniimated-item">
                                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                                </div>
                                <div class="slider-nav">
                                    <div class="item">
                                        <img src="https://lyratest.s3.amazonaws.com/hackathon/images/projects/Group+6.png" alt="Image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ $item->image }}" alt="Image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ $item->image }}" alt="Image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ $item->image }}" alt="Image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ $item->image }}" alt="Image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ $item->image }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="before-send-comment">
                            <div class="comment-card comment">
                                <div class="card-inner">
                                    <div class="personal-info">
                                        <img class="avatar" src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" data-src-retina="{{ $asset->path }}/theme/assets/img/profiles/avatar_small2x.jpg">
                                        <span class="name">ruirui</span>
                                    </div>
                                    <form class="comments">
                                        <textarea class="form-control" id="name" placeholder="Please leave your commen,thanks!" aria-invalid="false"></textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="task-footer">
                                <div class="info">To see data!</div>
                                <button>Send</button>
                            </div>
                        </div>
                        <div class="send-comment-done hide">
                            <div class="number-of-messages">
                                Here are all commens from users!(103 comments)
                            </div>
                            <div class="comment-card history comment">
                                <div class="card-inner">
                                    <div class="personal-info">
                                        <img class="avatar" src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" data-src-retina="{{ $asset->path }}/theme/assets/img/profiles/avatar_small2x.jpg">
                                        <span class="name">yee</span>
                                        <span class="ago">29 Days ago</span>
                                        <div class="add-favorite">
                                            <svg viewBox="0 0 32 32" fill="#FF5A5F" fill-opacity="1" stroke="#FF5A5F" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 24px; width: 24px; display: block;">
                                                <path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="content">
                                        nice project!
                                    </div>
                                </div>
                                <div class="sub-comments">
                                    <div class="card-inner">
                                        <div class="personal-info">
                                            <img class="avatar" src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" data-src-retina="{{ $asset->path }}/theme/assets/img/profiles/avatar_small2x.jpg">
                                            <span class="name">ruirui</span>
                                            <span class="ago">29 Days ago</span>
                                            <div class="add-favorite">
                                                <svg viewBox="0 0 32 32" fill="#FF5A5F" fill-opacity="1" stroke="#FF5A5F" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 24px; width: 24px; display: block;">
                                                    <path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="content">
                                            Thanks!
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="personal-info">
                                            <img class="avatar" src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" data-src-retina="{{ $asset->path }}/theme/assets/img/profiles/avatar_small2x.jpg">
                                            <span class="name">yee</span>
                                            <span class="ago">29 Days ago</span>
                                            <div class="add-favorite">
                                                <svg viewBox="0 0 32 32" fill="#FF5A5F" fill-opacity="1" stroke="#FF5A5F" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 24px; width: 24px; display: block;">
                                                    <path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="content">
                                            :)
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="personal-info">
                                            <img class="avatar" src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" data-src-retina="{{ $asset->path }}/theme/assets/img/profiles/avatar_small2x.jpg">
                                            <span class="name">ruirui</span>
                                            <span class="ago">29 Days ago</span>
                                            <div class="add-favorite">
                                                <svg viewBox="0 0 32 32" fill="#FF5A5F" fill-opacity="1" stroke="#FF5A5F" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 24px; width: 24px; display: block;">
                                                    <path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <form class="comments">
                                            <textarea class="form-control" id="name" placeholder="" aria-invalid="false"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="tab-pane" id="tab3FollowUs" aria-expanded="false">
                    <div class="analytics">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">{{ $item->title }}</li>
                            <li class="breadcrumb-item active">Result</li>
                        </ol>
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
                    </div>
                </div>
            </div>
        </div>

        <script>
            d3.json('{{ $asset->path . '/theme/assets/js/charts.json' }}', function (data)
            {
                (function ()
                {
                    nv.addGraph(function ()
                    {
                        var chart = nv.models.lineChart().x(function (d)
                        {
                            return d[0]
                        }).y(function (d)
                        {
                            return d[1] / 100
                        }).color([$.Pages.getColor('success')]).useInteractiveGuideline(true);
                        chart.xAxis.tickFormat(function (d)
                        {
                            return d3.time.format('%X')(new Date(d))
                        });
                        chart.yAxis.tickFormat(d3.format(',.2f'));
                        d3.select('#nvd3-line2 svg').datum(data.nvd3.monthSales).transition().duration(500).call(chart);
                        nv.utils.windowResize(function ()
                        {
                            chart.update();
                            setTimeout(function ()
                            {
                                d3.selectAll('#nvd3-line2 .nvd3 circle.nv-point').attr("r", "4");
                            }, 400);
                        });
                        $('#nvd3-line2').data('chart', chart);
                        return chart;
                    }, function ()
                    {
                    });
                })();
            });
        </script>
@stop
