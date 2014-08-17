@extends('admin.layouts.product-edit')

@section('title')
     {{ $item->title }} Güncelle
@stop

@section('heading')
    <h1>Ürün Güncelle: <small>{{ $item->title }}</small></h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "title" , 'Ürün Adı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title", $item->title ) , array( 'class'=>'form-control' , 'placeholder'=>'Ürün Adı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Slug' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" , Input::old( "slug", $item->slug ) , array( 'class'=>'form-control' , 'placeholder'=>'Ürün Link' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "content" , 'Açıklama' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "content" , Input::old( "content", $item->content ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Ürün Açıklaması' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "category_id" , 'Kategori' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::select( "category_id" ,$kategoriler, Input::old( "content", $item->category_id ), array( 'class'=>'form-control' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "price" , 'Ürün Fiyatı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "price" , Input::old( "price", $item->price ) , array( 'class'=>'form-control' , 'placeholder'=>'Ürün Link' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "saleprice" , 'Satış Fiyatı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "saleprice" , Input::old( "saleprice", $item->saleprice ) , array( 'class'=>'form-control' , 'placeholder'=>'Ürün Link' ) ) }}
        </div>
    </div>
@stop