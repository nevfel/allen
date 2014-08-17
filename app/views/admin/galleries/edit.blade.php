@extends('admin.layouts.interface-edit')

@section('title')
    Kategori Güncelle : {{ $item->title }}
@stop

@section('heading')
    <h1>Uygulama Kategorisi Güncelle: <small>{{ $item->title }}</small></h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "title" , 'Kategori Başlığı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title", $item->title ) , array( 'class'=>'form-control' , 'placeholder'=>'Kategori Başlığı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Kategori Linki' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" ,$item->slug , array( 'class'=>'form-control' , 'disabled'=>'disabled' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Kategori İçeriği' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" , $item->description ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Kategori İçeriği' ) ) }}
        </div>
    </div>
    
@stop