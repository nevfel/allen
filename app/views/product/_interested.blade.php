			<div class="row">
			    <div class="col-md-3 col-sm-6">
				<div class="box">
				    <h3>You may also like these products</h3>
				</div>
			    </div>
			    @foreach($products as $product)
			    @if($img = $product->uploads()->first())
			    <div class="col-md-3 col-sm-6">
				<div class="product">
				    <div class="image" style="height: 184px;">
					<a href="{{URL::to("product/".$product->slug)}}">
					    {{HTML::image($img->sizeImg( 184, 184 , false ),"",array("class"=>"img-responsive image1"))}}
					</a>
				    </div>
				    <div class="text">
					<h3>{{$product->title}}</h3>
					<p class="price">${{$product->saleprice}}</p>

				    </div>
				</div> <!-- /.product -->
			    </div>
			    @endif
			    @endforeach
			        

			</div>