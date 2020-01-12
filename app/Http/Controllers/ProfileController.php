<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profile;
class ProfileController extends Controller
{
    public function index(Request $request){
        
        $profiles =profile::find($request->id);
        if(empty($profiles)){
  abort(404);
 }
        return view('profile.index', ['profiles' => $profiles]);
    }
}
