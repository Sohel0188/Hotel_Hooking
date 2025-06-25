<?php
namespace App\Http\Controllers;

use App\Models\service_type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServiceTypeController extends Controller
{
    public function index(){
        return null;
    }
    public function create(){
      
        if (Auth::user()->type == 1) {
            return view('admin.dashboard.pages.service_type.create');
            //return view('admin.dashboard.pages.forms.genera');
       }
        
    }

    public function store(Request $request){
        $service = new service_type;
        $service -> name = $request->service_type;
        $service -> description = $request->description;
        $service -> meta_info = $request->meta_info;
        $service->save();
        return redirect()->back();


    }
}
