@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.customer-list.title')</h3>
    {!! Form::model($customer, ['method' => 'PUT', 'route' => ['customers.update', $customer->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', '姓名*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', '电话*', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', '地址*', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'),['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('goods_id', '商品名称*', ['class' => 'control-label']) !!}
                    {!! Form::select('goods_id[]', ['a','b','c'] ,old('goods_id'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('goods_id'))
                        <p class="help-block">
                            {{ $errors->first('goods_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pay_money', '缴纳定金*', ['class' => 'control-label']) !!}
                    {!! Form::text('pay_money',  old('pay_money'), ['class' => 'form-control', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pay_money'))
                        <p class="help-block">
                            {{ $errors->first('pay_money') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status', '状态*', ['class' => 'control-label']) !!}
                    {!! Form::select('status',  ['-1'=>'--请选择--','0'=>'缴纳定金','1'=>'已清款','2'=>'未付款','3'=>'未清款'], 'S',['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status'))
                        <p class="help-block">
                            {{ $errors->first('status') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vipflag', 'VIP*', ['class' => 'control-label']) !!}
                    {!! Form::select('vipflag',['-1'=>'--请选择--','0' => '否', '1' => '是'], 'S',['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vipflag'))
                        <p class="help-block">
                            {{ $errors->first('vipflag') }}
                        </p>
                    @endif
                </div>
            </div>


        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

