@extends('admin.layouts.interface-edit')

@section('title')
    Ürün Kategori Güncelle : {{ $item->name }}
@stop

@section('heading')
    <h1>Ürün Kategorisi Güncelle: <small>{{ $item->name }}</small></h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "name" , 'Kategori Başlığı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "name" , Input::old( "name", $item->name ) , array( 'class'=>'form-control' , 'placeholder'=>'Kategori Başlığı' ) ) }}
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