@extends('admin.layout.index')
@section('product') menu-item-active @endsection
@section('content')
@include('admin.errors.alerts')
<form id="validateForm" action="admin/product/<?php
if(isset($data)){
    if(isset($double)) echo 'add';
    else echo 'edit/'.$data->id;
}else{ echo 'add'; }
?>" method="POST" enctype="multipart/form-data" id="target">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="text-right mb-3">
    <button type="button" onclick="goBack()" class="btn-warning mr-2"><i class="fas fa-arrow-left"></i> Back</button>
    <button type="reset" class="btn-danger mr-2"><i class="fas fa-sync"></i> Reset</button>
    <button type="submit" class="btn-success"><i class="far fa-save"></i> Save & back</button>
    <!-- <button type="button" id="submit" class="btn-success"><i class="far fa-save"></i> Save</button> -->
</div>
<div class="row">
    <div class="col-xl-9 col-lg-9">
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin</h6>
                <!-- <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="display: flex;">Tên sản phẩm</label> 
                            <input value="{{ isset($data) ? $data->name : '' }}{{old('name')}}" name="name" placeholder="Name" type="text" class="form-control">
                            {!! isset($data) ? '
                            <input value="'.$data->slug.'" name="slug" placeholder="slug" type="text" class="slug">
                            ' : '' !!}
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="display: flex;">Tỉnh thành</label> 
                            <select name="province_id" class="form-control select2" id="province">
                                <option value="">...</option>
                                @foreach($province as $val)
                                <option <?php //if(isset($data) && $val->id==$data->product->province_id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="display: flex;">Quận huyện</label> 
                            <select name="district_id" class="form-control select2" id="district">
                                <option value="">...</option>
                                @if(isset($data))
                                @foreach($district as $val)
                                <option <?php //if(isset($data) && $val->id==$data->product->district_id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="display: flex;">Pường xã</label> 
                            <select name="ward_id" class="form-control select2" id="ward">
                                <option value="">...</option>
                                @if(isset($data))
                                @foreach($ward as $val)
                                <option <?php //if(isset($data) && $val->id==$data->product->ward_id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="display: flex;">Đường</label> 
                            <select name="street_id" class="form-control select2" id="street">
                                <option value="">...</option>
                                @if(isset($data))
                                @foreach($street as $val)
                                <option <?php //if(isset($data) && $val->id==$data->product->street_id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label style="display: flex;">Địa chỉ</label> 
                            <input value="{{ isset($data) ? $data->address : '' }}{{old('address')}}" name="address" placeholder="..." type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <textarea rows="3" name="detail" class="form-control">{{ isset($data) ? $data->detail : '' }}</textarea>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="tab">
                            <button type="button" class="tablinks active" onclick="openCity(event, 'London')">Thông số kỹ thuật</button>
                            <button type="button" class="tablinks" onclick="openCity(event, 'Paris')">Nội dung chi tết</button>
                        </div>
                        <div id="London" class="tabcontent" style="display: block;">
                            <textarea name="content" class="form-control ckeditor">{{ isset($data) ? $data->content : '' }}{{old('content')}}</textarea>
                        </div>
                        <div id="Paris" class="tabcontent">
                            <textarea name="detail" class="form-control ckeditor1" id="ckeditor1">{{ isset($data) ? $data->detail : '' }}{{old('detail')}}</textarea>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label>Tab</label>
                    </div>
                    <div class="col-md-7">
                        <label>Tiêu đề</label>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row" id="load_html_section">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control input_section" type="text" value="Tổng quan" name="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input class="form-control input_section" type="text" value="Tổng quan dự án vinhomes smart city" name="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button id="edit_section" type="button" class="button_section mr-2" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-edit" aria-hidden="true"></i></button>
                        <button id="del_section" type="button" class="button_section" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="far fa-file-alt"></i> Thêm</button>
            </div>
        </div>



        @include('admin.layout.seooption')
    </div>
    <div class="col-xl-3 col-lg-3">
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tùy chọn</h6>
            </div>
            <div class="card-body">
                <div class="form-group" style="position: relative;">
                    <label>Danh mục</label>
                    <select name='category_id' class="form-control select2">
                        <option value="">-- Select --</option>
                        @if(isset($data))
                        <?php addeditcat ($category,0, $str='',$data['category_id']) ?>
                        @else
                        <?php addeditcat ($category,0,$str='',old('parent')); ?>
                        @endif
                    </select>
                </div>

                <!-- <div class="form-group">
                    <div class="category">
                        <ul>
                            @foreach($category as $val)
                            <li><label> <input <?php //if(isset($data) && in_array($val->sku, explode(',',$data->category_sku))){echo "checked";} ?> type="checkbox" name="category_sku[]"  value="{{$val->sku}}"> &nbsp; {{$val->name}} </label> </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach($category as $val)
                            <li class="default"><label class="subcat"> default &nbsp; <input <?php //if(isset($data) && $data->category_id == $val->id){echo "checked";} ?> type="radio" name="category_id" value="{{$val->id}}"></label></li>
                            @endforeach
                        </ul>
                    </div>
                </div> -->

                <!-- <div class="form-group">
                    <label>Màu sắc</label>
                    <select name='mausac[]' class="form-control select2">
                        <option value=""></option>
                        @foreach($mausac as $val)
                        <option <?php //if(isset($data) && in_array($val->id, explode(',',$data->product->mausac_id))){echo 'selected';} ?> value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                    </select>
                </div> -->
                
                <!-- <div class="form-group" style="position: relative;">
                    <label>Number</label>
                    <input value="{{ isset($data->product->number) ? $data->product->number : '' }}" type="text" name="number" class="form-control" placeholder="...">
                </div> -->

                <div class="form-group" style="position: relative;">
                    <label>Giá bán</label>
                    <input class="form-control price" type="text" name="price" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="{{ isset($data->product->price) ? $data->product->price : '' }}" data-type="currency" placeholder="...">
                </div>
                
                <div class="form-group">
                    <label>Giá niêm yết</label>
                    <input class="form-control oldprice" type="text" name="oldprice" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="{{ isset($data->product->oldprice) ? $data->product->oldprice : '' }}" data-type="currency" placeholder="...">
                </div>
                
                <!-- <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <input value="{{ isset($data->product->saleoff) ? $data->product->saleoff : '' }}" type="text" name="saleoff" class="form-control" placeholder="...">
                </div> -->
                <div class="view_gia">
                    <div><span class="gia"></span></div>
                    <div><span class="gia_niem_yet"></span></div>
                </div>
                <style type="text/css">
                    .view_gia{display: flex;align-items: center;}
                    .view_gia .gia{font-size: 1.3rem; font-weight: bold;}
                    .view_gia .gia_niem_yet{text-decoration: line-through;}
                    .view_gia div{margin-left: 10px}
                </style>
            </div>
        </div>
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ảnh đại diện</h6>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="{{ isset($data) ? 'data/product/300/'.$data->img : 'data/no_image.jpg' }}" />
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Chọn nhiều ảnh</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="file" name="imgdetail[]" multiple class="form-control">
                    <p>Nhấn giữ <i style="color: red">Ctrl</i> để chọn nhiều ảnh !</p>
                </div>
            </div>
            @if(isset($data))
            <div class="card-body">
                <div class="row detail-img">
                    @foreach($data->images as $val)
                    <div class="col-md-6" id="detail_img">
                        <img src="data/product/80/{{$val->img}}">
                        <button type="button" id="del_img_detail"> Xóa ảnh </button>
                        <input type="hidden" name="id_img_detail" id="id_img_detail" value="{{$val->id}}" />
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        
    </div>
</div>
</form>



<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<form id="add_section">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" id="data_add_section">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Thêm</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row" >
<div class="col-md-4">
<div class="form-group">
<label>Tab</label>
<input name="tab_section" type="text" class="form-control" name="">
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<label>Tiêu đề</label>
<input id="heading" type="text" class="form-control" name="">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Content</label>
<textarea name="content_section" class="form-control ckeditor" id="ckeditor"></textarea>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
<label>Hình ảnh</label>
<input multiple type="file" class="form-control" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Cách hiển thị</label>
<select class="form-control">
<option>adasd</option>
<option>adasd</option>
<option>adasd</option>
</select>
</div>
</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button id="save_section" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
</div>
</div>
</div>
</form>
</div>




<style type="text/css">
    /*.cke_contents{height: 350px !important;}*/
    /* The Modal (background) */
    .button_section{
        background: none; border: 2px solid #fff; border-radius: 5px;
    }
    .button_section:hover{
        border: 2px solid #ddd; border-radius: 5px;
    }
    .input_section{
        border: none;
        border-bottom: 1px solid #ddd;
        width: 100%;
        border-radius: 0px;
        padding-left: 0px;
    }
    .input_section:focus{
        box-shadow: none;
    }
</style>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

@endsection

@section('function')
<?php 
    function addeditcat ($data, $parent=0, $str='',$select=0)
    {
        foreach ($data as $value) {
            if ($value['parent'] == $parent) {
                if($select != 0 && $value['id'] == $select )
                { ?>
                    <option value="<?php echo $value['id']; ?>" selected> <?php echo $str.$value['name']; ?> </option>
                <?php } else { ?>
                    <option value="<?php echo $value['id']; ?>" > <?php echo $str.$value['name']; ?> </option>
                <?php }
                
                addeditcat ($data, $value['id'], $str.'__',$select);
            }
        }
    }
?>
@endsection




