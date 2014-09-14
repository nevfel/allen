@extends("layouts.master")

@section("intro")
	@include("home._intro")
@stop

@section("content")

<!-- *** ADVANTAGES ***
	    _________________________________________________________ -->

	    <div id="advantages">

		<div class="container">

		    <div class="col-md-12">

			<div class="box" id="about">
			    <h3 class="text-uppercase">About Allen</h3>

			    {{$about}}

			    <div class="same-height-row row">
				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm" style="height: 89px;">
					<div class="icon"><i class="fa fa-heart-o"></i></div>
					<h4><a href="{{URL::to("/")}}">Satisfied customers</a></h4>
				    </div>
				</div>

				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm" style="height: 89px;">
					<div class="icon"><i class="fa fa-tags"></i></div>
					<h4><a href="{{URL::to("/")}}">Best prices</a></h4>
				    </div>
				</div>

				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm" style="height: 89px;">
					<div class="icon"><i class="fa fa-send-o"></i></div>
					<h4><a href="{{URL::to("/")}}">Next day delivery</a></h4>
				    </div>
				</div>

				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm" style="height: 89px;">
					<div class="icon"><i class="fa fa-refresh"></i></div>
					<h4><a href="{{URL::to("/")}}">Free returns for 3 months</a></h4>
				    </div>
				</div>			
			    </div> <!-- /.row -->			

			</div>

		    </div>


		</div> <!-- /.container -->

	    </div> <!-- /#advantages -->

	    <!-- *** ADVANTAGES END *** -->



	<!-- *** CONTENT ***
	    _________________________________________________________
	    _________________________________________________________
	    -->

	    <div id="content">
		<div class="container">

		    <div class="col-sm-12">

			<div class="box text-center">
			    <h3 class="text-uppercase">New products</h3>

			    <h4 class="text-muted"><span class="accent">Free shipping</span> on all</h4>
			</div>

			<div class="row products">
			@foreach($new_products as $product)
			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image" style="height: 255px;">
					<a href="{{URL::to("product/".$product->slug)}}">
					@if($product->uploads()->first())
						{{HTML::image($product->uploads()->first()->sizeImg( 255, 255 , false ),"",array("class"=>"img-responsive image1"))}}
					@endif
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="{{URL::to("product/".$product->slug)}}">{{$product->title}}</a></h3>
					<p class="price">${{$product->saleprice}}</p>

				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="{{URL::to("product/".$product->slug)}}" class="btn btn-default">View detail</a>
					<a href="{{URL::to("cart")}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>
				</div> <!-- /.product -->
			    </div> 
		    @endforeach
			</div><!-- /.products -->

			<!-- *** BLOG HOMEPAGE ***
			_________________________________________________________ -->

			<div class="box text-center">
			    <h3 class="text-uppercase">From our blog</h3>

			    <p class="text-italic text-large">What's new in the world of fabric? <span class="accent"><a href="{{URL::to('blog')}}">Check our blog!</a></span></p>
			</div>		

			<div id="blog-homepage" class="row">
				@foreach($new_posts as $post)
			    <div class="col-sm-6">
				<div class="post">
				    <h4><a href="{{URL::to("post/".$post->slug)}}">{{$post->title}}</a></h4>
				    <p class="author-category">By <a href="{{URL::to("/")}}">Mahmut Atik</a></p>
				    <hr>
				    <p class="intro">{{$post->lead}}</p>
				    <p class="read-more"><a href="{{URL::to("post/".$post->slug)}}" class="btn btn-primary">Continue reading</a></p>
				</div>
			    </div>
			    @endforeach

			    </div>

			</div> <!-- /#blog-homepage -->

			<!-- *** BLOG HOMEPAGE END *** -->

		    </div> <!-- /.col-sm-12 -->
		</div> <!-- /.container -->
	    </div> <!-- /#content -->
	
@stop

@section("script")


@stop