<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UserController extends Controller
{
    //
    public function index()
    {
        $year = ['2020','2021','2017','2018','2019','2020'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

    	return view('chart')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}
