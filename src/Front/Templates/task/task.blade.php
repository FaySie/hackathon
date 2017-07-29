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
    <div class="container task-item">
        <div class="inner">
            <div class="task-info">
                <h1>{{ $item->title }}</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <img class="thumb-img" src="{{ $item->image }}" alt="Image">
                    </div>
                    <div class="col-sm-9">
                        <div class="task-des">
                            <p>{!! $item->description !!}</p>
                            <button class="start-test btn btn-defaut">Play</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-info">
                <h2>
                    Project Title
                </h2>
                <div class="des">
                    project description project description project description project description project description project description project description project description project description
                </div>
                <div class="tasks">
                    <div class="row">
                        <div class="col-sm-10">
                            <a class="task btn btn-defaut">Task 1</a>
                            <a class="task btn btn-defaut">Task 2</a>
                            <a class="task btn btn-defaut">Task 3</a>
                            <a class="task btn btn-defaut">Task 4</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="fa fa-arrow-right more">More...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-tasks">
                <h2>
                    Related Tasks
                </h2>
                <div class="row">
                    @for ($i = 1; $i<=5 ; $i++)
                        <div class="col-sm-4 m-b-30">
                            <div class="add-favorite" data-id="274" data-type="lesson" data-toggle="tooltip" title="" data-original-title="加入我的最愛">
                                <svg viewBox="0 0 32 32" fill="#FF5A5F" fill-opacity="1" stroke="#FF5A5F" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 24px; width: 24px; display: block;">
                                    <path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378"></path>
                                </svg>
                            </div>
                            <a href="{{ $router->route('home', ['id' => $item->id]) }}" class="card-layout">
                                <div class="card-thumbnail">
                                    <img src="{{ $item->image }}" alt="Accusamus.">
                                    <div class="project-intro">
                                        test test test test test test
                                        <span class="project-title">
                                     test test test test test test
                                 </span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h5 class="dotdotdot" data-lines="2" style="word-wrap: break-word;">
                                        {{ $item->title }}
                                    </h5>
                                </div>
                                <div class="card-info">
                            <span>
                              <i class="pg pg-clock"></i>
                              210
                            </span>
                                    <span>
                                <i class="fa fa-user"></i>
                                508
                             </span>
                                    <span class="star-score">
                                 <i class="fa fa-user"></i>
                                 508
                             </span>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@stop
