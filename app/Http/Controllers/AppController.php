<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Party;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return redirect()->route("login");
    }

    //function to soft delete
    public function delete($table,$id)
    {
        $param = array("is_deleted" => 1);
        DB::table($table)->where("id",$id)->update($param);
        // Redirect to manage bills
        return redirect()->back()->with('success',"Bill deleted successfully");
    }   
}
