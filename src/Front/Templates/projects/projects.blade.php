{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Front\FrontPackage                 Package object.
 * @var $view     \Front\View\Projects\ProjectsHtmlView  View object.
 * @var $uri      \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $datetime \Windwalker\Core\DateTime\DateTime          PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\MainRouter          Route builder object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $filterBar     \Windwalker\Core\Widget\Widget
 * @var $filterForm    \Windwalker\Form\Form
 * @var $batchForm     \Windwalker\Form\Form
 * @var $showFilterBar boolean
 * @var $grid          \Phoenix\View\Helper\GridHelper
 * @var $state         \Windwalker\Structure\Structure
 * @var $items         \Windwalker\Data\DataSet
 * @var $item          \Front\Record\ProjectRecord
 * @var $i             integer
 * @var $pagination    \Windwalker\Core\Pagination\Pagination
 */
?>

@extends('_global.front.admin')

@section('toolbar-buttons')
    @include('toolbar')
@stop

@section('admin-body')
<div id="phoenix-admin" class="projects-container grid-container">
    <form name="admin-form" id="admin-form" action="{{ $router->route('projects') }}" method="POST" enctype="multipart/form-data">

        {{-- FILTER BAR --}}
        <div class="filter-bar">
            {!! $filterBar->render(['form' => $form, 'show' => $showFilterBar]) !!}
        </div>

        {{-- RESPONSIVE TABLE DESC --}}
        <p class="visible-xs-block">
            @translate('phoenix.grid.responsive.table.desc')
        </p>

        <div class="grid-table table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    {{-- CHECKBOX --}}
                    <th width="1%">
                        {!! $grid->checkboxesToggle(['duration' => 150]) !!}
                    </th>

                    {{-- STATE --}}
                    <th style="min-width: 90px;"  width="10%">
                        {!! $grid->sortTitle('front.project.field.state', 'project.state') !!}
                    </th>

                    {{-- TITLE --}}
                    <th>
                        {!! $grid->sortTitle('front.project.field.title', 'project.title') !!}
                    </th>

                    {{-- ORDERING --}}
                    <th width="5%" class="text-nowrap">
                        {!! $grid->sortTitle('front.project.field.ordering', 'project.ordering') !!}
                        {!! $grid->saveOrderButton() !!}
                    </th>

                    {{-- AUTHOR --}}
                    <th width="10%" class="text-nowrap">
                        {!! $grid->sortTitle('front.project.field.author', 'project.created_by') !!}
                    </th>

                    {{-- CREATED --}}
                    <th width="10%" class="text-nowrap">
                        {!! $grid->sortTitle('front.project.field.created', 'project.created') !!}
                    </th>

                    {{-- LANGUAGE --}}
                    <th width="7%" class="text-nowrap">
                        {!! $grid->sortTitle('front.project.field.language', 'project.language') !!}
                    </th>

                    {{-- ID --}}
                    <th width="3%" class="text-nowrap">
                        {!! $grid->sortTitle('front.project.field.id', 'project.id') !!}
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach ($items as $i => $item)
                    <?php
                    $grid->setItem($item, $i);
                    ?>
                    <tr data-order-group="">
                        {{-- CHECKBOX --}}
                        <td>
                            {!! $grid->checkbox() !!}
                        </td>

                        {{-- STATE --}}
                        <td>
                            <span class="btn-group">
                                {!! $grid->published($item->state) !!}
                                <button type="button" class="btn btn-default btn-xs hasTooltip" onclick="Phoenix.Grid.copyRow({{ $i }});"
                                    title="@translate('phoenix.toolbar.duplicate')">
                                    <span class="fa fa-fw fa-copy text-info"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs hasTooltip" onclick="Phoenix.Grid.deleteRow({{ $i }});"
                                    title="@translate('phoenix.toolbar.delete')">
                                    <span class="fa fa-fw fa-trash"></span>
                                </button>
                            </span>
                        </td>

                        {{-- TITLE --}}
                        <td>
                            <a href="{{ $router->route('project', ['id' => $item->id]) }}">
                                {{ $item->title }}
                            </a>
                        </td>

                        {{-- ORDERING --}}
                        <td>
                            {!! $grid->orderButton() !!}
                        </td>

                        {{-- AUTHOR --}}
                        <td>
                            {{ property_exists($item, 'user_name') ? $item->user_name : $item->created_by }}
                        </td>

                        {{-- CREATED --}}
                        <td>
                            <span class="hasTooltip" title="{{ $datetime::toLocalTime($item->created, 'Y-m-d H:i:s') }}">
                                {{ $datetime::toLocalTime($item->created, 'Y-m-d') }}
                            </span>
                        </td>

                        {{-- LANGUAGE --}}
                        <td>
                            {{ $item->language }}
                        </td>

                        {{-- ID --}}
                        <td>
                            {{ $item->id }}
                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                    {{-- PAGINATION --}}
                    <td colspan="25">
                        {!! $pagination->route('projects', [])->render() !!}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <div class="hidden-inputs">
            {{-- METHOD --}}
            <input type="hidden" name="_method" value="PUT" />

            {{-- TOKEN --}}
            @formToken()
        </div>

        @include('_global.front.widget.batch')
    </form>
</div>
@stop
