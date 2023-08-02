<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //
    public function index() {
        // dd('user_pages');
        $user = User::all();
        return view('adminn.users.list', compact('user'));
    }
    public function add(Request $request) {
        if($request->isMethod('POST')) {
            $param = $request->post();
            unset($param['_token']);
            if($request->image) {
                $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $image_name);
            $image_url = 'upload/' . $image_name;
            }
            else {
                $image_url = 'upload/avt.png';
            }
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->image = $image_url;
            $user->password = '123';
            $user->role_id = $request->role_id;
            $user->save();
            Alert::success('Thêm thành công user !!!');
            return redirect()->route('list_user');

        }
        return view('adminn.users.add');
    }
}
