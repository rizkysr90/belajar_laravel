@extends('layouts.main')

@section('content')
    <div class="bg-base-200 ">
        <div class="hero mt-10">
            <div class="hero-content flex-col ">
            <img src={{$data[0]->url_image}} class="max-w-sm rounded-lg shadow-2xl" />
            <div class="">
                <h1 class="text-5xl font-bold mt-5">{{$data[0]->name}}</h1>
                <p>Stok : {{$data[0]->stock}}</p>
                <p>Harga Modal : {{$data[0]->buy_price}}</p>
                <p>Harga Jual : {{$data[0]->sale_price}}</p>
                <p class="py-6">Deskripsi : <br>{{$data[0]->description}}</p>

                <div class=" w-full flex ">
                    <a class="btn  btn-info m-1" href="/products/edit/{{$data[0]->id}}">Edit </a>
                    <a class="btn   btn-warning m-1" href='/products/delete/{{$data[0]->id}}'>Delete </a>
                </div>
            </div>
            </div>
        </div>
    </div>


@endsection