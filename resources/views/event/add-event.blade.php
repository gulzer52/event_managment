@extends('layout.default')

@section('content')
<h1>Add Event</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <br />
        @if(Session::has('eventAded'))
          <div class="alert alert-success" role="alert">
            {{Session::get('eventAded')}}
          </div>
        @endif
        <form method="post" action="{{url('/admin/event-store')}}" class="form-horizontal form-label-left">
        	@csrf
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Event Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancel</button>
			  <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection