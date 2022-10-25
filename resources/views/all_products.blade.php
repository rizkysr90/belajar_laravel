{{-- {{ dd($products) }} --}}
@extends('layouts.main')

@section('children')
    <div class="hero">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md py-10">
            <h1 class="mb-5 text-5xl font-bold">Semua Produk</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel cumque odit asperiores totam, accusamus enim.</p>
        </div>
        </div>
    </div>
    <div class="mx-4 my-10 flex flex-wrap">
        @foreach ($products as $product)
            <div class="card card-compact basis-1/5 grow shrink bg-base-100 shadow-xl m-4">
                <figure><img src={{$product['url_image']}} alt="gambar produk" /></figure>
                <div class="card-body">
                <h2 class="card-title">{{$product['name']}}</h2>
                <div class="bg-base-200 p-2 rounded-md">
                    <p>Stok : {{ $product['stock'] }}</p>
                    <div>
                        <p>Modal : {{ $product['buy_price'] }}
                        <p>Jual : {{ $product['sale_price'] }}
                    </div>

                    <p class="mt-4">Deskripsi : <br>{{$product['description']}}</p>
                </div>
                <div class="card-actions justify-end mt-2">
                    <button class="btn btn-primary">Lihat</button>
                </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection