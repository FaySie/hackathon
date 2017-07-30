{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app           \Windwalker\Web\Application                 Global Application
 * @var $package       \Front\FrontPackage                   Package object.
 * @var $view          \Windwalker\Data\Data                       Some information of this view.
 * @var $uri           \Windwalker\Uri\UriData               Uri information, example: $uri->path
 * @var $datetime      \Windwalker\Core\DateTime\Chronos           PHP DateTime object of current time.
 * @var $helper        \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router        \Windwalker\Core\Router\PackageRouter       Router object.
 * @var $asset         \Windwalker\Core\Asset\AssetManager         The Asset manager.
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

    <div class="container-fluid m-t-40">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Slides -->
                @foreach ($tags as $tag)
                    <div class="swiper-slide" style="background-image: linear-gradient(295deg, #88aaff, rgba(0, 199, 255, 0.82))">
                        {{ $tag }}
                    </div>
                @endforeach

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="container home-item m-t-40">
        <div class="home-items">

            <div class="row">

                <?php
                    $numColumns = 3;
                    $span = ceil(12 / $numColumns);
                    $total = count($items);
                ?>

                @foreach ($items as $i => $item)
                    <div class="col-sm-{{ $span }}  m-b-50">

                        @widget('widget.task-card', ['item' => $item], 'edge')

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
@stop
