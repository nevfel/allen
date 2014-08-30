@extends("layouts.master")
@section("head")

@stop
@section("content")
    <div id="content">
		<div class="container">

		    <div class="col-md-12">
			<ul class="breadcrumb">

			    <li><a href="{{URL::to("contact")}}">Home</a></li>
			    <li>Storage</li>
			</ul>

			<div class="box text-center">

			    <div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				    <h1>Storage</h1>

					{{$storage->content}}
					@foreach($storage->uploads as $img)
						<div class="col-xs-6 col-md-3">
						    <a href="#" class="thumbnail">
						    	{{HTML::image($img->sizeImg( 400 , 400 , false ),"",array("class"=>"img-responsive"))}}
						    </a>
						</div>
					@endforeach
				
				</div>
			    </div>
			</div>

			
		    </div>

		</div> <!-- /.container -->
	    </div> <!-- /#content -->
@stop