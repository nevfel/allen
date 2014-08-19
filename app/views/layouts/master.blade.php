<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html style="" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="googlebot" content="index,follow,snippet,archive">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ALLEN offers a wide range of products for HOME, OFFICE and VEHICLE interiors: These textiles are used for FURNITURE, SOFAS, CHAIRS, CURTAIN, PILLOWS, etc at home and SEATS, COUCHETTE, HEAD and ARM RESTS, DOOR and CEILING PANEL, CURTAIN etc at VEHICLE and also for OFFICE.</title>
<meta name="description" content="Default Description">
<meta name="keywords" content="FURNITURE, SOFAS, CHAIRS, CURTAIN, PILLOWS,interiors">
<meta name="robots" content="INDEX,FOLLOW">
<link rel="icon" href="{{URL::to("/")}}/favicon.ico" type="image/x-icon">

{{HTML::style("css/font.css")}}
{{HTML::style("vendor/font-awesome-4.1.0/css/font-awesome.css")}}
{{HTML::style("vendor/bootstrap-3.2.0/css/bootstrap.min.css")}}
{{HTML::style("css/styles.css")}}

{{HTML::style("vendor/owl-carousel/owl.carousel.css")}}
{{HTML::style("vendor/owl-carousel/owl.theme.css")}}


@yield("head")

</head>
	
<body class="no-padding">

@include("layouts._navigation")

@yield("intro")

<div id="all">
	
    @yield("content")


    @include("layouts._footer")


	
</div> <!-- /#all -->


	<!-- #### JAVASCRIPT FILES ### -->
	{{HTML::script("js/jquery-1.11.0.min.js")}}
	{{HTML::script("vendor/bootstrap-3.2.0/js/bootstrap.min.js")}}
	{{HTML::script("js/jquery.cookie.js")}}
	{{HTML::script("js/front.js")}}

	
</body>
</html>