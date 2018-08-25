@extends('index')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm Theo Loại</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($type_products as $t)
							<li><a href="{{route('loai-san-pham',$t->id)}}">{{$t->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản Phẩm {{$type_sp->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($type_product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($type_product as $type)
								<div class="col-sm-4">
									<div class="single-item">
										@if($type->promotion_price !=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$type->id)}}"><img src="source/image/product/{{$type->image}}" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$type->name}}</p>
											<p class="single-item-price">
												@if($type->promotion_price == 0)
													<span class="flash-sale">{{$type->unit_price}} đồng</span>
												@else 
													<span class="flash-del">{{$type->unit_price}} đồng</span>
													<span class="flash-sale">{{$type->promotion_price}} đồng</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Chi Tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phầm Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy {{count($other_product)}} sản Phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($other_product as $other)
								<div class="col-sm-4">
									<div class="single-item">
										@if($other->promotion_price !=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$other->id)}}"><img src="source/image/product/{{$other->image}}" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$other->name}}</p>
											<p class="single-item-price">
												@if($other->promotion_price == 0)
													<span class="flash-sale">{{$other->unit_price}} đồng</span>
												@else 
													<span class="flash-del">{{$other->unit_price}} đồng</span>
													<span class="flash-sale">{{$other->promotion_price}} đồng</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Chi Tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row text-center">
								{{$other_product->links()}}
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection