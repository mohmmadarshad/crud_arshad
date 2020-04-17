<?php

namespace App\Http\Controllers;

use App\userModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class mainController extends Controller
{

    public function viewData()
    {
        $data = userModel::all();
        return view('viewData', ['data' => $data]);
    }
    //
    public function save(Request $req)
    {
        // print_r($req->input());

        $data = userModel::all();
        $model = new userModel();

        // $message = ['name' => 'recorde is Already Exists'];
        $this->validate($req, [
            'name' => 'unique:data'
        ]);
        $model->name = $req->name;
        $model->email = $req->email;
        $model->mobile = $req->mobile;
        $model->dob = $req->dob;
        $model->pincode = $req->pincode;

        $model->save();
        return redirect()->back();
        // Route::redirect('submit', 'home');
        //
    }



    public function update(Request $re)
    {
        $cmd = userModel::find($re->id);
        $cmd->name = $re->name;
        $cmd->email = $re->email;
        $cmd->mobile = $re->mobile;
        $cmd->dob = $re->dob;
        $cmd->pincode = $re->pincode;

        $cmd->save();
        $data = userModel::all();
        return redirect()->route('viewData')->with(['data' => $data]);
    }


    public function delete(Request $id)
    {
        $c = userModel::find($id->id);
        // echo $c;
        echo $c->delete();

        $data = userModel::all();
        return redirect()->route('viewData')->with(['data' => $data]);
    }
}
