@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        Edit Gate
        <span class="pull-right"><a href="{{ url('/gates/'.$data['dbdata']->gate_id.'/view/sensors') }}" class="btn btn-block btn-primary"> Backs To Device List</a></span>
      </h1>

      <section class="content">
          <div class="row">
          <div class="col-sm-12">
          <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div> <!-- end .flash-message -->
            <div class="box box-info">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ url('/device/edit/'.$data['id']) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="action" value="update" />
              <input type="hidden" name="gate_id" value="{{ $data['dbdata']->gate_id }}" />
              <input type="hidden" name="id" value="{{ $data['id'] }}" />
                <!-- text input -->
                <div class="form-group">
                  <label>Device ID</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="device_id" value="{{$data['dbdata']->device_id}}">
                </div>
                <div class="form-group">
                  <label>Device Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" value="{{$data['dbdata']->name}}">
                </div>
                <div class="form-group">
                  <label>Device Type</label>

                <select name="type" class="form-control" >
                  
                    <option value="THG">THG</option>
                </select>
                </div>

                <button type="submit" class="btn btn-info pull-right btn-lg">Update</button>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>

      </section>
      
</section>
@endsection