{{-- {{ dd($products) }} --}}
@extends('layouts.main')

@section('content')
    <div class="mt-4 lg:mt-10  mb-4">
        <div class=" ml-5 lg:ml-12 text-sm breadcrumbs">
            <ul>
              <li><a>Beranda</a></li> 
              <li><a>Produk Saya</a></li> 
            </ul>
          </div>
    </div>
    <div class="flex rounded-lg flex-wrap mx-2 lg:mx-8">
        @foreach ($products as $product)
            <div class="card card-compact basis-5/12 lg:basis-1/5 bg-base-200 drop-shadow-xl m-3 ">
                <figure><img class ="h-32 object-cover w-full" src={{$product['url_image']}} alt="gambar produk" /></figure>
                <div class="card-body">
                <h2 class="card-title text-sm">{{$product['name']}}</h2>
                <div class="bg-base-100 p-2 text-xs rounded-md">
                    <p>Stok : {{ $product['stock'] }}</p>
                    <p>Jual : {{ $product['sale_price'] }}
                    <div>
                        <p>Modal : {{ $product['buy_price'] }}
                    </div>

                    <p class="mt-4">Deskripsi : <br>{{$product['description']}}</p>
                </div>
                <div class="card-actions justify-end mt-auto">
                    <div class=" w-full flex ">
                        <a class="btn btn-xs grow btn-info m-1" href="products/edit/{{$product['id']}}">Edit </a>
                        <a class="btn btn-xs grow btn-warning m-1" href='products/delete/{{$product['id']}}'>Delete </a>
                    </div>
                    <a class="btn btn-xs w-full btn-secondary" href='products/detail/{{$product['id']}}' >Lihat</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection