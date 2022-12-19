{{-- {{ dd($purchases) }} --}}
@extends('layouts.main')

@section('content')
    <div class="mt-4 lg:mt-10  mb-4">
        <div class=" ml-5 lg:ml-12 text-sm breadcrumbs">
            <ul>
            <li><a>Beranda</a></li> 
            <li><a>Semua Pembelian</a></li> 
            </ul>
        </div>
    </div>
    <div class="overflow-x-auto w-full">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Produk</th>
              <th>Supplier</th>
              <th>QTY</th>
              <th>Tanggal</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($purchases as $key => $purchase)
                
                <tr class="">
                    <th class="">
                        <p>{{ $key+1 }}</p>
                        </th>
                    <th class="">
                    <p>{{ $purchase->purchase_id }}</p>
                    </th>
                    <td>
                    <div class="flex items-center space-x-3">
                        <div class="avatar">
                        <div class="mask mask-squircle w-12 h-12 ">
                            <img class="" src={{ $purchase->products->url_image }} alt="Avatar Tailwind CSS Component" />
                        </div>
                        </div>
                        <div>
                        <div class="font-bold">{{ $purchase->products->name }}</div>
                        <div class="text-sm opacity-50">Stok : {{ $purchase->products->stock }}</div>
                        </div>
                    </div>
                    </td>
                    <td>
                        {{ $purchase->suppliers->name }}
                    <br/>
                    <span class="badge badge-ghost badge-sm -ml-1"> {{ $purchase->suppliers->name_company }}</span>
                    </td>
                    <td> {{ $purchase->stock }}</td>
                    <td>
                        {{ $purchase->created_at }}
                    </td>
                    <td class="">
                        <div class="flex">
                            <a href='/' class="btn btn-info btn-xs grow mr-1">Edit</a>
                            <a href='/' class="btn btn-warning btn-xs grow">Hapus</a>
                        </div>
                        <div class="mt-2">
                            <a href='/' class="btn btn-primary btn-xs w-full">Lihat</a>
                        </div>
    
                    </td>
                </tr>
            @endforeach
            <!-- row 1 -->
                
            
          </tbody>
         
          <!-- foot -->
        </table>
      </div>
      <div class="flex justify-center my-6">
          <div class="btn-group">
            <button class="btn">«</button>
            <button class="btn">Page 22</button>
            <button class="btn">»</button>
          </div>
      </div>
@endsection