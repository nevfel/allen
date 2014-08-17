@extends('admin.layouts.interface')

@section('title')
    Manage Website Settings
@stop

@section('content')

    <h1>WebSite Ayarları</h1>
    <p>Web sayfa ayalarını aşağıdan değiştirebilirsiniz:</p>
    @if($items)
        {{ Form::open( array( 'url'=>$object_url , 'class'=>'form-horizontal' , 'role'=>'form' ) ) }}

            {{-- The error / success messaging partial --}}
            @include('admin.partials.messaging')

            {{-- Loop through each setting and get it prepped for stuff --}}
            @foreach($items as $item)

                <div class="form-group">
                    {{ Form::label( "settings[$item->id]" , $item->label , array( 'class'=>'col-lg-2 control-label' ) ) }}
                    
                    <div class="col-lg-10">
                        {{ Form::text( "settings[$item->id]" , Input::old( "settings[$item->id]" , $item->value ) , array( 'class'=>'form-control' , 'placeholder'=>$item->label ) ) }}
                    </div>
                </div>

            @endforeach

            {{ Form::submit('Ayarları Kaydet' , array('class'=>'btn btn-large btn-primary pull-right')) }}

        {{ Form::close() }}
    @endif

@stop