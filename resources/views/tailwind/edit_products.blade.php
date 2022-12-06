@extends('layouts.main')

@section('content')
    <div class="bg-neutral  m-4 rounded-md p-4 mt-8">
        <div class=" text-sm breadcrumbs">
            <ul>
            <li><a>Beranda</a></li> 
            <li><a>Edit Produk </a></li> 
            </ul>
        </div>
        <h4 class="font-bold text-2xl mb-4">Edit Data</h4>
        {!! Form::open(array('url' => url(''), 'method' => 'post', 'class' => 'form-horizontal')) !!}
            {!!Form::label('name', 'Product Name', array('class' => 'block mb-2')) !!}
            <input type="text" id="name" name="product_name" placeholder="Masukkan nama produk" value="{{$data[0]->name}}" class="input w-full max-w-xs mb-4" />
            {!!Form::label('url_image', 'Url Gambar', array('class' => 'block mb-2')) !!}
            <input type="text" id="url_image" value={{$data[0]->url_image}} name="url_image" placeholder="Masukkan URL Gambar Produk" class="input w-full max-w-xs mb-4" />
            {!!Form::label('stock', 'Stok Produk', array('class' => 'block mb-2')) !!}
            <input type="number" id="stock" value={{$data[0]->stock}} name="stock" placeholder="(Ex) : 99" class="input w-full max-w-xs mb-4" />
            {!!Form::label('brand', 'Brand', array('class' => 'block mb-2')) !!}
            <select class="select w-full max-w-xs mb-4" id="brand" name="brand">
                <option disabled selected>Pilih Brand Produk</option>
                <option value="Indofood">Indofood</option>
                <option value="Wings">Wings</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Other">Other</option>
            </select>
            {!!Form::label('buy_price', 'Harga Modal', array('class' => 'block mb-2')) !!}
            <input type="number" name="buy_price" value={{$data[0]->buy_price}} id="buy_price" placeholder="(Ex): Rp5.000" class="input w-full max-w-xs mb-4" />
            {!!Form::label('sale_price', 'Harga Jual', array('class' => 'block mb-2')) !!}
            <input type="number" name="sale_price" value={{$data[0]->sale_price}} id="sale_price" placeholder="(Ex): Rp5.000" class="input w-full max-w-xs mb-4" />
            {!!Form::label('discount_status', 'Status Diskon', array('class' => 'block mb-2')) !!}
            <div class="flex mb-3">
                <div class="flex items-center">
                    <input type="radio" name="discount_status" value="Ya" class="radio" checked /> 
                    <span class="ml-2">Ya</span>
                </div>
                <div class="flex items-center ml-3">
                    <input type="radio" name="discount_status" value="Tidak"class="radio" />
                    <span class="ml-2">Tidak</span>
                </div>
            </div>
            {!!Form::label('description', 'Deskripsi Produk', array('class' => 'block mb-2')) !!}
            <input type="text" id="description" value="{{$data[0]->description}}" name="description" placeholder="(Ex): Produk ini dibuat dari kedelai pilihan" class="input w-full max-w-xs mb-4" />
            <div>
                <button type="submit" class="btn btn-info mt-2 mb-3">Submit</button>
                <button type="reset" class="btn btn-warning"> Cancel</button>
            </div>
        {!! Form::close()!!}
    </div>
@endsection
