<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Form;
use App\Gates;
use App\Devices;
use Auth;


class GatesController extends Controller
{
	 public function __construct()    	{
        $this->middleware('auth');
    }

    public function index(Request $request) {
    	if (Auth::check() && Auth::user()->role == 'customer') {
    			 
    		$gates = Gates::where('user_id',Auth::user()->id)->get();;
    		$data['gates'] = $gates;

    		return view('gates.list')->with('data',$data);
    	} else {
    		return view('errors.expired');
    	}
    }

    public function addnew(Request $request) {
    	if (Auth::check() && Auth::user()->role == 'customer') {
    			 
    		if(!empty($request) && $request->input('action') == 'create') {
    			$input = $request->all();
    			$gates = Gates::create($input);
    		}else {
    			return view('gates.addnew');
    		}

    		return redirect('/gates');
    	} else {
    		return view('errors.expired');
    	}
    }

    public function edit($gate_id , Request $request) {

        if (Auth::check() && Auth::user()->role == 'customer') {
                 
            if(!empty($request) && $request->input('action') == 'update') {
                $input = $request->all();
                unset($input['action']);
                unset($input['_token']);
                unset($input['submit']);
                unset($input['_wysihtml5_mode']);
                $dbdata = Gates::where('id',$gate_id)->update($input);
                $request->session()->flash('alert-success', 'Gate was successfully edited!');
                return redirect('/gates/edit/'.$gate_id);
            }else {
                $dbdata = Gates::where('id',$gate_id)->first();
                $data['dbdata'] = $dbdata;
                $data['gate_id'] = $gate_id;
                return view('gates.edit')->with('data' , $data);
            }

            
        } else {
            return view('errors.expired');
        }
    }

    public function delete($gate_id , Request $request) {

        if (Auth::check() && Auth::user()->role == 'customer') {
                 
            
                $dbdata = Gates::where('id',$gate_id)->delete();
               
                $request->session()->flash('alert-success', 'Gate Deleted successfully!');
                return redirect('/gates');
            

            
        } else {
            return view('errors.expired');
        }
    }

    
}
