@foreach($section_list as $val)
<div class="row" id="section_list">
	<input type="hidden" id="section_id" name="section_id" value="{{ isset($data) ? $val->id : '' }}" />
	<div class="col-md-3" style="display: flex;">
	    <div class="form-group">
	        <input class="form-control input_section" type="text" value="{{$val->number}}" name="">
	    </div>
	    <div class="form-group">
	        <input class="form-control input_section" type="text" value="{{$val->tab_heading}}" name="">
	    </div>
	</div>
	<div class="col-md-7">
	    <div class="form-group">
	        <input class="form-control input_section" type="text" value="{{$val->heading}}" name="">
	    </div>
	</div>
	<div class="col-md-2">
	    <button id="edit_section" type="button" class="button_section mr-2" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-edit" aria-hidden="true"></i></button>
	    <button id="del_section" type="button" class="button_section" ><i class="fas fa-trash-alt"></i></button>
	</div>
</div>
@endforeach
