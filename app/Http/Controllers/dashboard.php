<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

class dashboard extends Controller
{
    public function dashboard() {

        $page_title = 'Dashboard';
        $total_vehicle = 0;
        $expiring = 0;
        $expired = 0;

        $data= [
            'page_title' => $page_title,
            'total_vehicle'=> $total_vehicle,
            'expiring'=>$expiring,
            'expired'=>$expired
        ];

        return view('dashboard', $data);
    } 

    public function vehicle_details() {

        $page_title = 'Dashboard';

        $data= [
            'page_title' => $page_title,
        ];
        return view('vehicle_details', $data);
    }

    public function vehicle_list() {
        $users = [
                "Sl_no" => 1,
                "user" => "ldkfjlk",
                "registration_no" => 101,
                "model" => 101,
                "manufacture_date" =>101,
                "registration_date" =>101,
                "action" => 0
        ];

        
    }

    
}
