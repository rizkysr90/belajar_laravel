@extends('layouts.main')

@section('content')
    <div class="bg-neutral  m-4 rounded-md p-4 mt-8">
        <div class=" text-sm breadcrumbs">
            <ul>
            <li><a>Beranda</a></li> 
            <li><a>Tambah Suppliers </a></li> 
            </ul>
        </div>
        <h4 class="font-bold text-2xl mb-4">Input Data</h4>
        {!! Form::open(array('url' => url('suppliers/store'), 'method' => 'post', 'class' => 'form-horizontal')) !!}
            {!!Form::label('name', 'Nama Sales', array('class' => 'block mb-2')) !!}
            <input type="text" id="name" name="name" placeholder="Masukkan nama sales" class="input w-full max-w-xs mb-4" />
            {!!Form::label('company_name', 'Nama Perusahaan', array('class' => 'block mb-2')) !!}
            <input type="text" id="company_name" name="company_name" placeholder="Masukkan Nama Perusahaan" class="input w-full max-w-xs mb-4" />
            {!!Form::label('contact', 'Kontak Sales', array('class' => 'block mb-2')) !!}
            <input type="text" id="contact" name="contact" placeholder="Masukkan Nomor Sales" class="input w-full max-w-xs mb-4" />
            {!!Form::label('telp', 'Kontak Perusahaan', array('class' => 'block mb-2')) !!}
            <input type="text" id="telp" name="telp" placeholder="Masukkan Nomor Perusahaan" class="input w-full max-w-xs mb-4" />
            {!!Form::label('information', 'Informasi Tambahan', array('class' => 'block mb-2')) !!}
            <input type="text" id="information" name="information" placeholder="Masukkan Informasi Tambahan" class="input w-full max-w-xs mb-4" />
            <div>
                <button type="submit" class="btn btn-info mt-2 mb-3">Submit</button>
                <button type="reset" class="btn btn-warning"> Cancel</button>
            </div>
        {!! Form::close()!!}
    </div>
@endsection
