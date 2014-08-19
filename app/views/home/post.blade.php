@extends("layouts.master")
@section("head")

@stop
@section("content")
 <div id="content">
		<div class="container">

		    <div class="col-md-12">
			<ul class="breadcrumb">

			    <li><a href="{{URL::to("/")}}">Home</a></li>
			    <li><a href="{{URL::to("blog")}}">Blog</a></li>
			    <li>{{$post->title}}</li>
			</ul>


			<div class="box text-center">

			    <div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				    <h1>{{$post->title}}</h1>
				    <p class="text-italic text-muted">By <a href="{{URL::to("/")}}">Mahmut Atik</a> |  {{date("d.m.Y",strtotime($post->created_at))}}</p>
				    <p class="lead">{{$post->lead}}</p>
				</div>
			    </div>
			</div>

		    </div>

		    <!-- *** LEFT COLUMN ***
				       _________________________________________________________ -->

		    <div class="col-sm-9" id="blog-post">

			<div id="post-content">
				@if($img = $post->uploads()->first())
				{{HTML::image($img->sizeImg(825,342,false),"",array("class"=>"img-responsive"))}}
				<br/>
			    @endif
			    {{$post->content}}
			</div> <!-- /#post-content -->

			<div id="comments">
			    <h4>no comments</h4>


			    
			</div><!-- /#comments -->


			<div id="comment-form">

			    <h4>Leave comment</h4>

			    <form>
				<div class="row">

				    <div class="col-sm-6">
					<div class="form-group">
					    <label for="name">Name <span class="required">*</span></label>
					    <input type="text" class="form-control" id="name">
					</div>
				    </div>

				</div>

				<div class="row">
				    <div class="col-sm-6">
					<div class="form-group">
					    <label for="email">Email <span class="required">*</span></label>
					    <input type="text" class="form-control" id="email">
					</div>
				    </div>
				</div>

				<div class="row">
				    <div class="col-sm-12">
					<div class="form-group">
					    <label for="comment">Comment <span class="required">*</span></label>
					    <textarea class="form-control" id="comment" rows="4"></textarea>
					</div>
				    </div>
				</div>

				<div class="row">
				    <div class="col-sm-12 text-right">
					<button class="btn btn-primary"><i class="fa fa-comment-o"></i> Post comment</button>
				    </div>
				</div>


			    </form>

			</div> <!-- /#comment-form -->


		    </div> <!-- /#blog-post -->

		    <!-- *** LEFT COLUMN END *** -->

		    <!-- *** RIGHT COLUMN ***
			    _________________________________________________________ -->

		    <div class="col-sm-3">
			

			<div class="banner">
			    <a href="{{URL::to("/")}}">
			    	{{HTML::image("images/banner.jpg","",array("class"=>"img-responsive"))}}
			    </a>
			</div> <!-- /.banner -->
		    </div><!-- /.col-md-3 -->

		    <!-- *** RIGHT COLUMN END *** -->		    


		</div> <!-- /.container -->
	    </div> <!-- /#content --> 
@stop