@extends("layouts.master")
@section("head")

@stop
@section("content")

	<div id="content">
		<div class="container">

		    <div class="col-md-12">
			<ul class="breadcrumb">

			    <li><a href="{{URL::to("category")}}">Home</a></li>
			    <li>{{$model->name}}</li>
			</ul>
			<div class="row">
			    <div class="box text-center">
				<div class="row">
				    <div class="col-sm-10 col-sm-offset-1">
					<h1>{{$model->name}}</h1>
					<p class="text-muted">{{$model->description}}</p>
				    </div>
				</div>
			    </div>

			</div>

		    </div>

		    <div class="row">


			<!-- *** LEFT COLUMN ***
			_________________________________________________________ -->

			<div class="col-sm-9">

			    <div class="row products">
			    @foreach($model->products as $product)

					<div class="col-md-4 col-sm-6">
					    <div class="product">
						<div class="image" style="height: 262px;">
						    <a href="{{URL::to("product/".$product->slug)}}">
						    	@if($product->uploads()->first())
									{{HTML::image($product->uploads()->first()->sizeImg( 300 , 300 , false ),"",array("class"=>"img-responsive image1"))}}
								@endif
						    </a>
						</div><!-- /.image -->
						<div class="text">
						    <h3><a href="{{URL::to("product/".$product->slug)}}">{{$product->title}}</a></h3>
						    <p class="price">${{$product->saleprice}}</p>
						    <p class="buttons">
							<a href="{{URL::to("product/".$product->slug)}}" class="btn btn-default">View detail</a>
							<a href="{{URL::to("cart")}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						    </p>
						</div><!-- /.text -->
					    </div> <!-- /.product -->
					</div> 
				@endforeach
			    </div><!-- /.products -->

			    <div class="row">

				<div class="col-md-12 banner">
				    <a href="{{URL::to("/")}}">
				    	{{HTML::image("images/banner2.jpg","",array("class"=>"img-responsive"))}}
				    </a>
				</div>

			    </div>


			    <div class="pages">

				<p class="loadMore">
				    <a href="{{URL::to("category")}}" class="btn btn-primary"><i class="fa fa-chevron-down"></i> Load more</a>
				</p>

				<ul class="pagination">
				    <li><a href="{{URL::to("category")}}">«</a></li>
				    <li class="active"><a href="{{URL::to("category")}}">1</a></li>
				    <li><a href="{{URL::to("category")}}">2</a></li>
				    <li><a href="{{URL::to("category")}}">3</a></li>
				    <li><a href="{{URL::to("category")}}">4</a></li>
				    <li><a href="{{URL::to("category")}}">5</a></li>
				    <li><a href="{{URL::to("category")}}">»</a></li>
				</ul>
			    </div>


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
				<a href="{{URL::to("/")}}">
					{{HTML::image("images/banner.jpg","sales 2014",array("class"=>"img-responsive"))}}
				</a>
			    </div> <!-- /.banner -->
			</div><!-- /.col-md-3 -->

			<!-- *** RIGHT COLUMN END *** -->

		    </div>

		</div> <!-- /.container -->
	    </div> <!-- /#content -->

@stop