<?php

namespace App\Http\Controllers;

use App\User;
use App\Image;
use App\Filiere;
use Illuminate\Http\Request;
use App\Http\Requests\UserImageRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show($id){
        
        $user = User::findOrFail($id);
        return
        view('user.show',['user' => $user ]);
    }

    public function edit(User $user){

        $this->authorize('update',$user);
        return 
        view('user.edit',['user' => $user]);

    }
    
    public function update(UserImageRequest $request , User $user){

        $this->authorize('update',$user);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $path = Storage::disk('public')->put('user',$file);

            if($user->image){
                Storage::delete($user->image->path);
                $user->image->path = $path;
                $user->image->save();
            }
            else{
                $image = new Image(['path' => $path]);
                $user->image()->save($image);
            }
        }
        $user->save();
            return redirect()->route('user.show',['user' => $user]);
    }



}


 
    
    

