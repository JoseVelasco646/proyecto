<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){

        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','El nuevo usuario ha sido registrado en la base de datos');
        }else{
            return back()->with('fail','Algo salió mal, inténtalo de nuevo más tarde');
        }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','No existe ese correo electronico registrado; verifique');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/index');

            }else{
                return back()->with('fail','Error de contraseña; por favor. verifique ');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    function settings(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }
}
