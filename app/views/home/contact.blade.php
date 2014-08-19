@extends("layouts.master")
@section("head")

@stop
@section("content")
    <div id="content">
		<div class="container">

		    <div class="col-md-12">
			<ul class="breadcrumb">

			    <li><a href="{{URL::to("contact")}}">Home</a></li>
			    <li>Contact</li>
			</ul>



			<div class="box text-center">

			    <div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				    <h1>Contact</h1>

				   {{$contact_lead}}

				</div>
			    </div>
			</div>

			<div class="box" id="contact">
			    <div class="row">
				<div class="col-sm-4">
				    <h3><i class="fa fa-map-marker"></i> Address</h3>
				  
					    {{$address}}
					
				</div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
				    <h3><i class="fa fa-phone"></i> Phone</h3>
				    	{{$phone}}
				</div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
				    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
				    <p class="text-muted">Please feel free to write an email to us.</p>
				    <ul>
					<li><strong><a href="mailto:info@allen-bg.eu">info@allen-bg.eu</a></strong></li>
				    </ul>
				</div><!-- /.col-sm-4 -->			
			    </div><!-- /.row -->

			    <hr>

			   
			    <hr>
			    <h2 class="text-center">Contact form</h2>

			    {{Form::open()}}
				<div class="row">
				    <div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-6">
					    <div class="form-group">
						<label for="firstname">Firstname</label>
						<input type="text" class="form-control" id="firstname">
					    </div>
					</div>
					<div class="col-sm-6">
					    <div class="form-group">
						<label for="lastname">Lastname</label>
						<input type="text" class="form-control" id="lastname">
					    </div>
					</div>
					<div class="col-sm-6">
					    <div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email">
					    </div>
					</div>
					<div class="col-sm-6">
					    <div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" class="form-control" id="subject">
					    </div>
					</div>	
					<div class="col-sm-12">
					    <div class="form-group">
						<label for="message">Message</label>
						<textarea id="message" class="form-control"></textarea>
					    </div>
					</div>

					<div class="col-sm-12 text-center">
					    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

					</div>
				    </div>
				</div> <!-- /.row -->
			    {{Form::close()}}


			</div> <!-- /#contact -->
		    </div>

		</div> <!-- /.container -->
	    </div> <!-- /#content -->
@stop