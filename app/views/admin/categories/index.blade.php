@extends('admin.layouts.interface')

@section('title')
    Ürün Kategorileri
@stop

@section('content')

    <h1>Ürün Kategorileri</h1>

    {{-- The error / success messaging partial --}}
    @include('admin.partials.messaging')
    
    @if( !$items->isEmpty() )
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Slug</th>
                    <th>Ekleme Tarihi</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td><a href="{{ $edit_url.$item->id }}">{{ $item->id }}</a></td>
                        <td><a href="{{ $edit_url.$item->id }}">{{ $item->name }}</a></td>
                        <td><a href="{{ $edit_url.$item->id }}">{{ $item->slug }}</a></td>
                        <td><a href="{{ $edit_url.$item->id }}">{{ $item->created_at }}</a></td>
                        <td>
                            <div class="pull-right">
                                <a href="{{ $edit_url.$item->id }}" class="btn btn-sm btn-primary">Güncelle</a> <a href="{{ $delete_url.$item->id }}" class="btn btn-sm btn-danger">Sil</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">
            <strong>No Items Yet:</strong> You don't have any items here just yet. Add one using the button below.
        </div>
    @endif
    <a href="{{ $new_url }}" class="btn btn-primary pull-right">Yeni Ekle</a>
@stop