@extends('layouts.main')

@section('content')
    <div class="bg-neutral m-4 rounded-md p-4 mt-8">
        <div class=" text-sm breadcrumbs">
            <ul>
            <li><a>Beranda</a></li> 
            <li><a>Manajemen Kasir</a></li> 
            </ul>
        </div>
        <h4 class="font-bold text-2xl mb-4">Tambah Kasir</h4>
        {!! Form::open(array('url' => url('users/kasir/register'), 'method' => 'post', 'class' => 'form-horizontal')) !!}
            {!!Form::label('firstname', 'First Name', array('class' => 'block mb-2')) !!}
            <input type="text" id="firstname" name="firstname" placeholder="Masukkan nama depan" class="input w-full max-w-xs mb-4" />
            {!!Form::label('lastname', 'Last name', array('class' => 'block mb-2')) !!}
            <input type="text" id="lastname" name="lastname" placeholder="Masukkan name belakang" class="input w-full max-w-xs mb-4" />
            {!!Form::label('role', 'Role', array('class' => 'block mb-2')) !!}
            <select class="select w-full max-w-xs mb-4" id="role" name="role">
                <option disabled selected>Pilih Role</option>
                <option value="Superadmin">Superadmin</option>
                <option value="Admin">Admin</option>
            </select>
            {!!Form::label('email', 'Email', array('class' => 'block mb-2')) !!}
            <input type="text" id="email" name="email" placeholder="yourname@domain.com" class="input w-full max-w-xs mb-4" />
            {!!Form::label('phone', 'Phone Number', array('class' => 'block mb-2')) !!}
            <input type="text" id="phone" name="phone" placeholder="your real phone number" class="input w-full max-w-xs mb-4" />
            {!!Form::label('password', 'Password', array('class' => 'block mb-2')) !!}
            <input type="password" id="password" name="password" placeholder="your secret password" class="input w-full max-w-xs mb-4" />
            {!!Form::label('confirm_password', 'Confirm Password', array('class' => 'block mb-2')) !!}
            <input type="password" id="confirm_password" name="confirm_password" placeholder="re-type your secret password" class="input w-full max-w-xs mb-4" />
            <div>
                <button type="submit" class="btn btn-info mt-2 mb-3">Submit</button>
                <button type="reset" class="btn btn-warning"> Cancel</button>
            </div>
        {!! Form::close()!!}
    </div>

@endsection