@extends('admin.layouts.interface-new')

@section('title')
    Ürün Kategorisi Ekle
@stop

@section('heading')
    <h1>Yeni Ürün Kategorisi</h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "name" , 'Kategori Başlığı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "name" , Input::old( "name" ) , array( 'class'=>'form-control' , 'placeholder'=>'Kategori Başlığı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Kategori Linki' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" , Input::old( "slug" ) , array( 'class'=>'form-control' , 'placeholder'=>'Kategori Linki' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Kategori İçeriği' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Kategori İçeriği' ) ) }}
        </div>
    </div>
    
@stop