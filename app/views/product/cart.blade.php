@extends("layouts.master")
@section("head")

@stop
@section("content")
<div id="content">
		<div class="container">

		    <div class="col-md-12">
			<ul class="breadcrumb">

			    <li><a href="{{URL::to("/")}}">Home</a></li>
			    <li>Shopping cart</li>
			</ul>


			<div class="box text-center">

			    <div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				    <h1>Shopping cart</h1>
				    <p class="text-muted">You currently have 3 item(s) in your cart.</p>
				</div>
			    </div>
			</div>

		    </div>

		    <div class="col-md-9 clearfix" id="basket">

			<div class="box">

			    <form method="post" action="{{URL::to("checkout1")}}">

				<div class="table-responsive">
				    <table class="table">
					<thead>
					    <tr>
						<th colspan="2">Product</th>
						<th>Quantity</th>
						<th>Unit price</th>
						<th>Discount</th>
						<th colspan="2">Total</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
						<td><a href="{{URL::to("cart")}}">{{HTML::image("images/demo/detailsquare.jpg","White Blouse Armani")}}</a></td>
						<td><a href="{{URL::to("cart")}}">White Blouse Armani</a></td>
						<td><input type="number" value="2" class="form-control"></td>
						<td>$123.00</td>
						<td>$0.00</td>
						<td>$246.00</td>
						<td><a href="{{URL::to("cart")}}"><i class="fa fa-trash-o"></i></a></td>
					    </tr>
					    <tr>
						<td><a href="{{URL::to("cart")}}">{{HTML::image("images/demo/basketsquare.jpg","Black Blouse Armani")}}</a></td>
						<td><a href="{{URL::to("cart")}}">Black Blouse Armani</a></td>
						<td><input type="number" value="1" class="form-control"></td>
						<td>$200.00</td>
						<td>$0.00</td>
						<td>$200.00</td>
						<td><a href="{{URL::to("cart")}}"><i class="fa fa-trash-o"></i></a></td>
					    </tr>					
					</tbody>
					<tfoot>
					    <tr>
						<th colspan="5">Total</th>
						<th colspan="2">$446.00</th>
					    </tr>	
					</tfoot>
				    </table>

				</div> <!-- /.table-responsive -->	

				<div class="box-footer">
				    <div class="pull-left">
					<a href="{{URL::to("category")}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
				    </div>
				    <div class="pull-right">
					<button class="btn btn-default"><i class="fa fa-refresh"></i> Update cart</button>
					<button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
				    </div>
				</div>

			    </form>

			</div> <!-- /.box -->

			<div class="row">
			    <div class="col-md-3">
				<div class="box">
				    <h3>You may also like these products</h3>
				</div>
			    </div>

			    <div class="col-md-3">
				<div class="product">
				    <div class="image" style="height: 184px;">
					<a href="{{URL::to("detail")}}">
						{{HTML::image("images/demo/product2.jpg","",array("class"=>"img-responsive image1"))}}
					</a>
				    </div>
				    <div class="text">
					<h3><a href="{{URL::to("detail")}}">Fur coat</a></h3>
					<p class="price">$143</p>

				    </div>
				</div> <!-- /.product -->
			    </div>

			    <div class="col-md-3">
				<div class="product">
				    <div class="image" style="height: 184px;">
					<a href="{{URL::to("detail")}}">
						{{HTML::image("images/demo/product3.jpg","",array("class"=>"img-responsive image1"))}}
					</a>
				    </div>
				    <div class="text">
					<h3><a href="{{URL::to("detail")}}">Fur coat</a></h3>
					<p class="price">$143</p>
				    </div>
				</div> <!-- /.product -->
			    </div>

			    <div class="col-md-3">
				<div class="product">
				    <div class="image" style="height: 184px;">
					<a href="{{URL::to("detail")}}">
					    {{HTML::image("images/demo/product1.jpg","",array("class"=>"img-responsive image1"))}}
					</a>
				    </div>
				    <div class="text">
					<h3><a href="{{URL::to("detail")}}">Fur coat</a></h3>
					<p class="price">$143</p>
				    </div>
				</div> <!-- /.product -->
			    </div>			    

			</div>

		    </div> <!-- /.col-md-9 -->

		    <div class="col-md-3">
			<div class="box" id="order-summary">
			    <div class="box-header">
				<h3>Order summary</h3>
			    </div>
			    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

			    <div class="table-responsive">
				<table class="table">
				    <tbody>
					<tr>
					    <td>Order subtotal</td>
					    <th>$446.00</th>
					</tr>
					<tr>
					    <td>Shipping and handling</td>
					    <th>$10.00</th>
					</tr>
					<tr>
					    <td>Tax</td>
					    <th>$0.00</th>
					</tr>
					<tr class="total">
					    <td>Total</td>
					    <th>$456.00</th>
					</tr>					
				    </tbody>
				</table>
			    </div>

			</div>			


			<div class="box">
			    <div class="box-header">
				<h4>Coupon code</h4>
			    </div>
			    <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
			    <form>
				<div class="input-group">

				    <input type="text" class="form-control">

				    <span class="input-group-btn">
					<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>
				    </span>
				</div><!-- /input-group -->
			    </form>
			</div>

		    </div><!-- /.col-md-3 -->

		</div> <!-- /.container -->
	    </div> <!-- /#content -->
@stop