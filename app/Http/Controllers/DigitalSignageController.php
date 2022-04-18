<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Weak;
use App\Models\Floor;
use App\Models\Building;
use App\Models\Collage_time;
use Illuminate\Http\Request;

class DigitalSignageController extends Controller
{
    public function index($build, $floors)
    {
        $floor = Floor::where('raspberry_pi_ip_address', $floors)->first();
        $building = Building::where('name', $build)->first();
        $collages = Collage_time::all();
        // if (is_null($floor->raspberry_pi_ip_address)) {
        //     echo "hello";
        // }
        if ($building && $floor) {
            return view('digital', compact('collages', 'floor', 'building'));
        } else {
            return view('404');
        }
    }
    // public function indexs($build, $floors)
    // {
    //     $floor = Floor::where('raspberry_pi_ip_address', $floors)->first();
    //     $building = Building::where('name', $build)->first();
    //     $collages = Collage_time::all();
    //     // if (is_null($floor->raspberry_pi_ip_address)) {
    //     //     echo "hello";
    //     // }
    //     if ($building && $floor) {
    //         return view('dashboard.collage_time.index', compact('collages', 'floor', 'building'));
    //     } else {
    //         return view('404');
    //     }
    // }
    public function indexs($build, $floors)
    {
        $floor = Floor::where('raspberry_pi_ip_address', $floors)->first();
        $building = Building::where('name', $build)->first();
        $buildings = Building::all();
        $collages = Collage_time::all();
        $days = Weak::all();
        // if (is_null($floor->raspberry_pi_ip_address)) {
        //     echo "hello";
        // }
        if ($building && $floor) {
            return view('dashboard.collage_time.index', compact('collages', 'days', 'buildings'));
        } else {
            return view('404');
        }
    }
}
