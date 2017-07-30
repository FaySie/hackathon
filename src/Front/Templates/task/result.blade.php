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
        {{-- 用戶可評論 開始 --}}
        <div class="comment-card comment">
            <div class="card-inner">
                <div class="personal-info">
                    <img class="avatar" src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{ $asset->path }}/theme/assets/img/profiles/avatar_small.jpg" data-src-retina="{{ $asset->path }}/theme/assets/img/profiles/avatar_small2x.jpg">
                    <span class="name">陈小明</span>
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
    </div>
@stop
