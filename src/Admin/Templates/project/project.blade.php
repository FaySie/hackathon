{{-- Part of Admin project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Admin\AdminPackage                 Package object.
 * @var $view     \Admin\View\Project\ProjectHtmlView    View object.
 * @var $uri      \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $datetime \Windwalker\Core\DateTime\DateTime          PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\MainRouter          Route builder object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $item     \Admin\Record\ProjectRecord
 * @var $state    \Windwalker\Structure\Structure
 * @var $form     \Windwalker\Form\Form
 */
?>

@extends('_global.admin.admin')

@section('toolbar-buttons')
    @include('toolbar')
@stop

@section('admin-body')
    <form name="admin-form" id="admin-form" action="{{ $router->route('project', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-7">
                <fieldset id="fieldset-basic" class="form-horizontal">
                    <legend>@translate('admin.project.edit.fieldset.basic')</legend>

                    {!! $form->renderFields('basic') !!}
                </fieldset>
            </div>
            <div class="col-md-5">
                <fieldset id="fieldset-created" class="form-horizontal">
                    <legend>@translate('admin.project.edit.fieldset.created')</legend>

                    {!! $form->renderFields('created') !!}
                </fieldset>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <fieldset id="fieldset-basic" class="form-horizontal">
                    <legend>@translate('admin.project.edit.fieldset.images')</legend>

                    {!! $form->renderFields('images') !!}

                    <div class="row">

                        <?php
                            $numColumns = 4;
                            $span = ceil(12 / $numColumns);
                            $total = count($item->images);
                        ?>

                        @foreach ((array) $item->images as $i => $image)
                            <div class="col-md-{{ $span }}">
                                <div class="item-image">
                                    <img src="{{ $image }}" alt="" class="img-responsive">
                                </div>

                                <span class="row-separator"></span>
                                <!-- LINE END -->
                            </div>

                            @if($i % $numColumns == $numColumns - 1 || $i == $total - 1)
                                </div><div class="row">
                            @endif

                        @endforeach

                    </div>
                </fieldset>
            </div>
        </div>

        <div class="hidden-inputs">
            @formToken()
        </div>

    </form>
@stop
