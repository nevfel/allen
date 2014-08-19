@extends("layouts.master")
@section("head")

@stop
@section("content")
   <div id="content">
    <div class="container">

        <div class="col-md-12">
      <ul class="breadcrumb">

          <li><a href="{{URL::to("/")}}">Home</a></li>
          <li>Blog listing</li>
      </ul>


      <div class="box text-center">

          <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1>Allen Blogs</h1>
        </div>
          </div>
      </div>

        </div>

        <!-- *** LEFT COLUMN ***
         _________________________________________________________ -->

      <div class="col-sm-9" id="blog-listing">
        @foreach($posts as $post)
      <div class="post">
          <h2><a href="{{URL::to("post/".$post->slug)}}">{{$post->title}}</a></h2>
          <p class="author-category">By <a href="{{URL::to("post/".$post->slug)}}">Mahmut Atik</a> </p>
          <hr>
          <p class="date-comments">
        <a href="{{URL::to("post/".$post->slug)}}"><i class="fa fa-calendar-o"></i> {{date("d.m.Y",strtotime($post->created_at))}}</a>
        <a href="{{URL::to("post/".$post->slug)}}"><i class="fa fa-comment-o"></i> 0 Comment</a>
          </p>
            @if($img = $post->uploads()->first())
          <div class="image" style="height: 342px;">
            <a href="{{URL::to("post/".$post->slug)}}">
            {{HTML::image($img->sizeImg(825,342,false),"",array("class"=>"img-responsive"))}}
            </a>
          </div>
            @endif
          <p class="intro">{{$post->lead}}</p>
          <p class="read-more"><a href="{{URL::to("post/".$post->slug)}}" class="btn btn-primary">Continue reading</a></p>
      </div>
      @endforeach

      {{$posts->links()}}



        </div> <!-- /.col-md-9 -->

        <!-- *** LEFT COLUMN END *** -->

        <!-- *** RIGHT COLUMN ***
         _________________________________________________________ -->

        <div class="col-sm-3">
      <div id="categoryMenu">
          <h3>Blog</h3>

          <ul class="nav nav-pills nav-stacked">
        <li>
            <a href="{{URL::to("/")}}">About us</a>
        </li>
        <li>
            <a href="{{URL::to("/")}}">Fashion</a>
        </li> 
        <li>
            <a href="{{URL::to("/")}}">News and gossip</a>
        </li> 
        <li>
            <a href="{{URL::to("/")}}">Design</a>
        </li> 
          </ul>
      </div>

      <div class="banner">
          <a href="{{URL::to("/")}}">
            {{HTML::image("images/banner.jpg","sales 2014",array("class"=>"img-responsive"))}}
          </a>
      </div> <!-- /.banner -->
        </div><!-- /.col-md-3 -->

        <!-- *** RIGHT COLUMN END *** -->       


    </div> <!-- /.container -->
      </div> <!-- /#content -->
@stop