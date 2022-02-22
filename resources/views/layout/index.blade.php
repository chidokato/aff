<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="data/favicon.png" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:site_name" content="site_name" />
<meta property="og:images" content="@yield('img')" />
<meta property="og:image" content="@yield('img')" />
<meta property="og:image:alt" content="@yield('title')" />
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<!-- and twitter -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />
<!-- ================= Style ================== --> 
<link href="frontend/css/plugins.css" rel="stylesheet">
<link href="frontend/css/style.css" rel="stylesheet">
<link href="frontend/toc.css" rel="stylesheet">
<!-- ================= js ================== --> 
@yield('css')
{!! $head_setting->codeheader !!}
</head>
@include('layout.function')
<body> 
<div class="body-inner">
@yield('content')
@include('layout.footer')
</div>
{!! $head_setting->codebody !!}
@if(session('Alerts'))
	<script> alert('Thành công'); </script>
@endif
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="frontend/js/jquery.js"></script>
<script src="frontend/js/plugins.js"></script>
<script src="frontend/js/functions.js"></script>

<!-- rateit -->
<script src="frontend/rateit/jquery.rateit.min.js"></script>
<link rel="stylesheet" href="frontend/rateit/rateit.css">
<script type="text/javascript">
	if(INSPIRO.core.rtlStatus()) {
		$('.rateit').wrap('<div style="direction:rtl"></div>');
	}
	//#rateit6
	$("#rateit6").bind('rated', function (event, value) {
		$('#value6').text('You\'ve rated it: ' + value);
	});
	$("#rateit6").bind('reset', function () {
		$('#value6').text('Rating reset');
	});
	$("#rateit6").bind('over', function (event, value) {
		$('#hover6').text('Hovering over: ' + value);
	});
	//#rateit7
	$(function () {
		$('#rateit7').rateit({
			max: 15,
			step: 2,
			backingfld: '#backing7'
		});
	});
	//AJAX Example
	//we bind only to the rateit controls within the products div
	$('#products .rateit').bind('rated reset', function (e) {
		var ri = $(this);
		//if the use pressed reset, it will get value: 0 (to be compatible with the HTML range control), we could check if e.type == 'reset', and then set the value to  null .
		var value = ri.rateit('value');
		var productID = ri.data('productid'); // if the product id was in some hidden field: ri.closest('li').find('input[name="productid"]').val()
		//maybe we want to disable voting?
		ri.rateit('readonly', true);
		$.ajax({
			// url: 'rateit.php', //your server side script
			data: {
				id: productID,
				value: value
			},
			//type: 'POST',
			complete: function (data) {
				INSPIRO.elements.notification("You have rated Product " + productID + " with " + value + " stars. Thank you!", "success")
			},
			/*  error: function (jxhr, msg, err) {
				INSPIRO.elements.notification(msg, "warning");
			}  */
		});
	});
</script>
<!-- rateit -->
@yield('script')
<script src="frontend/toc.js"></script>
</body>
</html>