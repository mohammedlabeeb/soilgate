@extends('layouts.admin')

@section('content')
<section class="content-header">
      
<section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">My Gates</h3>
              <span class="pull-right"><a href="{{ url('/gates/addnew') }}" class="btn btn-block btn-primary"> Add New</a></span>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            <div class="alert alert-warning" style="    text-align: center;    font-size: 15px;">
              Here you can manage your SoilGates create or customize your cultivation or tillage give them name etc
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
                  <th>Gate ID</th>
                  <th>Gate Name</th>
                  <th>No. Devices</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                

                @foreach($data['gates'] as $row) 
				<tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}} </td>
                  <td>Win 95+</td>
                  <td> <a href="{{ url('gates/edit/'.$row->id)}}" class="btn" data-toggle="tooltip" data-original-title="clicking here you can edit name and description of your cultivation"><i class="fa fa-edit"></i></a>
                  	<a href="{{ url('gates/'.$row->id.'/view/sensors/')}}" class="btn" data-toggle="tooltip" data-original-title="clicking here you can add new devices to this Soilgate"><i class="fa fa-plus"></i></a>
                  	<a href="{{ url('gates/delete/'.$row->id)}}" class="btn btn-trash" data-toggle="tooltip" data-original-title="clicking here you will delete your gate and all relative data"><i class="fa fa-trash"></i></a>
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
    </section>
    <!-- /.content -->
    <div id="myModal" class="modal modal-danger">
    <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                
                  
                <h4 class="modal-title">Confirm your action?</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete this Soilgate and all the associated data (Warning all the node measure history will be lost)</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" >No</button>
                <button type="button" class="btn btn-outline" id="btnYes">Yes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
</div>



</section>
@endsection