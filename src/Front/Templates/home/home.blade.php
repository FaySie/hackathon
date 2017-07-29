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
        <div class="row">
            @foreach ($items as $i => $item)
                <div class="col-sm-4 m-b-30">
                    <div class="add-favorite" data-id="274" data-type="lesson" data-toggle="tooltip" title="" data-original-title="**关注此课程**">
                        <svg viewBox="0 0 32 32" fill="#FF5A5F" fill-opacity="1" stroke="#FF5A5F" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" style="height: 24px; width: 24px; display: block;">
                            <path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378"></path>
                        </svg>
                    </div>
                    <a href="{{ $router->route('home', ['id' => $item->id]) }}" class="card-layout">
                        <div class="card-thumbnail">
                            <img src="{{ $item->image }}" alt="Accusamus.">
                        </div>
                        <div class="card-content">
                            <h5 class="dotdotdot" data-lines="2" style="word-wrap: break-word;">
                                {{ $item->title }}
                            </h5>
                            <div class="card-info left">
                                <i class="pg pg-clock"></i>
                                210
                            </div>
                            <div class="card-info right">
                                <i class="fa fa-user"></i>
                                508
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop
