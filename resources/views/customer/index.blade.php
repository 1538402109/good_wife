@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.customer-list.title')</h3>
    <p>
        <a href="{{ route('customers.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($customers) > 0 ? 'datatable' : '' }} dt-select">
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
                    <th>&nbsp;</th>

                </tr>
                </thead>

                <tbody>
                @if (count($customers) > 0)
                    @foreach ($customers as $customer)
                        <tr data-entry-id="{{ $customer->id }}">
                            <td></td>

                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->goods_id }}</td>
                            <td>{{ $customer->pay_money }}</td>
                            <td>{{ $customer->status }}</td>
                            <td>{{ $customer->vipflag }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td>
                                <a href="{{ route('customers.edit',[$customer->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                    'route' => ['customers.destroy', $customer->id])) !!}
                                {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>

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

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
    </script>
@endsection