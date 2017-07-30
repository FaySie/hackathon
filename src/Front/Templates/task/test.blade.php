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
        <a href="#" class="triangle-button">
            <img src="{{ $asset->root() }}/images/triangle-button.png" alt="">
        </a>
        <a href="@route('result', ['id' => $item->id])" class="btn btn-default pull-right">
            Quit
        </a>
    </div>

    {{--開始任務前的介紹--}}
    <div class="task-intro">
        <h2 class="bold text-white">
            任務：成功登錄會員
        </h2>
        <h4 class="text-white m-b-50">
            情境：您是第一次使用本網站的訪客，想要成為會員領取折價券
        </h4>
        <button class="btn btn-default m-r-80" type="button" onclick="history.back();">
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
                    <label for="checkbox1">
                        <img src="{{ $asset->root() }}/images/01happy.png" alt="">
                    </label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="2" id="checkbox2">
                    <label for="checkbox2">
                        <img src="{{ $asset->root() }}/images/02sad.png" alt="">
                    </label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="3" id="checkbox3">
                    <label class="" for="checkbox3">
                        <img src="{{ $asset->root() }}/images/03angry.png" alt="">
                    </label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="4" id="checkbox4">
                    <label class="" for="checkbox4">
                        <img src="{{ $asset->root() }}/images/04excited.png" alt="">
                    </label>
                </div>
                <div class="emoji">
                    <input type="checkbox" value="5" id="checkbox5">
                    <label class="" for="checkbox5">
                        <img src="{{ $asset->root() }}/images/05question.png" style="height: 53px; vertical-align: bottom" alt="">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer"></div>
@stop
