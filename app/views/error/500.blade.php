@extends("layouts.master")

@section("content")
 <div id="content">
		<div class="container">

		    <div class="col-sm-6 col-sm-offset-3" id="error-page">

			<div class="box">
				<br/>
		    <p class="text-center">
				<a href="{{URL::to("/")}}">
					{{HTML::image("images/logo.png","Obaju template")}}
				</a>
			</p>

			    <h3>We're sorry, but we could not fulfill your request  on this server.</h3>
			    <h4 class="text-muted">Error 500 -  Something went wrong</h4>

			    <p class="text-center">To continue please use the <strong>Search form</strong> above.</p>

			    <p class="buttons"><a href="{{URL::to("/")}}" class="btn btn-primary"><i class="fa fa-home"></i> Go to Homepage</a></p>
			</div>


		    </div> <!-- /.col-sm-6 -->
		</div> <!-- /.container -->
	</div> <!-- /#content -->
@stop