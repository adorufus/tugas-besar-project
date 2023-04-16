<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $product_model;

    public function __construct()
    {
        $this->product_model = new Product();
    }

    public function index() {
        $productDb = DB::table("product")->get();

        return view('templates.dashboard.home.index', ['products', $productDb]);
    }
}
