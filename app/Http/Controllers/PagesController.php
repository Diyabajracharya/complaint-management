<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Mail\ComplaintMail;
use App\Models\complaint;
use App\Models\Product;
use App\Models\User;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home()
    {

        $data = [
            'username' => "DiyaBajracharya"
        ];
        return view('create')->with($data);
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'complaint' => 'required',
            'type' => 'required',
            'description' => 'required|description|max:20'
        ]);
        $complaint = new complaint();
        $complaint->type = Hash::make($request->type);
        $complaint->description = $request->description;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/' . $filename);
        $complaint->image = $filename;
        $complaint->save();
        return redirect('/list');

    }

    public function register_form(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user-> role = $request -> role;
        $user->save();
        return redirect('/login')->with("success", 'Registered Successfully');

    }

    public function register()
    {

        return view('register');
    }

    public function list()
    {
        $product = Product::orderBy('name')->get();
        return view('list')->with('products', $product);
    }

    public function edit($id)
    {
        $complaint = Complaint::where('id', $id)->first();
        return view('update')->with('complaint', $complaint);
    }

    public function update(Request $request)
    {
        $complaint = Complaint::where('id', $request->id)->first();
        $complaint->type = $request->type;
        $complaint->description = $request->description;
        $complaint->save();
        return redirect('/list');
    }

    public function login()
    {
        // Mail::to('diya.bajracharya@sifal.deerwalk.edu.np')->send(new ComplaintMail("Diya"));

        return view('login');
    }

    public function loginform(Request $request)
    {
        $credentials = [
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            return redirect('list');
        } else {
            return "no";
        }

    }

    public function delete($id)
    {
        $complaint = complaint::where('id', $id)->first();

        if (File::exists('storage/image/' . $complaint->image)) {
            File::delete('storage/image/' . $complaint->image);
        }

        $complaint->delete();
        return redirect('/list');
    }

    public function complaintStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $complaint = new Complaint();
        $complaint->description = $request->name;
        $complaint->product_id=$request->id;
        $complaint->save();

        return redirect('/list');
    }
    public function complaintList(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $complaint = new Complaint();
        $complaint->description = $request->name;
        $complaint->product_id=$request->id;
        $complaint->save();

        return redirect('/list');
    }
}


