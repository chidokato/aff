@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')

@include('layout.header_page')

<section class="content background-grey">
<div class="container">
<div class="heading-text heading-section">
<h2>OUR BLOG</h2>
<span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
</div>
<div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item" style="margin: 0px -20px -20px 0px; position: relative; height: 536.203px;">

<div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
<div class="post-item-wrap">
<div class="post-image">
<a href="#">
<img alt="" src="images/blog/12.jpg">
</a>
<span class="post-meta-category"><a href="#">Lifestyle</a></span>
</div>
<div class="post-item-description">
 <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
<span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
Comments</a></span>
<h2><a href="#">Standard post with a single image
</a></h2>
<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
<a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
</div>
</div>
</div>


<div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 376.656px; top: 0px;">
<div class="post-item-wrap">
<div class="post-image">
<a href="#">
<img alt="" src="images/blog/17.jpg">
</a>
<span class="post-meta-category"><a href="#">Science</a></span>
</div>
<div class="post-item-description">
<span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
<span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
Comments</a></span>
<h2><a href="#">Standard post with a single image
</a></h2>
<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
<a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
</div>
</div>
</div>


<div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 753.312px; top: 0px;">
<div class="post-item-wrap">
<div class="post-image">
<a href="#">
<img alt="" src="images/blog/18.jpg">
</a>
<span class="post-meta-category"><a href="#">Science</a></span>
</div>
<div class="post-item-description">
<span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
<span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
Comments</a></span>
<h2><a href="#">Standard post with a single image
</a></h2>
<p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
<a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
</div>
</div>
</div>

<div class="grid-loader"></div></div>
</div>
</section>

@endsection