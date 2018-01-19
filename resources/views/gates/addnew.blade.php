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
              <form role="form" action="{{ url('/gates/addnew') }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="action" value="create" />
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <!-- text input -->
                <div class="form-group">
                  <label>Gate Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Gate Information</label>
                  <textarea class="form-control textarea" rows="3" placeholder="Enter ..." name="info"></textarea>
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