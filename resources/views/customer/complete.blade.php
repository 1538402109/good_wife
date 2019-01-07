@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.customer-list.title')</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($completes) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                    <th>@lang('global.customer-list.fields.name')</th>
                    <th>@lang('global.customer-list.fields.phone')</th>
                    <th>@lang('global.customer-list.fields.address')</th>
                    <th>@lang('global.customer-list.fields.goods')</th>
                    <th>@lang('global.customer-list.fields.pay_money')</th>
                    <th>@lang('global.customer-list.fields.status')</th>
                    <th>@lang('global.customer-list.fields.vipflag')</th>
                    <th>@lang('global.customer-list.fields.created_at')</th>
                </tr>
                </thead>

                <tbody>
                @if (count($completes) > 0)
                    @foreach ($completes as $complete)
                        <tr data-entry-id="{{ $complete->id }}">
                            <td></td>

                            <td>{{ $complete->name }}</td>
                            <td>{{ $complete->phone }}</td>
                            <td>{{ $complete->address }}</td>
                            <td>{{ $complete->goods_id }}</td>
                            <td>{{ $complete->pay_money }}</td>
                            <td>{{ $complete->pay_status }}</td>
                            <td>{{ $complete->isvip }}</td>
                            <td>{{ $complete->created_at }}</td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
