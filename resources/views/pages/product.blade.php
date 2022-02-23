@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')

@include('layout.header_page')
<section style="padding-top: 40px">
<div class="container">
	<div class="breadcrumb">
	<ul>
		<li><a href="{{asset('')}}">Trang chủ</a></li>
		<li class="active">{{$category->name}}</li>
	</ul>
	</div>
</div>
<div class="container">
<div class="row m-b-20">
<div class="col-lg-6 p-t-10 m-b-20">
<h3 class="m-b-20">{{$category->name}}</h3>
{!! $category->content !!}
</div>
<div class="col-lg-3">
<div class="order-select">
 <h6>Sort by</h6>
<p>Showing 1–12 of 25 results</p>
<form method="get">
<select class="form-control">
<option value="order" selected="selected">Default sorting</option>
<option value="popularity">Sort by popularity</option>
<option value="rating">Sort by average rating</option>
<option value="date">Sort by newness</option>
<option value="price">Sort by price: low to high</option>
<option value="price-desc">Sort by price: high to low</option>
</select>
</form>
</div>
</div>
<div class="col-lg-3">
<div class="order-select">
<h6>Sort by Price</h6>
<p>From 0 - 190$</p>
<form method="get">
<select class="form-control">
<option value="" selected="selected">0$ - 50$</option>
<option value="">51$ - 90$</option>
<option value="">91$ - 120$</option>
<option value="">121$ - 200$</option>
</select>
</form>
</div>
</div>
</div>

<div class="shop">
<div class="grid-layout grid-4-columns grid-loaded" data-item="grid-item" style="margin: 0px -20px -20px 0px; position: relative; height: 957.094px;">

<!-- iteam -->
@foreach($product as $val)
<div class="grid-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
<div class="product">
<div class="product-image">
<a href="#"><img alt="Shop product image!" src="data/product/300/{{$val->img}}"></a>
<!-- <a href="#"><img alt="Shop product image!" src="images/shop/products/10.jpg"></a> -->
<span class="product-new">NEW</span>
<span class="product-wishlist">
	<a id="wishlist" type="button"><i class="fa fa-heart"></i></a>
</span>
<div class="product-overlay">
	<button id="cart" type="button">Thêm vào giỏ hàng</button>
</div>
</div>
<div class="product-description">
<div class="product-category">{{$val->category->name}}</div>
<div class="product-title">
<h3><a href="#">{{$val->name}}</a></h3>
</div>
<div class="product-price"><ins></ins>
</div>
<div class="product-rate">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-half-o"></i>
</div>
<div class="product-reviews"><a href="#">{{ isset($val->product->price) && $val->product->price != '' ? number_format($val->product->price)."đ" : '' }}</a>
</div>
</div>
</div>
</div>
@endforeach
<!-- iteam -->

<div class="grid-loader"></div></div>
<hr>

<ul class="pagination">
<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item active"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">5</a></li>
<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
</ul>

</div>
</div>
</section>

@endsection