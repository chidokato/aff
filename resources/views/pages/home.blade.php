@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')


<!------------------- BREADCRUMB ------------------->
<!-- <section class="sec-breadcrumb">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dự án</li>
      </ol>
    </nav>
  </div>
</section> -->
<!------------------- END: BREADCRUMB ------------------->


<!------------------- COVER ------------------->

<section class="sec-cover">
  <img src="frontend/images/cover-recruitment.jpg" alt="" class="mw-100"/>
  <div class="container">
    <div class="cover-content">
      <div class="cover-title">
        <h3><span class="cover-title-filled">Dự án</span><span class="position-relative">Bất động sản</span></h3>
      </div>
      <p>Các dự án hot mới <b>NHÀ Ở NGAY</b></p>
    </div>
  </div>
</section>

<!------------------- END COVER ------------------->

<!------------------- CARD ------------------->
<section class="card-grid project-sec">
  <div class="container">
    <h3 class="text-uppercase title-subpage">Dự án</h3>
    <div class="sort-box">
      <span>có <span class="text-main font-weight-semibold">1.000</span> sản phẩm</span>
      <div class="sort-ct">
        <div class="dropdown">
          <a class="btn ripple-effect dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <span>Hiển thị: Tất cả <i class="icon-down ms-2"></i></span>
          </a>
        
          <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item checked" href="#">Tất cả</a></li>
          <li><a class="dropdown-item" href="#">Chung cư</a></li>
          <li><a class="dropdown-item" href="#">Biệt thự - Liền kề</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <a class="btn ripple-effect dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <span>Sắp xếp theo: giá tăng dần <i class="icon-down ms-2"></i></span>
          </a>
        
          <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item checked" href="#">Giá tăng dần</a></li>
          <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
          <li><a class="dropdown-item" href="#">Mới nhất</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://propzy.vn/tin-tuc/wp-content/uploads/2020/09/nha-dang-the-chap_2909092944.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://propzy.vn/tin-tuc/wp-content/uploads/2020/09/nha-dang-the-chap_2909092944.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://propzy.vn/tin-tuc/wp-content/uploads/2020/09/nha-dang-the-chap_2909092944.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://propzy.vn/tin-tuc/wp-content/uploads/2020/09/nha-dang-the-chap_2909092944.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-s card-s4">
          <span class="hot"><img src="frontend/images/hot-label.png"></span>
          <a href="#">
            <span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
            <span class="cat">Chung cư</span>
            <span class="view-more">Chi tiết</span>
          </a>
          <div class="card-body">
            <div class="card-body-wrap">
              <h5 class="card-title"><a href="#" class="text-truncate">Newtatco Xuân Đỉnh</a></h5>
              <div class="card-info">
                <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price">5,6 tỷ</span></div>
            </div>
          </div>
        </div>
      </div>


      </div>
    <div class="load-more text-center mt-4 pt-2">
      <div class="cta-btn ir">
        <a class="" href="#"><span class="cta-text font-weight-semibold">Xem thêm</span><span class="cta-ico"><i class="icon-down"></i></span></a>
      </div>
    </div>
  </div>
</section>
<!------------------- END CARD ------------------->

@endsection
