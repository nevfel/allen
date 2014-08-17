@extends('admin.layouts.interface-new')

@section('title')
    Menü Ekle
@stop

@section('heading')
    <h1>Yeni Menü</h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "parent_id" , 'Üst Menü' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::select( "parent_id" , array(),Input::old( "parent_id" ) , array( 'class'=>'form-control' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "title" , 'Menü Başlığı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title" ) , array( 'class'=>'form-control' , 'placeholder'=>'Kategori Başlığı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Menü Linki' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" , Input::old( "slug" ) , array( 'class'=>'form-control' , 'placeholder'=>'Kategori Linki' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Menü İçeriği' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Kategori İçeriği' ) ) }}
        </div>
    </div>
   
    
@stop