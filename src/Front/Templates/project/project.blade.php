{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Front\FrontPackage                 Package object.
 * @var $view     \Front\View\Project\ProjectHtmlView    View object.
 * @var $uri      \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $datetime \Windwalker\Core\DateTime\DateTime          PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\MainRouter          Route builder object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $item  \Front\Record\ProjectRecord
 * @var $state \Windwalker\Structure\Structure
 * @var $form  \Windwalker\Form\Form
 */
?>

@extends('_global.front.admin')

@section('toolbar-buttons')
    @include('toolbar')
@stop

@section('admin-body')
<form name="admin-form" id="admin-form" action="{{ $router->route('project', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-7">
            <fieldset id="fieldset-basic" class="form-horizontal">
                <legend>@translate('front.project.edit.fieldset.basic')</legend>

                {!! $form->renderFields('basic') !!}
            </fieldset>

            <fieldset id="fieldset-text" class="form-horizontal">
                <legend>@translate('front.project.edit.fieldset.text')</legend>

                {!! $form->renderFields('text') !!}
            </fieldset>
        </div>
        <div class="col-md-5">
            <fieldset id="fieldset-created" class="form-horizontal">
                <legend>@translate('front.project.edit.fieldset.created')</legend>

                {!! $form->renderFields('created') !!}
            </fieldset>
        </div>
    </div>

    <div class="hidden-inputs">
        @formToken()
    </div>

</form>
@stop
