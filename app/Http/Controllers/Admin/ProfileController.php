<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Mine;
use Carbon\Carbon;


class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        
        
        $profile->fill($form);
        $profile->save();
       
        return redirect('admin/profile/create');
    }
    
    public function index(Request $request)
    {
      $posts = Profile::all();
       return view('admin.profile.index',['posts => $posts']);
        
    }
    
   
    public function edit(Request $request)
    {
        $profile=Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Profile::$rules);
      
      $profile = Profile::find($request->id);
      
      $profile_form = $request->all();
      unset($profile_form['_token']);
      
       $profile->fill($profile_form)->save();
       
        $mine = new Mine;
        $mine->profile_id=$profile->id;
        $mine->edited_at = Carbon::now();
        $mine->save();
        return redirect('admin/profile/edit?id=1');
        
    }
  public function delete(Request $request)
  {
     $profile_form = Profile::find($request->id);
     $profile_form->delete();
     return redirect('admin/profile/create');
  }  


    
}


