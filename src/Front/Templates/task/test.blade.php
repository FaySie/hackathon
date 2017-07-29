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
    <div class="browser-navigation">
        <a href="#" class="btn btn-default">
            上一頁
        </a>
        <a href="#" class="btn btn-danger pull-right">
            quit
        </a>
    </div>

    {{--開始任務前的介紹--}}
    {{--<div class="task-intro">--}}
        {{--<h3 class="text-white">--}}
            {{--任務：成功登錄會員--}}
        {{--</h3>--}}
        {{--<p class="text-white">--}}
            {{--情境：您是第一次使用本網站的訪客，想要成為會員領取折價券--}}
        {{--</p>--}}
        {{--<a href="#" class="btn btn-complete m-r-20">--}}
            {{--Back--}}
        {{--</a>--}}
        {{--<a href="#" class="btn btn-complete">--}}
            {{--Play--}}
        {{--</a>--}}
    {{--</div>--}}

    {{--開始任務--}}
    <div class="feedback-row">
         <span class="feedback-text-content">
            <ul>
                <li>WTF</li>
                <li>Suck!</li>
                <li>Awesome</li>
                <li>Perfect</li>
            </ul>
        </span>
        <button class="fa fa-font feedback-text"></button>
        <button class="pg pg-like"></button>
        <button class="fa fa-cloud"></button>
        <button class="fa fa-comment-o"></button>
        <button class="fa fa-frown-o"></button>
        <button class="fa fa-magnet"></button>
    </div>
@stop
