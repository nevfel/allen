@extends("layouts.master")
@section("head")
{{HTML::style("css/colorbox.css")}}

@stop
@section("content")
   <div class="main-container col2-right-layout">
   	<div class="container_24">
   		<div class="wrapper">
   			<div class="grid_24">
   				<div class="main">
   					<div class="breadcrumbs">
   						<ul>
   							<li class="home">
   								<a href="{{URL::to('/')}}" title="Anasayfa">Anasayfa</a>
   								<span>></span>
   							</li>
   							<li class="category6">
   								<a href="#" title="">Uygulamalarımız</a>
   								<span>></span>
   							</li>
   							<li class="product">
   								<strong>{{$model->title}} </strong>
   							</li>
   						</ul>
   					</div>
   					<div class="wrapper">
   						<div class="col-main alpha grid_18">
						   	{{$model->description}}
						   	@foreach($model->uploads as $upload)
						   
	                        <div upload-id="{{ $upload->id }}" class="grid_4">
	                            <div class="thumbnail">
	                                <div class="image-container">
	                                    <a href="{{$upload->sizeImg( 600 , NULL , false ) }}" class="group1"><img src="{{ $upload->sizeImg( 200 , 150 , false ) }}" alt=""></a>
	                                </div>
	                            </div>
	                        </div>
	                    @endforeach
						</div>
					

<div class="col-right sidebar grid_6 omega">
@include("partials.cart_block")

@include("partials.tags")

@include("partials.poll")
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@stop

@section('script')
{{HTML::script("js/jquery.colorbox.js")}}
<script type="text/javascript">
$(document).ready(function(){
	$(".group1").colorbox({rel:'group1'});
});
</script>
@stop