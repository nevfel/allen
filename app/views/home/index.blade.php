@extends("layouts.master")
@section("head")

@stop

@section("intro")
	@include("home._intro")
@stop

@section("content")

<!-- *** ADVANTAGES ***
	    _________________________________________________________ -->

	    <div id="advantages">

		<div class="container">

		    <div class="col-md-12">

			<div class="box text-center" id="about">
			    <h3 class="text-uppercase">About Allen</h3>

			    <p> Our sales office is in EU while production is in Bursa/Turkiye </p>
			    <p>selling possibility WITHOUT 'VAT & CUSTOM DUTIES' (All custom duties and VAT are paid by Allen in Bulgaria and European customers have goods with no any taxes)</p>
			    <p>Huge Production capacity ( Jacquard&dobby machines, warp&circular knitting machines and foam laminated by flame.)</p>
			    <p>Huge Storage in Greece (2.000 m2. store in Thessaloniki/Greece. We keep stock from each designs and colours to be able to delivery from 1,00 meter to up. )</p>
			    <p>product variety ( offers a wide range of products for HOME, OFFICE and VEHICLE interiors: These textiles are used for FURNITURE, SOFAS, CHAIRS, CURTAIN, PILLOWS, etc at home and SEATS, COUCHETTE, HEAD and ARM RESTS, DOOR and CEILING PANEL, CURTAIN etc at VEHICLE and also for OFFICE.)</p>
			    <p>compatible prices</p>
			    <p>delivery possibility from 1,00 mt to all EU (Via our store in Thessaloniki/Greece)</p>
			    <p>innovation fabrics possibilities (Waterproofe, Fire retardant, easy clean etc. fabrics are possible)</p>
			    <p> sales agent for Artificial Leather and Mattress ( we can supply artificial leathers and mattress from our store in Thessalonki)</p>
			    <p> fast delivery time via either storage or factory.</p>
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
						{{HTML::image($product->uploads()->first()->sizeImg( 255, 255 , false ),"",array("class"=>"img-responsive image1"))}}
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