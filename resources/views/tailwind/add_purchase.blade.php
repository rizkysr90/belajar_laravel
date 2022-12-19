@extends('layouts.main')

@section('content')
    <div class="bg-neutral  m-4 rounded-md p-4 mt-8">
        <div class=" text-sm breadcrumbs">
            <ul>
            <li><a>Beranda</a></li> 
            <li><a>Tambah Pembelian</a></li> 
            </ul>
        </div>
        <h4 class="font-bold text-2xl mb-4">Input Data</h4>
        {!! Form::open(array('url' => url('purchases/store'), 'method' => 'post', 'class' => 'form-horizontal')) !!}
            {!!Form::label('product_id', 'Pilih Produk', array('class' => 'block mb-2')) !!}
            <select class="select w-full max-w-xs mb-4" id="product_id" name="product_id">
                <option disabled selected>Pilih Produk</option>
                @foreach ($products as $product)
                    <option value={{ $product->id }}>{{ $product->name }}</option>
                @endforeach
            </select>
            {!!Form::label('stock', 'Stok Produk', array('class' => 'block mb-2')) !!}
            <input type="number" id="stock" name="stock" placeholder="(Ex) : 99" class="input w-full max-w-xs mb-4" />
            {!!Form::label('supplier_id', 'Pilih Supplier', array('class' => 'block mb-2')) !!}
            <select class="select w-full max-w-xs mb-4" id="supplier_id" name="supplier_id">
                <option disabled selected>Pilih Supplier</option>
                @foreach ($suppliers as $supplier)
                    <option value={{ $supplier->supplier_id }}>{{ $supplier->name }} - {{ $supplier->name_company }}</option>
                @endforeach
            </select>
            {!!Form::label('comment', 'Komentar Pembelian ', array('class' => 'block mb-2')) !!}
            <input type="text" id="comment" name="comment" placeholder="Masukkan Komentar" class="input w-full max-w-xs mb-4" />
            <div>
                <button type="submit" class="btn btn-info mt-2 mb-3">Submit</button>
                <button type="reset" class="btn btn-warning"> Cancel</button>
            </div>
        {!! Form::close()!!}
    </div>
@endsection
