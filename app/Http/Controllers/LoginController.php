<?php

namespace App\Http\Controllers;

use App\Models\RegionDistrict;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function login()
    {
        return view('auth.user.login');
    }
    public function register()
    {
        $regions_districts = RegionDistrict::all();

        // dd($regions_districts); // This will show all data fetched from the model
        $regions_districts = RegionDistrict::select('region', DB::raw('count(*) as total'))
        ->groupBy('region')
        ->get();
        // dd
        
        // dd($grouped_regions); // This will show data grouped by region
        return view('auth.user.register', compact('regions_districts'));
    }
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',    
                'phone' => 'required|unique:users',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',
                'gender' => 'required',
                'date_of_birth' => 'required',
                'region' => 'required',
                'district' => 'required',
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->region = $request->region;
            $user->role = 'user';
            $user->district = $request->district;
            $user->dob = $request->date_of_birth;
            $user->save();

            return redirect()->route('user.auth.login');


        // dd(Hash::make($request->password));
    }
    public function getDistrict(Request $request)
    {
        // $districts = RegionDistrict::where('region', $request->region)->get();
        // return response()->json($districts);
        dd($request->all());
    }
    public function authLogin (Request $request) :RedirectResponse
    {
        $request->validate([   
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // $request->authenticate();

            $request->session()->regenerate();
            return redirect()->intended(route('/', absolute: false));
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    public function logout (Request $request) 
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');

    }
}
