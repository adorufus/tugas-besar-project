@php
    $productList = [
        (object) ["name" => "lobak", "image" => "https://pict.sindonews.net/dyn/620/makassar/news/2020/01/06/7/39316/ngeri-5-sayur-sehat-ini-bisa-sangat-jahat-dan-berbahaya-sor.jpg", "price" => "5000"],
        (object) ["name" => "wortel", "image" => "https://images.bisnis.com/posts/2021/08/07/1426929/carrot.jpg", "price" => "10000"],
        (object) ["name" => "supra", "image" => "https://ik.imagekit.io/zlt25mb52fx/ahmcdn/uploads/product-draft/colors/varian-2-2-04032022-102025.jpg", "price" => "5000000"]
    ];
@endphp

    <!doctype html>
<html lang="en">
<head>
    @include('templates.head')
</head>
<body>
@include('templates.navbar')
<div class="container-fluid">

    <div style="height: 18rem; width: 100%; background-color: #0b5ed7; border-radius: 15px">
    </div>
    <h1 class="pt-4">Semua Produk</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-2 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <img
                                src="{{$product->image}}"
                                alt="product image"/>
                            <div>{{$product -> name}}</div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="color: forestgreen">Rp.{{$product->price}}</div>
                                <button class="btn btn-danger">Tambah ke keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</body>
</html>
