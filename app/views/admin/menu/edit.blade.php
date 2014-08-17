@extends('admin.layouts.interface-edit')

@section('title')
    Menü Güncelle : {{ $item->title }}
@stop

@section('heading')
    <h1>Menü Güncelle: <small>{{ $item->title }}</small></h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "parent_id" , 'Üst Menü' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::select( "parent_id" , array(),Input::old( "parent_id", $item->title ) , array( 'class'=>'form-control' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "title" , 'Menü Başlığı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title", $item->title ) , array( 'class'=>'form-control' , 'placeholder'=>'Menü Başlığı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Menü Linki' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" ,$item->slug , array( 'class'=>'form-control' , 'disabled'=>'disabled' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Menü İçeriği' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" , $item->description ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Menü İçeriği' ) ) }}
        </div>
    </div>
  {{Form::checkbox("sil",1)}} Silinecek mi?  
@stop