<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
        $brand = Brand::all();
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
            $product->brand_id = $request->brand_id;
            $product->status = $request->status;
            // dd($product);
            $product->save();
            Alert::success('Thêm sản phẩm thành công !');
            return redirect()->route('list_product');
        }
        return view('adminn.products.add', compact('products', 'category', 'brand'));
    }
    public function edit(Request $request, $id)
    {
        $brand = Brand::all();
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
            $detail->brand_id = $request->brand_id;
            $detail->status = $request->status;

            $detail->save();
            Alert::success('Cập nhật thành công !');
            return redirect()->route('list_product');

        }
        return view('adminn.products.edit', compact('detail', 'category', 'brand'));
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
