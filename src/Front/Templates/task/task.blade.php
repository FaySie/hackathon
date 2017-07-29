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
<div class="container task-item">
    <h1>Task Item</h1>
    <p>
        <a class="btn btn-default" href="{{ $router->route('tasks') }}">
            <span class="fa fa-chervon-left"></span>
            Back to List
        </a>
    </p>
    <hr />
    <img src="{{ $item->image }}" alt="Image">
    <h2>{{ $item->title }}</h2>
    <p>{{ $item->introtext }}</p>
    <p>{{ $item->fulltext }}</p>
</div>
@stop
