@extends('layout.index')

@section('title')  @endsection
@section('description')  @endsection
@section('keywords')  @endsection
@section('robots')  @endsection
@section('url')  @endsection

@section('content')

@include('layout.header_page')

<div class="form-sign profile" style="background: url(images/slider/notgeneric_bg3.jpg);">
	<div class="form">
		<div class="accordion text-left">
			<button type="button" class="btn btn-xs mr-3"><i class="icon-check"> </i> Đã đọc tất cả</button>
			<button type="button" class="btn btn-xs btn-pinterest"><i class="icon-trash-2"></i> Xóa tất cả</button>
			<hr>
			<div class="ac-item acctive">
				<h5 class="ac-title">Before you get started</h5>
				<div class="ac-content" style="display: none;">
					<p>A wonderful serenity has taken possession of my entire soul, like these sweet
					mornings of spring which I enjoy with my whole heart.</p>
					<p>I am alone, and feel the charm of existence in this spot, which was created for
					the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
					exquisite sense of mere tranquil existence, that I neglect my talents. I should
					be incapable of drawing a single stroke at the present moment; and yet I feel
					that I never was a greater artist than now. </p>
					<div class="text-right">
						<span><i class="icon-calendar"></i> 20/2/2022</span>
						<button type="button" class="btn btn-xs btn-pinterest ml-3"><i class="icon-trash-2"></i>Xóa</button>
					</div>
				</div>
			</div>
			<div class="ac-item acctive">
				<h5 class="ac-title">Before you get started</h5>
				<div class="ac-content" style="display: none;">
					<p>A wonderful serenity has taken possession of my entire soul, like these sweet
					mornings of spring which I enjoy with my whole heart.</p>
					<p>I am alone, and feel the charm of existence in this spot, which was created for
					the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
					exquisite sense of mere tranquil existence, that I neglect my talents. I should
					be incapable of drawing a single stroke at the present moment; and yet I feel
					that I never was a greater artist than now. </p>
					<div class="text-right">
						<span><i class="icon-calendar"></i> 20/2/2022</span>
						<button type="button" class="btn btn-xs btn-pinterest ml-3"><i class="icon-trash-2"></i>Xóa</button>
					</div>
				</div>
			</div>
			<div class="ac-item acctive">
				<h5 class="ac-title">Before you get started</h5>
				<div class="ac-content" style="display: none;">
					<p>A wonderful serenity has taken possession of my entire soul, like these sweet
					mornings of spring which I enjoy with my whole heart.</p>
					<p>I am alone, and feel the charm of existence in this spot, which was created for
					the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
					exquisite sense of mere tranquil existence, that I neglect my talents. I should
					be incapable of drawing a single stroke at the present moment; and yet I feel
					that I never was a greater artist than now. </p>
					<div class="text-right">
						<span><i class="icon-calendar"></i> 20/2/2022</span>
						<button type="button" class="btn btn-xs btn-pinterest ml-3"><i class="icon-trash-2"></i>Xóa</button>
					</div>
				</div>
			</div>

			<div class="ac-item acctive">
				<h5 class="ac-title">Before you get started</h5>
				<div class="ac-content" style="display: none;">
					<p>A wonderful serenity has taken possession of my entire soul, like these sweet
					mornings of spring which I enjoy with my whole heart.</p>
					<p>I am alone, and feel the charm of existence in this spot, which was created for
					the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
					exquisite sense of mere tranquil existence, that I neglect my talents. I should
					be incapable of drawing a single stroke at the present moment; and yet I feel
					that I never was a greater artist than now. </p>
					<div class="text-right">
						<span><i class="icon-calendar"></i> 20/2/2022</span>
						<button type="button" class="btn btn-xs btn-pinterest ml-3"><i class="icon-trash-2"></i>Xóa</button>
					</div>
				</div>
			</div>

			
			
		
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  	$('h5.ac-title').click(function(e){
	  	$(this).parent().removeClass('acctive');
	});
});
</script>
@endsection