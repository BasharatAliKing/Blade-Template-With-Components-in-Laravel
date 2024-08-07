<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users=User::get();
        // return $user;
        return view('userview',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $users=User::create([
        //     'name'=>'sharafat ali',
        //     'email'=>'foji@GMAIL.COM',
        //     'password'=>'0987654321',
        // ]);
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $users=User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $user=User::find($id);
       //return $user;
        return view('showUser',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
       // return $user;
        return view('updateUser', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      //  $user=User::find($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
          
        ]);
        $user=User::where('id',$id) ->update([
            'name'=> $request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id)->delete();
        return redirect()->route('user.index');
    }
}
