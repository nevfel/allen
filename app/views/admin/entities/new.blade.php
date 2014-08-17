@extends('admin.layouts.interface-new')

@section('title')
    Üretici Firma Ekle
@stop

@section('heading')
    <h1>Yeni Üretici Firma</h1>
@stop

@section('form-items')

    <div class="form-group">
        {{ Form::label( "title" , 'Firma Adı' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "title" , Input::old( "title" ) , array( 'class'=>'form-control' , 'placeholder'=>'Marka Adı' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "slug" , 'Link' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::text( "slug" , Input::old( "slug" ) , array( 'class'=>'form-control' , 'placeholder'=>'Link' ) ) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label( "description" , 'Açıklama' , array( 'class'=>'col-lg-2 control-label' ) ) }}
        <div class="col-lg-10">
            {{ Form::textarea( "description" , Input::old( "description" ) , array( 'class'=>'form-control rich' , 'placeholder'=>'Açıklama' ) ) }}
        </div>
    </div>
   
    
@stop