@extends('admin.layouts.interface')

@section('title')
    {{ $app_name }}
@stop

@section('content')

    <h1> {{ $app_name }} yönetim sayfası</h1>
    
    <ul>
        <li>Postlar</li>
        <li>Bloklar</li>
        <li>Ürün kategorileri</li>
        <li>ve daha fazlası..</li>
    </ul>

@stop