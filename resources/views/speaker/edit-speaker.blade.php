@extends('layout.default')

@section('content')
<h1>Edit Event</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <br />
        <form method="post" action="{{url('/admin/update-speaker/'.$speakers->id)}}" enctype="multipart/form-data" class="form-horizontal form-label-left">
        	@csrf
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Speaker Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="title" name="title" value="{{$speakers->title}}" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sname">Speaker Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="sname" name="sname" value="{{$speakers->sname}}" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" value="{{$speakers->email}}" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" name="phone" value="{{$speakers->phone}}" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="file" name="image" required="required" class="form-control col-md-7 col-xs-12" onchange="previewFile(this)">
              <img id="previewImg" alt="profile image" src="{{asset('images')}}/{{$speakers->image}}" style="max-width:130px; margin-top:20px;">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancel</button>
			  <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" name="submit" class="btn btn-success">Update</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<script>
    function previewFile(input){
        var file=$("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection