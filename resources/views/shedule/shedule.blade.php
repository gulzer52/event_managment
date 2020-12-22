@extends('layout.default')

@section('content')
<h1>Add Shedule</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <br />
        <form method="post" action="{{url('/admin/shedule-store')}}" class="form-horizontal form-label-left">
        	@csrf
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Speaker Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="date-picker form-control col-md-7 col-xs-12 speakers" name="speaker_id">
                <option>Select Speaker</option>
                 @foreach($speakers as $speaker)
                <option value="{{$speaker->id}}">{{$speaker->sname}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Event Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="date-picker form-control col-md-7 col-xs-12 evenets" name="event_id">
                <option>Select Event</option>
                 @foreach($events as $event)
                <option value="{{$event->id}}">{{$event->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Start Time">Start Time<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="time" id="startt" name="startt" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="End Time">End Time<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="time" id="endt" name="endt" required="required" class="form-control col-md-7 col-xs-12">
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
