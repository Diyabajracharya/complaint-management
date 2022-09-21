<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use Illuminate\Http\Request;
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
        $complaint = new complaint();
        $complaint->type = $request->type;
        $complaint->description = $request->description;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/' . $filename);
        $complaint->image = $filename;
        $complaint->save();
        return 'Saved';
        return redirect('/list');

    }

    public function list()
    {
        $complaint = Complaint::orderBy('id', 'desc')-> get();
        return view ('list')->with('complaint', $complaint);
    }
    public function edit($id){
        $complaint = Complaint::where('id', $id)-> get();
        return view('update')->with('complaint',$complaint);
    }

    public function update(Request $request){
        $complaint = Complaint::where('id',$request->id)->first();
        $complaint->type = $request->type;
        $complaint->description = $request->description;
        $complaint->image = $filename->image;
        $complaint->save();
        return redirect('/list');
    }
}
