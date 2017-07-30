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
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">{{ $item->title }}</li>
    </ol>
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
                            {!! $item->description !!}

                            <a href="@route('test', ['id' => $item->id])" class="start-test btn btn-default">Play</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-info">
                <h2>
                    {{ $item->project->title }}
                </h2>
                <div class="des">
                    {!! $item->project->description !!}
                </div>
                <div class="tasks">
                    <div class="row">
                        <div class="col-sm-10">
                            @foreach($item->project->tasks as $task)
                                <a href="@route('task', ['id' => $task->id])" class="task btn btn-default">{{ $task->title }}</a>
                            @endforeach
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

		            <?php
		            $numColumns = 3;
		            $span = ceil(12 / $numColumns);
		            $total = count($relateds);
		            ?>

                    @foreach ($relateds as $i => $related)
                        <div class="col-sm-{{ $span }}  m-b-50">

                            @widget('widget.task-card', ['item' => $related], 'edge')

                            <span class="row-separator"></span>
                            <!-- LINE END -->
                        </div>

                        @if($i % $numColumns == $numColumns - 1 || $i == $total - 1)
                            </div><div class="row">
                        @endif

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@stop
