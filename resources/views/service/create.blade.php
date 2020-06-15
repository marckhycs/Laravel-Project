@extends('base')
@section('title', 'Services')
@include('nav')

@section('content')
<div class='container'>
    <h1>Welcome to Services</h1>
    <form action="/service" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="name" autocomplete="off">
        </div>
        @error('name')
           <p class="text-danger"><strong>{{$message}}</strong></p> 
        @enderror
        <button class="btn btn-success btn-sm" type="submit">Add Services</button>
        @csrf
    </form>
    <div>
        <a href="\service"><button class="btn btn-danger btn-sm">Cancel</button></a>  
    </div>
    
</div>
@endsection