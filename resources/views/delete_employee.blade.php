@extends('layouts.main')

@section('children')
    <div class="flex flex-col w-3/6 mx-auto">
        @for ($i = 0; $i < 10; $i++)
            <div class="btn btn-warning mt-3 normal-case">
                ini loop ke {{ $i }} dari file delete_employee
            </div>
        @endfor
    </div>
@endsection