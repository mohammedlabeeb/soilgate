@extends('layouts.admin')

@section('content')
<section class="content-header">
      
<section class="content">
<div class="col-sm-12 col-xs-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Devices on {{$data['gate_name']}} SoilGate</h3>
              <span class="pull-right"><a href="{{ url('/gates/'.$data['gate_id'].'/addnew/sensor') }}" class="btn btn-block btn-primary"> Add New</a></span>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            <div class="alert alert-warning" style="    text-align: center;    font-size: 15px;">
              Here you can associate your devices to the {{$data['gate_name']}} Soilgate
            </div>
            <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div> <!-- end .flash-message -->
          
              <table id="datatable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Device ID</th>
                  <th>Device Name</th>
                  <th>Deveice Type</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                

                @foreach($data['devices'] as $row) 
				<tr>
                  <td>{{$row->device_id}}</td>
                  <td>{{$row->name}} </td>
                  <td>{{$row->type}} </td>
                  
                  <td> <a href="{{ url('device/edit/'.$row->id)}}" class="btn"><i class="fa fa-edit"></i></a>
                  	<a href="{{ url('device/viewlog/'.$row->device_id)}}" class="btn"><i class="fa fa-eye"></i></a>
                  	<a href="{{ url('gate/'.$data['gate_id'].'/device/delete/'.$row->id)}}" class="btn"><i class="fa fa-trash"></i></a>
                  </td>
                 </tr>
                @endforeach  
                
               
                </tbody>
                <tfoot>
                <tr>
                   <th>Sl No</th>
                  <th>Gate Name</th>
                  <th>No. Devices</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
              </div>
           
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
       </div>
    </section>
    <!-- /.content -->
</section>
@endsection