@extends("layouts.master")
@section("head")

@stop
@section("content")
<div id="content">
		<div class="container">

		    <div class="col-md-12">
			<ul class="breadcrumb">
			    <li><a href="{{URL::to("/")}}">Home</a></li>
			    
			    <li>{{$product->title}}</li>
			</ul>
			<div class="box text-center">

			    <div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				    <h1>{{$product->title}}</h1>
				    <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a></p>
				</div>
			    </div>
			</div>


		    </div>		    

		    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

		    <div class="col-md-9">

			<div class="row" id="productMain">
			    <div class="col-sm-6">
				<div id="mainImage">
					@if($product->uploads()->first())
						{{HTML::image($product->uploads()->first()->sizeImg( 400 , 400 , false ),"",array("class"=>"img-responsive"))}}
					@endif
				</div>

				<div class="ribbon sale">
				    <div class="theribbon">SALE</div>
				    <div class="ribbon-background"></div>
				</div><!-- /.ribbon -->

				<div class="ribbon new">
				    <div class="theribbon">NEW</div>
				    <div class="ribbon-background"></div>
				</div><!-- /.ribbon -->	

			    </div>
			    <div class="col-sm-6">
				<div class="box">

				    <form>
					

					<p class="price">${{$product->saleprice}}</p>

					<p class="text-center"><button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</button></p>
				    </form>
				</div>

				<div class="row" id="thumbs">
					@foreach($product->uploads as $img)
				    <div class="col-xs-4">
					<a href="{{URL::to($img->sizeImg(400,400,false))}}" class="thumb">
					    {{HTML::image($img->sizeImg(111,111,false),"",array("class"=>"img-responsive"))}}
					</a>
				    </div>
				    @endforeach			    
				</div>
			    </div>

			</div>


			<div class="box" id="details">
			    <p></p><h4>Product details</h4>
			    {{$product->description}}

			</div>

			@include("product._interested",array("products"=>$interested_products))

			@include("product._recently_viewed",array("products"=>$related_products))		

		    </div> <!-- /.col-md-9 -->


		    <!-- *** LEFT COLUMN END *** -->		    

		    <!-- *** RIGHT COLUMN ***
		  _________________________________________________________ -->

		    <div class="col-sm-3">
			<div id="categoryMenu">
			    <h3>Shop</h3>

			    <ul class="nav nav-pills nav-stacked">
				{{$SideNav}}

			    </ul>
			</div>

			<div class="banner">
			    <a href="{{URL::to("category")}}">
			    	{{HTML::image("images/demo/banner.jpg","sales 2014",array("class"=>"img-responsive"))}}
			    </a>
			</div> <!-- /.banner -->
		    </div><!-- /.col-md-3 -->

		    <!-- *** RIGHT COLUMN END *** -->

		</div> <!-- /.container -->
	    </div> <!-- /#content -->

@stop