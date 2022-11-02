@extends('layouts.main')

@section('children')
    <div class="flex flex-col justify-center min-h-screen w-3/6 mx-auto">
        @for ($i = 0; $i < 5; $i++)
            <div class="btn btn-info mt-3 normal-case">
                ini loop ke {{ $i }} dari file edit_employee
            </div>
        @endfor
    </div>
@endsection