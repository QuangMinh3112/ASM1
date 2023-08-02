<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    //
    public function index() {
        $brand = Brand::all();
        return view('adminn.brand.list', compact('brand'));
    }
    public function add(Request $request){
        if($request->isMethod('post')){
            $param = $request->post();
            unset($param['_token']);
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->save();
            Alert::success('Đã thêm Brand');
            return redirect()->route('list_brand');
        }
        return view('adminn.brand.add');
    }
    public function edit(Request $request, $id){
        $detail = Brand::find($id);
        if($request->isMethod('post')){
            $update = Brand::where('id', $id)->update($request->except('_token'));
            Alert::success('Cập nhật thành công');
            return redirect()->route('list_brand');
        }
        return view('adminn.brand.edit', compact('detail'));
    }
    public function delete($id) {
        if($id) {
            $delete = Brand::where('id', $id)->delete();
            return redirect()->route('list_brand');
            Alert::success('Đã xóa brand');
        }
    }
}
