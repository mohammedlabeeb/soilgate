@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        Add New Gate
        
      </h1>

      <section class="content">
          <div class="row">
          <div class="col-sm-12">
            <div class="box box-info">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ url('/gates/'.$data['gate_id'].'/addnew/sensor') }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="action" value="create" />
              <input type="hidden" name="gate_id" value="{{ $data['gate_id'] }}" />
                <!-- text input -->
                <div class="form-group">
                  <label>Device ID</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="device_id">
                </div>
                <div class="form-group">
                  <label>Device Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name">
                </div>
                <div class="form-group">
                  <label>Device Type</label>

                <select name="type" class="form-control" >
                  
                    <option value="THG">THG</option>
                </select>
                </div>

                <button type="submit" class="btn btn-info pull-right btn-lg">Add</button>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>

      </section>
      
</section>
@endsection