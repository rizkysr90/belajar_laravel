{{-- {{ dd($purchases) }} --}}
@extends('layouts.main')

@section('content')
    <div class="mt-4 lg:mt-10  mb-4">
        <div class=" ml-5 lg:ml-12 text-sm breadcrumbs">
            <ul>
            <li><a>Beranda</a></li> 
            <li><a>Semua Sales</a></li> 
            </ul>
        </div>
    </div>
    <div class="overflow-x-auto w-full">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Sales</th>
              <th>Perusahaan</th>
              <th>Kontak Sales</th>
              <th>Kontak Perusahaan</th>
              <th>Informasi</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($suppliers as $key => $supplier)
                
                <tr class="">
                    <th class="">
                        <p>{{ $key+1 }}</p>
                        </th>
                    <td>
                    <div class="flex items-center space-x-3">
                        <div>
                            <div class="font-bold">{{ $supplier->name}}</div>
                        </div>
                    </div>
                    </td>
                    <td>
                        {{ $supplier->name_company }}
                    <br/>
                    </td>
                    <td> {{ $supplier->contact }}</td>
                    <td>
                        {{ $supplier->telp }}
                    </td>
                    <td>
                        {{ $supplier->information }}
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