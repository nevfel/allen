@extends('admin.layouts.interface-new')

@section('title')
    Yeni Ürün Ekle
@stop

@section('heading')
    <h1>Yeni Ürün</h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "category_id" , 'Ürün Kategori' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::select( "category_id" ,$categories, Input::old( "category" ) , array( 'class'=>'form-control' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "title" , 'Ürün Adı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title" ) , array( 'class'=>'form-control' , 'placeholder'=>'Ürün Adı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Slug' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" , Input::old( "slug" ) , array( 'class'=>'form-control' , 'placeholder'=>'Ürün Link' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Ürün Açıklaması' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Ürün Açıklaması' ) ) }}
        </div>
    </div>
    
@stop