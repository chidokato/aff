@extends('layout.index')

@section('title'){{ isset($articles->title) ? $articles->title : $articles->name }}@endsection
@section('description'){{$articles->description}}@endsection
@section('keywords'){{$articles->keywords}}@endsection
@section('robots'){{ $articles->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$articles->category->slug.'/'.$articles->slug.'.html'}}@endsection

@section('content')
<div class="text-secondary px-4 py-3 text-center header">
<div class="py-3">
<h1 class="display-5 fw-bold ">{{$articles->name}}</h1>
<!-- <div class="col-lg-8 mx-auto">
<p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
</div> -->
</div>
</div>
<section  class="container">  
<div class="row">
<div class="col-md-3">
<div class="position-sticky" style="top: 4.5rem;">
<h4>Mục lục</h4>
<div id="toc"  ></div>
</div>
</div>
<div class="col-md-9" style="padding-bottom: 50px;">
<nav class="bread" aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{asset('')}}">Trang chủ</a></li>
<li class="breadcrumb-item"><a href="{{$articles->category->slug}}">{{$articles->category->name}}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$articles->name}}</li>
</ol>
</nav>
<div class="row">
  <div class="col-md-8">
    <article class="blog-post" id="contents">
      {!! $articles->content !!}
      <h2>Hỏi đáp</h2>
    </article>
  </div>
  <div class="col-md-4">
    @include('layout.sidebar_news')
  </div>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach($lienquan as $val)
      @include('pages.iteam.news')
    @endforeach
  </div>
</div>
</div>
</div>
</section>
@endsection


@section('css')
<link href="frontend/toc.css" rel="stylesheet">
@endsection


@section('script')
<script src="frontend/toc.js"></script>
@endsection