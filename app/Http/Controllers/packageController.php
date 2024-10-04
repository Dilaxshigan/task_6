<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class packageController extends Controller
{
    public function add_package()
    {
        return view('add_package');
    }

    public function upload_package(Request $request)
    {
        $data = new Package;

        $data->package_name = $request->package_name;
        $data->description = $request->description;
        $data->staying_days = $request->staying_days;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('packaged', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function delete_package($id)
    {
        $data = Package::find($id);
        $image_path = public_path('packaged/'.$data->image);

        if(file_exists($image_path) && is_file($image_path)){
            unlink($image_path);
        }
        $data->delete();

        return redirect()->back();
    }

    public function edit_package($id)
    {
        $data = Package::find($id);
        return view('edit_package', compact('data'));
    }

    public function update_package(Request $request, $id)
    {
        $data = Package::find($id);

        $data->package_name = $request->package_name;
        $data->description = $request->description;
        $data->staying_days = $request->staying_days;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('packaged', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect('/booking');


    }
}
