@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')
<div class="breadcrumb_container " data-depth="4">
	<div class="container">
		<nav data-depth="4" class="breadcrumb">
			<ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="">
						<span itemprop="name">Home</span>
					</a>
					<meta itemprop="position" content="1">
				</li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="">
						<span itemprop="name">Electronics</span>
					</a>
					<meta itemprop="position" content="2">
				</li>
			</ol>
		</nav>
	</div>
</div>

<div id="wrapper">
<div class="container">
<div class="row">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
	<div id="search_filters_wrapper" class="hidden-sm-down _mPS2id-t">
		<div id="search_filters">
			<p class="text-uppercase h6 hidden-sm-down">Filter By</p>
			<section class="facet clearfix">
			<p class="h6 facet-title hidden-sm-down">Size</p>
			<ul id="facet_81558" class="collapse">
			<li><label><input type="checkbox"> Màu vàng </li>
			<li><label><input type="checkbox"> Màu vàng </li>
			</ul>
			</section>
		</div>
	</div>

	<div id="tags_block">
		<h2>tags</h2>
		<ul class="tags_block">
			<li><a href="" class="tag_level1 first_item">Electronics</a></li>
			<li><a href="" class="tag_level1 item"> Audio &amp; Video</a></li>
		</ul>
	</div>

	<div class="advertising-block">
		<a href="http://www.prestashop.com/" title="PrestaShop"><img src="http://demo2.posthemes.com/pos_rozer/modules/ps_advertising/img/advertising-s1.jpg" alt="PrestaShop" title="PrestaShop"></a>
	</div>
</div>


<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
<section id="main">

<section id="products-list">
<div id="">
<div id="js-product-list-top" class=" products-selection">
<div class="row">
<div class="col-md-6 total-products">
<ul class="display">
<li id="grid" class="selected"> <i class="fa fa-th show_grid"></i></li>
<li id="list"> <i class="fa fa-list show_list"></i></li>
</ul>
<p class="hidden-sm-down">There are 17 products.</p>
</div>
<!-- <div class="col-md-6">
<div class="row sort-by-row">
<span class="col-sm-3 col-md-3 hidden-sm-down sort-by">Sort by:</span>
<div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
<button class="btn-unstyle select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Relevance <i class="material-icons float-xs-right"></i>
</button>
<div class="dropdown-menu">
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;order=product.position.asc" class="select-list current js-search-link">
Relevance
</a>
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;order=product.name.asc" class="select-list js-search-link">
Name, A to Z
</a>
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;order=product.name.desc" class="select-list js-search-link">
Name, Z to A
</a>
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;order=product.price.asc" class="select-list js-search-link">
Price, low to high
</a>
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;order=product.price.desc" class="select-list js-search-link">
Price, high to low
</a>
</div>
</div>
<div class="col-sm-6 col-xs-4 hidden-md-up filter-button">
<button id="search_filter_toggler" class="btn btn-secondary _mPS2id-h" href="#search_filters_wrapper">
Filter
</button>
</div>
</div>
</div> -->
</div>
</div>
</div>

<div>
<div id="js-product-list" data-cate="2" data-type="0" data-list="">
<div class="row product_content grid ">
@foreach($product as $val)
<div class="item-product product_per_4 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="16" data-id-product-attribute="101" itemscope="" itemtype="http://schema.org/Product" style="min-height: 178px;">
	<div class="img_block">
		<a href="#" class="thumbnail product-thumbnail">
		<img class="first-image " src="data/product/{{$val->img}}" alt="{{$val->name}}" data-full-size-image-url="data/product/{{$val->img}}">
		</a>
		<ul class="product-flag">
		<!-- <li class="discount"><span>-20%</span></li> -->
		<li class="new" style="top: 50px;"><span>New</span></li>
		</ul>
	</div>

<div class="product_desc">
<div class="inner_desc">
	<div class="manufacturer"><a href="">{{$val->name}}</a></div>
	<h3 itemprop="name"><a href="http://demo2.posthemes.com/pos_rozer/en/electronics/16-101-juicy-couture-juicy-quilted-terry-track-jacket-2.html#/1-size-s" class="product_name " title="Juicy Couture Juicy Quilted Terry Track Jacket 2">Juicy Couture Juicy Quilted Terry Track Jacket 2</a></h3>
	<div class="product-price-and-shipping">
	<span class="sr-only">Regular price</span>
	<span class="regular-price">$35.90</span>
	<span class="sr-only">Price</span>
	<span itemprop="price" class="price price-sale">$28.72</span>
	<span class="discount-percentage discount-product" style="top: 10px;">-20%</span>
	</div>
	<ul class="add-to-links">
		<li class="cart">
		<div class="product-add-to-cart">
		<form action="http://demo2.posthemes.com/pos_rozer/en/cart" method="post" class="add-to-cart-or-refresh">
		<button class="button ajax_add_to_cart_button add-to-cart btn-default" title="Add to cart" data-button-action="add-to-cart" type="submit">
		<i class="fa fa-shopping-cart"></i> Add to cart
		</button>
		</form>
		</div>
		</li>
		<li>
		<a class="addToWishlist wishlistProd_16" title="Add to wishlist" href="#" data-rel="16" onclick="WishlistCart('wishlist_block_list', 'add', '16', false, 1); return false;">
		Add to wishlist
		</a>
		</li>
		<li class="compare">
		<a href="#" class="poscompare-add compare-button js-poscompare-add" data-id_product="16" onclick="posCompare.addCompare($(this),16); return false;" title="Add to compare"><span>Add to compare</span></a>
		</li>
	</ul>
</div>

<div class="availability">
	<div class="availability-list in-stock">Availability: <span>300 In Stock</span></div>
</div>

<div class="product-desc" itemprop="description">
	<ul><li>
	<div>Score extra points when it comes to your sporty look with the Juicy Couture™ Juicy Quilted Terry Track Jacket.</div>
	</li>
	<li>
	<div>Soft terry construction in a quilted design.</div>
	</li>
	<li>
	<div>Front zipper closure.</div>
	</li>
	<li>
	<div>61% cotton, 39% polyester;<br>Lining: 58% cotton, 42% polyester.</div>
	</li>
	</ul>
</div>

<div class="variant-links">
	<div class="variant-links">
		<a href="" class="color" title="Grey" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></a>
		<a href="" class="color" title="Camel" style="background-color: #C19A6B"><span class="sr-only">Camel</span></a>
		<span class="js-count count"></span>
	</div>
</div>

</div>
</article>
</div>
@endforeach

</div>
<nav class="pagination">
<ul class="page-list clearfix text-sm-center">
<li class="current">
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29" class="disabled js-search-link">
1
</a>
</li>
<li>
<a rel="nofollow" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;page=2" class="js-search-link">
2
</a>
</li>
<li>
<a rel="next" href="http://demo2.posthemes.com/pos_rozer/en/80-televisions?q=Price-%24-9-29&amp;page=2" class="next js-search-link">
Next<i class="material-icons"></i>
</a>
</li>
</ul>
</nav>
</div>
</div>
<div id="js-product-list-bottom">
<div id="js-product-list-bottom"></div>
</div>
</section>
</section>
</div>
</div>
</div>
</div>

@endsection