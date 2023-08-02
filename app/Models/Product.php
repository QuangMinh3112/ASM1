<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Brand;
use Ramsey\Uuid\Type\Integer;

class Product extends Model
{
    use HasFactory;
    public function getCategoryProductName():string{
        return Category::find($this->category_id)->name;
    }
    public function getBrandProductName(){
        $brand = Brand::find($this->brand_id);
        if($brand) {
            return $brand->name;
        }
        else {
            return 'Rỗng';
        }
    }
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'quantity',
        'category_id',
        'brand_id',
        'status'
    ];
}
