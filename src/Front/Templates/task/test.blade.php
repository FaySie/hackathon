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
        <a href="@route('result', ['id' => $item->id])" class="btn btn-danger pull-right">
            quit
        </a>
    </div>

    {{--開始任務前的介紹--}}
    <div class="task-intro">
        <h3 class="text-white">
            任務：成功登錄會員
        </h3>
        <p class="text-white">
            情境：您是第一次使用本網站的訪客，想要成為會員領取折價券
        </p>
        <button class="btn btn-complete m-r-20" type="button" onclick="history.back();">
            Back
        </button>
        <button class="btn btn-complete go-start-test" type="button">
            Play
        </button>
    </div>

    {{--開始任務--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="test-area">

                    @widget('widget.test-area', ['image' => $item->image, 'link' => $item->link], 'edge')

                </div>
            </div>
        </div>
        <div class="row">
            <div class="feedback-row">
                <div class="emoji">
                    <input type="checkbox" value="1" id="checkbox1">
                    <label class="pg pg-like" for="checkbox1"></label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="2" id="checkbox2">
                    <label class="fa fa-cloud" for="checkbox2"></label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="3" id="checkbox3">
                    <label class="fa fa-comment-o" for="checkbox3"></label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="4" id="checkbox4">
                    <label class="fa fa-frown-o" for="checkbox4"></label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="5" id="checkbox5">
                    <label class="fa fa-magnet" for="checkbox5"></label>
                </div>
            </div>
        </div>
    </div>
@stop
