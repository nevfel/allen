@extends('admin.layouts.interface')

@section('title')
   Menüler
@stop

@section('content')

    <h1>Menüler</h1>

    {{-- The error / success messaging partial --}}
    @include('admin.partials.messaging')
    
    @if( $html )
  
        <ol class='vertical'>
        {{$html}}
        </ol>
    @else
        <div class="alert alert-info">
            <strong>No Items Yet:</strong> You don't have any items here just yet. Add one using the button below.
        </div>
    @endif
    <a href="{{ $new_url }}" class="btn btn-primary pull-right">Yeni Ekle</a>

@stop

@section('scripts')
@parent
{{HTML::script("admin/js/jquery-ui.js")}}
{{HTML::script("admin/js/jquery-sortable.js")}}
<script type="text/javascript">
    $(document).ready(function(){

        var group = $("ol.vertical").sortable({
          group:'vertical',
          handle:'span.glyphicon-move',
          delay: 500,
          maxDepth: 1,
          onDrop: function (item, container, _super) {
            var data = group.sortable("serialize").get();
            $.post("{{URL::to('admin/menu/save')}}",{data:data});
            _super(item, container);
          }
        });
    });
</script>
@stop

@section('css')
    @parent
    <style type="text/css">
        body.dragging, body.dragging * {
          cursor: move !important;
      }

      .dragged {
            position: absolute;
            opacity: 0.5;
            z-index: 2000;
      }

      ol.vertical {
            margin: 0 0 9px 0;
            min-height: 10px;
        }
          /* line 13, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
      ol.vertical li {
            display: block;
            margin: 5px;
            padding: 5px;
            border: 1px solid #cccccc;
            color: #0088cc;
            background: #eeeeee; 
        }
        ol.vertical li.placeholder {
            position: relative;
            margin: 0;
            padding: 0;
            border: none; 
        }
        ol.vertical li.placeholder:before {
            position: absolute;
            content: "";
            width: 0;
            height: 0;
            margin-top: -5px;
            left: -5px;
            top: -4px;
            border: 5px solid transparent;
            border-left-color: red;
            border-right: none;
        }
        ol.nav .divider-vertical {
        cursor: default; }

        ol.example li.placeholder {
          position: relative;
          /** More li styles **/
        }
        ol.example li.placeholder:before {
          position: absolute;
          /** Define arrowhead **/
        }
</style>
@stop