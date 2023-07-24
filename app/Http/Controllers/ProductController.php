<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('adminn.products.list', compact('products'));
    }
    public function add(Request $request)
    {
        $category = Category::all();
        $products = Product::all();
        if ($request->isMethod('POST')) {
            $param = $request->post();
            unset($param['_token']);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $image_name);
            $image_url = 'upload/' . $image_name;
            $product = new Product();
            $product->name =  $request->name;
            $product->price =  $request->price;
            $product->image =  $image_url;
            $product->description =  $request->description;
            $product->quantity =  $request->quantity;
            $product->category_id =  $request->category_id;
            Alert::success('Thêm sản phẩm thành công !');
            return redirect()->route('list_product');
            $product->save();
        }
        return view('adminn.products.add', compact('products', 'category'));
    }
    public function edit(Request $request, $id)
    {
        $detail = Product::find($id);
        $category = Category::all();
        if ($request->isMethod('POST')) {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload'), $image_name);
                $detail->image = 'upload/' . $image_name;
            }
            $detail->name = $request->name;
            $detail->price = $request->price;
            $detail->description = $request->description;
            $detail->quantity = $request->quantity;
            $detail->category_id = $request->category_id;
            $detail->save();
            Alert::success('Cập nhật thành công !');
            return redirect()->route('list_product');

        }
        return view('adminn.products.edit', compact('detail', 'category'));
    }
    public function delete($id)
    {
        if($id)
        {
            $delete = Product::where('id',$id)->delete();
            return redirect()->route('list_product');
        }
    }
}
