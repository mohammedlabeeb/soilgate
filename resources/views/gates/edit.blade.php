@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        Edit Gate
        <span class="pull-right"><a href="{{ url('/gates') }}" class="btn btn-block btn-primary"> Backs To Gates List</a></span>
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
            <div class="box-body">
              <form role="form" action="{{ url('/gates/edit/'.$data['gate_id']) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="action" value="update" />
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <!-- text input -->
                <div class="form-group">
                  <label>Gate Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" value="{{ $data['dbdata']->name}}">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Gate Information</label>
                  <textarea class="form-control textarea" rows="3" placeholder="Enter ..." name="info">{{ $data['dbdata']->info}}</textarea>
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