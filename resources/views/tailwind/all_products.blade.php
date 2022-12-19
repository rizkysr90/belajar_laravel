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
    <form 
        action="/products"
        method="get"
        class="form-control ml-5 lg:ml-12 ">
        <div class="input-group ">
          <input type="text" name="search" id="search" placeholder="Search…" class="input input-bordered w-full" value="{{request('search')}}" />
          <button class="btn btn-square">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
          </button>
        </div>
    </form>
    @If (count($products) === 0) 
        <p>Produk tidak ditemukan</p>
    @endif
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