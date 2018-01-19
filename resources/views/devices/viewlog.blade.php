@extends('layouts.admin')

@section('content')
<section class="content-header" id="viewlog">
      
<section class="content">
<div class="col-sm-6 col-xs-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Device Logs</h3>
              
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div> <!-- end .flash-message -->
              
              <table id="datatable1" width="100%" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Temprature &deg;C</th>
                  <th>Humidity</th>
                  <th>Date Time</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                
                
                @foreach($data['logdata'] as $row) 
				        <tr>
                  <td>{{$row->temprature}}</td>
                  <td>{{$row->humidity}} </td>
                  <td>{{ date('F d, Y h:m a', strtotime($row->updated_at)) }} </td>
                  
                 
                 </tr>
                @endforeach  
                
               
                </tbody>
                <tfoot>
                <tr>
                   <th>Temprature &deg;C</th>
                  <th>Humidity</th>
                  <th>Date Time</th>
                  
                </tr>
                </tfoot>
              </table>
              </div>
           
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-6 col-xs-12">
          <div id="mapElm" style="height:400px;width: 100%;" ></div>
          </div>
      </div>
      <!-- /.row -->
       </div>
    
      
         
      
    </section>
    <!-- /.content -->
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWbgAIN6l3zJ2KFMBVdHzGJIrmNhrJjdM&callback=initMap" type="text/javascript"></script>
<?php $maprows = array();
           
            foreach($data['mapdata'] as $row) {

                $tString = "'Temprature : ".$row->temprature." Humidity : ".$row->humidity."'";
                $row = array($tString,$row->lat,$row->long);
                $maprows[] = urldecode("[".implode(',',  $row )."]");
            }
            
            $mapdata = implode(",",  $maprows ); ?>
 <script type="text/javascript">

    var locations1 = [
      ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Cronulla Beach', -34.028249, 151.157507, 3],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];
    var locations = [
      <?php echo $mapdata; ?>
    ];

    

    
    window.map = new google.maps.Map(document.getElementById('mapElm'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(3);
        google.maps.event.removeListener(listener);
    });


  </script>
@endsection