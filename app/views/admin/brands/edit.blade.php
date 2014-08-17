@extends('admin.layouts.interface-edit')

@section('title')
    Üretici Firma Güncelle : {{ $item->title }}
@stop

@section('heading')
    <h1>Üretici Firma Güncelle: <small>{{ $item->title }}</small></h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "title" , 'Marka Adı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title", $item->title ) , array( 'class'=>'form-control' , 'placeholder'=>'Marka Adı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Link' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" ,$item->slug , array( 'class'=>'form-control' , 'disabled'=>'disabled' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Açıklama' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" , $item->description ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Açıklama' ) ) }}
        </div>
    </div>
    
@stop