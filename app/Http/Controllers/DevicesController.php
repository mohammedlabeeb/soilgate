<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Form;
use DB;
use App\Gates;
use App\Devices;
use App\Devicelogs;
use Auth;

class DevicesController extends Controller
{
   
   public function index($gate_id ,Request $request) {

        if (Auth::check() && Auth::user()->role == 'customer') {
                 
            $devices = Devices::where('gate_id',$gate_id)->get();
            $gates = Gates::where('id',$gate_id)->first();
            $data['gate_name'] = $gates->name;
            $data['devices'] = $devices;
            $data['gate_id'] = $gate_id;

            return view('devices.list')->with('data',$data);
        } else {
            return view('errors.expired');
        }
    }

     public function addnew($gate_id ,Request $request) {
    	if (Auth::check() && Auth::user()->role == 'customer') {
    			 
    		if(!empty($request) && $request->input('action') == 'create') {
    			$input = $request->all();
    			$gates = Devices::create($input);
    		}else {
    			$data['gate_id'] = $gate_id;
    			return view('devices.addnew')->with('data', $data);
    		}

    		return redirect('/gates/'.$gate_id.'/view/sensors');
    	} else {
    		return view('errors.expired');
    	}
    }

    public function edit($device_id ,Request $request) {
        if (Auth::check() && Auth::user()->role == 'customer') {
                 
            if(!empty($request) && $request->input('action') == 'update') {
                $input = $request->all();
                unset($input['action']);
                unset($input['_token']);
                unset($input['submit']);
                unset($input['_wysihtml5_mode']);
                $dbdata = Devices::where('id',$device_id)->update($input);
                $request->session()->flash('alert-success', 'Devices was successfully edited!');
                return redirect('/device/edit/'.$device_id);
            }else {
                $dbdata = Devices::where('id',$device_id)->first();
                $data['dbdata'] = $dbdata;
                $data['id'] = $device_id;
                
                return view('devices.edit')->with('data' , $data);
            }

            
        } else {
            return view('errors.expired');
        }
    }

    public function delete($gate_id , $device_id , Request $request) {

        if (Auth::check() && Auth::user()->role == 'customer') {
                 
            
                $dbdata = Devices::where('id',$device_id)->delete();
               
                $request->session()->flash('alert-success', 'Device Deleted successfully!');
                return redirect('/gates/'.$gate_id.'/view/sensors');
            

            
        } else {
            return view('errors.expired');
        }
    }

    public function addlog($device_id ,Request $request) {
        
            $device = Devices::where('device_id',$device_id)->first();
           
            if($device) {
                $input = $request->all();
                $input['device_id'] = $device_id;
                $gates = Devicelogs::create($input);
                return 'true';
           
            } else {
                return 'false';
            }
       
    }

    public function viewlog($device_id , Request $request) {

        
        if (Auth::check() && Auth::user()->role == 'customer') {
            $logdata = Devicelogs::where('device_id',$device_id)->get();

            $mapdata = DB::table("devicelogs")->select('lat','long','temprature','humidity','updated_at')
                                 ->where('device_id',$device_id)
                                 ->groupBy('lat','long')
                                 ->get();
            
            $data['logdata'] = $logdata;
            $data['mapdata'] = $mapdata;
            
            //var_dump($data['logdata']);
            return view('devices.viewlog')->with('data' , $data);

        } else {
            return view('errors.expired');
        }
    }
}
