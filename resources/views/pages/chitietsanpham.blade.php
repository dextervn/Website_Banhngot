@extends('index')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					
					<div class="row">
							
						<div class="col-sm-4">
							@if($product->promotion_price !=0)
								<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
							@endif
							<img src="source/image/product/{{$product->image}}" height="250px">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$product->name}}</p>
								<p class="single-item-price">
									@if($product->promotion_price == 0)
										<span class="flash-sale">{{$product->unit_price}} đồng</span>
									@else 
										<span class="flash-del">{{$product->unit_price}} đồng</span>
										<span class="flash-sale">{{$product->promotion_price}} đồng</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>
									{{$product->description}}
								</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>1</option>
									<option value="XS">2</option>
									<option value="XS">3</option>
									<option value="XS">4</option>
									<option value="XS">5</option>
									<option value="XS">6</option>
									<option value="XS">7</option>
									<option value="XS">8</option>
									<option value="XS">9</option>
									<option value="XS">10</option>
									
								</select>
								
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>
								{{$product->description}}
							</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>

						<div class="row">
							@foreach($related as $rel)
							<div class="col-sm-4">
								<div class="single-item">
									@if($rel->promotion_price !=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/product/{{$rel->image}}" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$rel->name}}</p>
										<p class="single-item-price">
											@if($rel->promotion_price == 0)
												<span class="flash-sale">{{$rel->unit_price}} đồng</span>
											@else 
												<span class="flash-del">{{$rel->unit_price}} đồng</span>
												<span class="flash-sale">{{$rel->promotion_price}} đồng</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row text-center">
							{{$related->links()}}
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm khuyến mại</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($sale as $sl)
								<div class="single-item">
									@if($sl->promotion_price !=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="media beta-sales-item">
									
									<a class="pull-left" href="{{route('chi-tiet-san-pham',$sl->id)}}">

										<img src="source/image/product/{{$sl->image}}" height="200px">
									</a>
									<div class="media-body">
											{{$sl->name}}
											@if($sl->promotion_price == 0)
												<span class="flash-sale">{{$sl->unit_price}} đồng</span>
											@else 
												<span class="flash-del">{{$sl->unit_price}} đồng</span>
												<span class="flash-sale">{{$sl->promotion_price}} đồng</span>
											@endif
									</div>
								</div>
								</div>
								
								@endforeach

							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản Phẩm Mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($new as $n)
								<div class="single-item">
									@if($n->promotion_price !=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chi-tiet-san-pham',$n->id)}}">
										<img src="source/image/product/{{$n->image}}" height="100px">
									</a>
									<div class="media-body">
										{{$n->name}}
										@if($n->promotion_price == 0)
												<span class="flash-sale">{{$n->unit_price}} đồng</span>
											@else 
												<span class="flash-del">{{$n->unit_price}} đồng</span>
												<span class="flash-sale">{{$n->promotion_price}} đồng</span>
											@endif
									</div>
								</div>
								</div>
								
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection