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
        <li class="breadcrumb-item">{{ $item->title }}</li>
        <li class="breadcrumb-item active">Result</li>
    </ol>
    <div class="container task-item">
        <div class="controls">
            <div class="users control">
                <div class="user">
                    Yin Chin
                    <i class="fa fa-users round"></i>
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
                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                    <img src="{{ $item->image }}" alt="Image" class="aniimated-item">
                </div>
                <div class="slider-nav">
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
                    <div class="item">
                        <img src="{{ $item->image }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>

        {{-- 用戶評論 開始 --}}
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="comment-area">
                    <h4>
                        Commen
                    </h4>
                    <small>Please leave your comment, thanks!</small>
                    {{-- 用戶可評論 開始 --}}
                    <div class="comment-card">
                        <div class="card-inner">
                            <form class="comments">
                                <textarea class="form-control" id="name" placeholder="Text Area" aria-invalid="false"></textarea>
                            </form>
                        </div>
                    </div>
                    {{-- 用戶可評論 結束 --}}
                    <div class="task-footer">
                        <div>To see data!</div>
                        <button class="btn btn-default btn-lg">Send</button>
                    </div>
                </div>
            </div>
        </div>
@stop
