@extends("layouts.master")

@section("content")
<div id="content">
	<div class="container">

	    <div class="col-md-12">
		<ul class="breadcrumb">

		    <li><a href="{{URL::to("/")}}">Home</a></li>
		    <li>Text page</li>
		</ul>

		<div class="box text-center">
		    <div class="row">
			<div class="col-sm-10 col-sm-offset-1">
			    <h1>Text page</h1>

			    <p>This page's aim is to show you the most common HTML elements appearance on the website. For further reference please visit official <a href="http://getbootstrap.com/css/" class="external">Bootstrap website</a>.</p>
			</div>
		    </div>
		</div>

	    </div>

	    <!-- *** LEFT COLUMN ***
	     _________________________________________________________ -->

	    <div class="col-md-9 clearfix">

		<div class="box" id="text-page">
		    <h1>Text formatting - Header level 1</h1>

		    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="{{URL::to("/")}}">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

		    <h2>Header Level 2</h2>

		    <ol>
			<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			<li>Aliquam tincidunt mauris eu risus.</li>
		    </ol>

		    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

		    <h3>Header Level 3</h3>

		    <ul>
			<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			<li>Aliquam tincidunt mauris eu risus.</li>
		    </ul>

		    <hr>

		    <h2>Images</h2>

		    <div class="row">
			<div class="col-md-4">
			    <p class="text-center">
			    	{{HTML::image("images/demo/detailsquare.jpg","",array("class"=>"img-circle img-responsive"))}}
			    </p>
			    <p class="text-center">circle</p>
			</div>
			<div class="col-md-4">
			    <p class="text-center">
			    	{{HTML::image("images/demo/detailsquare.jpg","",array("class"=>"img-thumbnail img-responsive"))}}
			    </p>
			    <p class="text-center">thumbnail</p>
			</div>
			<div class="col-md-4">
			    <p class="text-center">
			    	{{HTML::image("images/demo/detailsquare.jpg","",array("class"=>"img-rounded img-responsive"))}}
			    </p>
			    <p class="text-center">rounded</p>
			</div>
		    </div>

		</div>


	    </div> <!-- /.col-md-9 -->

	    <!-- *** LEFT COLUMN END *** -->

	    <!-- *** RIGHT COLUMN ***
		    _________________________________________________________ -->

	    <div class="col-sm-3">
		<div id="categoryMenu">
		    <h3>Shop</h3>

		    <ul class="nav nav-pills nav-stacked">
			<li>
			    <a href="{{URL::to("category")}}">Men</a>
			    <ul>
				<li><a href="{{URL::to("category")}}">T-shirts</a></li>
				<li><a href="{{URL::to("category")}}">Shirts</a></li>
				<li><a href="{{URL::to("category")}}">Pants</a></li>
				<li><a href="{{URL::to("category")}}">Accessories</a></li>
			    </ul>
			</li>
			<li>
			    <a href="{{URL::to("category")}}">Ladies</a>
			    <ul>
				<li><a href="{{URL::to("category")}}">T-shirts</a></li>
				<li><a href="{{URL::to("category")}}">Skirts</a></li>
				<li><a href="{{URL::to("category")}}">Pants</a></li>
				<li><a href="{{URL::to("category")}}">Accessories</a></li>
			    </ul>
			</li>	
			<li>
			    <a href="{{URL::to("category")}}">Kids</a>
			    <ul>
				<li><a href="{{URL::to("category")}}">T-shirts</a></li>
				<li><a href="{{URL::to("category")}}">Skirts</a></li>
				<li><a href="{{URL::to("category")}}">Pants</a></li>
				<li><a href="{{URL::to("category")}}">Accessories</a></li>
			    </ul>
			</li>

		    </ul>
		</div>
@stop