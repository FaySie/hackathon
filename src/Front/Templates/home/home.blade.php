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
 * @var $state         \Windwalker\Structure\Structure
 * @var $items         \Windwalker\Data\DataSet
 * @var $item          \Front\Record\HomeRecord
 * @var $pagination    \Windwalker\Core\Pagination\Pagination
 */
?>

@extends('_global.html')

@section('content')
<div class="container home-item">
    <h1>Home List</h1>
    <div class="home-items">
        @foreach ($items as $i => $item)
        <div class="home-item">
            <p>
                <span class="fa fa-angle-right text-muted"></span>
                <a href="{{ $router->route('task', ['id' => $item->id]) }}">
                    {{ $item->title }}
                </a>
            </p>
        </div>
        @endforeach
    </div>
    <hr />
    <div class="pagination">
        {!! $pagination->route('home', [])->render() !!}
    </div>
</div>
@stop
