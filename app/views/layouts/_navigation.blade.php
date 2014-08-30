	<!-- *** NAVBAR ***
	_________________________________________________________ -->

	<div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">

		<div class="container">
			<div class="navbar-header">

				<a class="navbar-brand home" href="{{URL::to("/")}}">
					{{HTML::image("images/logo.png","Allen-bg",array("class"=>"hidden-xs hidden-sm"))}}
					{{HTML::image("images/logo-small.png","Allen-bg",array("class"=>"visible-xs visible-sm"))}}
					<span class="sr-only">Minimal - go to homepage</span>
				</a>
				<div class="navbar-buttons">
					<button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle search</span>
						<i class="fa fa-search"></i>
					</button>
					<a class="btn btn-primary navbar-toggle" href="#">
						<i class="fa fa-shopping-cart"></i> <span class="hidden-xs">cart empty</span>
					</a>
				</div>
			</div> <!--/.navbar-header -->

			<div class="navbar-collapse collapse" id="navigation">

				<ul class="nav navbar-nav navbar-left">
					<li class="active"><a href="{{URL::to("/")}}">Home</a></li>
					<li class="dropdown yamm-fw">
						<a href="{{URL::to("/")}}" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
						<ul class="dropdown-menu">

							<li>
								<div class="yamm-content">
									<div class="row">
										<div class="col-sm-3">
											{{HTML::image("images/product.jpg","",array("class"=>"img-responsive hidden-xs"))}}
										</div>
										{{$nav}}
										
									</div>
								</div>
								<div class="footer clearfix hidden-xs">
									<h4 class="pull-right">Products</h4>
									<div class="buttons pull-left">
										<a href="{{URL::to("/")}}" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
										<a href="{{URL::to("/")}}" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
										<a href="{{URL::to("/")}}" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
									</div>
								</div>

							</li>
						</ul>
					</li>
							
					<li class="dropdown">
						<a href="{{URL::to("/")}}" class="dropdown-toggle" data-toggle="dropdown">Productions <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{URL::to("/")}}">Homepage</a></li>
							<li class="divider"></li>
							<li><a href="{{URL::to("blog")}}">Blog listing</a></li>

						</ul>
					</li>
					<li><a href="{{URL::to("storage")}}">Storage</a></li>
					<li><a href="{{URL::to("contact")}}">Contact</a></li>
				</ul>

			</div><!--/.nav-collapse -->

			<div class="navbar-collapse collapse right" id="basket-overview">
				<a href="#" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">no items <span class="hidden-md">in cart</span></span></a>
			</div><!--/.nav-collapse -->

			<div class="navbar-collapse collapse right" id="search-not-mobile">
				<button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
					<span class="sr-only">Toggle search</span>
					<i class="fa fa-search"></i>
				</button>
			</div>

			<div class="collapse clearfix" id="search">

				<form class="navbar-form" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>

			</div><!--/.nav-collapse -->	

		</div>


	</div><!-- /#navbar -->

	<!-- *** NAVBAR END *** -->