{{-- {{ dd($posts) }} --}}
@extends('layouts.main')

@section('children')
    <div class="mx-auto w-6/12 my-10">
            <div class="stack my-4">
                <div class="card shadow-md bg-primary text-primary-content">
                <div class="card-body">
                    <h2 class="card-title">{{ $barang['title'] }}</h2> 
                    <p>{{ $barang['body'] }}</p>
                </div>
                </div> 
                <div class="card shadow bg-primary text-primary-content">
                <div class="card-body">
                    <h2 class="card-title">Notification 2</h2> 
                    <p>You have 3 unread messages. Tap here to see.</p>
                </div>
                </div> 
                <div class="card shadow-sm bg-primary text-primary-content">
                <div class="card-body">
                    <h2 class="card-title">Notification 3</h2> 
                    <p>You have 3 unread messages. Tap here to see.</p>
                </div>
                </div>
            </div>
    </div>
@endsection