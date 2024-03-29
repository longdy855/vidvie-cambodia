<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\FlightDescription;
use App\Models\Admin\FlightType;
use App\Models\Admin\FlightNumber;
use App\Models\Admin\FlightTime;
use App\Models\Admin\FlightRoute;
use App\Models\Admin\FlightOrigin;
use App\Models\Admin\FlightDestination;
use App\Models\Admin\Language;
use DB;
use App\user;
use Validator;
use Auth;
use Session;
use Input;
use View;
use Redirect;

class FlightDescriptionController extends Controller {

    public $view_title = "Flight Description";
    public $view_sub_title = "Flight Description List";

    public function __construct()
    {
       $this->middleware('auth');
        //$this->middleware('guest');
       $menu_code = 's53';
       Session::flash('permissionOn_Menu_ID',$menu_code);
    }

    public function index()
    {   
        $data = FlightDescription::all();
        return view('Admin.flight.description.index')
                ->with('data',$data)
                ->with('view_title',$this->view_title)
                ->with('view_sub_title',$this->view_sub_title);
    }

    public function create()
    {   
        $flightType = FlightType::lists('name','id');
        $flightRoute = FlightRoute::lists('name','id');
        $flightNumber = FlightNumber::lists('name','id');
        $flightTime = FlightTime::lists('time','id');

        $languages = Language::all();
        return view('Admin.flight.description.create')->with('languages',$languages)
                                                      ->with('view_title',$this->view_title)
                                                      ->with('flightType',$flightType)
                                                      ->with('flightNumber',$flightNumber)
                                                      ->with('flightTime',$flightTime)
                                                      ->witH('flightRoute',$flightRoute)
                                                      ->with('action',"Create");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if(isset($input['is_active'])) $input['is_active'] = 1;
        else $input['is_active'] = 0;

        $rules = array( 
          'flight_type_id' => 'required',
          'flight_number_id' => 'required',
          'flight_time_id' => 'required',
          'flight_route_id' => 'required',
        );

        $messages = [
           'flight_number_id.required' => 'Flight Number is required!',
           'flight_type_id.required' => 'Flight Type is required!',
           'flight_route_id.required' => 'Route is required!',
           'flight_time_id.required' => 'Time is required!',
       ];

        $v = Validator::make($input, $rules,$messages);
        //dd($job_12);
        if($v->fails()){
            return Redirect::to('/admin/fmgr/f_description/create')->withInput()->withErrors($v);
        }else{
            $flight_type_id = $input['flight_type_id'];
            $flight_number_id = $input['flight_number_id'];
            $flight_time_id = $input['flight_time_id'];
            $flight_route_id = $input['flight_route_id'];
            $remark = $input['remark'];
            $is_active = $input['is_active'];

            $data = new FlightDescription(array(
                'flight_type_id' => $flight_type_id,
                'flight_route_id' => $flight_route_id,
                'flight_number_id' => $flight_number_id,
                'flight_time_id' => $flight_time_id,
                'remark' => $remark,
                'is_active' => $is_active
            ));

            $data->save();

            //##########Set Event for ActivityLog############
            $eventName = 'create';
            Session::flash('eventName',$eventName);
            $this->ActivityLog();
            return redirect('admin/fmgr/f_description')->with('message','Save Successfully');
        }
    }

    public function show($id)
    {
        $flightType = FlightType::lists('name','id');
        $flightRoute = FlightRoute::lists('name','id');
        $flightNumber = FlightNumber::lists('name','id');
        $flightTime = FlightTime::lists('time','id');
        $origin = FlightOrigin::lists('name','id');
        $destination = FlightDestination::lists('name','id');

        $data = FlightDescription::find($id); 
        //dd($data);
        $languages = Language::all();
        return view('Admin.flight.description.show')->with('languages',$languages)
                                                      ->with('view_title',$this->view_title)
                                                      ->with('flightType',$flightType)
                                                      ->with('flightNumber',$flightNumber)
                                                      ->with('flightTime',$flightTime)
                                                      ->with('flightRoute',$flightRoute)
                                                      ->with('origin',$origin)
                                                      ->with('destination',$destination)
                                                      ->with('data',$data)
                                                      ->with('action',"Create");
    }

    public function edit($id)
    {
        $flightType = FlightType::lists('name','id');
        $flightRoute = FlightRoute::lists('name','id');
        $flightNumber = FlightNumber::lists('name','id');
        $flightTime = FlightTime::lists('time','id');
        $origin = FlightOrigin::lists('name','id');
        $destination = FlightDestination::lists('name','id');

        $data = FlightDescription::find($id); 
        //dd($data);
        $languages = Language::all();
        return view('Admin.flight.description.edit')->with('languages',$languages)
                                                      ->with('view_title',$this->view_title)
                                                      ->with('flightType',$flightType)
                                                      ->with('flightNumber',$flightNumber)
                                                      ->with('flightTime',$flightTime)
                                                      ->with('flightRoute',$flightRoute)
                                                      ->with('origin',$origin)
                                                      ->with('destination',$destination)
                                                      ->with('data',$data)
                                                      ->with('action',"Create");
        
    }

    public function update(Request $request, $id)
    {
        if(!$request->has('is_active')){
            $request->offsetSet('is_active','0');
        }

        $input = $request->all();

        $data = FlightDescription::find($id);

        $rules = array( 
          'flight_type_id' => 'required',
          'flight_number_id' => 'required',
          'flight_time_id' => 'required',
          'flight_route_id' => 'required',
        );

        $messages = [
           'flight_number_id.required' => 'Flight Number is required!',
           'flight_type_id.required' => 'Flight Type is required!',
           'flight_route_id.required' => 'Route is required!',
           'flight_time_id.required' => 'Time is required!',
       ];

        $v = Validator::make($input, $rules,$messages);
        //dd($job_12);
        if($v->fails()){
            return Redirect::back()->withErrors($v);
        }else{
            
            $data->update($input);

            //##########Set Event for ActivityLog############
            $eventName = 'Update';
            Session::flash('eventName',$eventName);
            $this->ActivityLog();
            return redirect('admin/fmgr/f_description')->with('message','Update Successfully');
        }
    }

    public function destroy($id)
    {
        FlightDescription::find($id)->delete();
        return redirect()->back()->with('message','Deleted successfully');
    }

}
