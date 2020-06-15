@extends('base')
@section('title', 'Services')
@include('nav')

@section('content')
<div class='container'>
    <h1>Edit Your Service Name</h1>
<form action="/service/{{$services->id}}" method="POST">
        @method('PATCH')
        <div class="form-group">
        <input class="form-control" type="text" name="name" autocomplete="off" value="{{$services->name}}">
        </div>
        @error('name')
           <p class="text-danger"><strong>{{$message}}</strong></p> 
        @enderror
        <button class="btn btn-success btn-sm" type="submit">Done</button>
        @csrf
    </form>
    <div>
        <a href="\service"><button class="btn btn-danger btn-sm">Go Back</button></a>  
    </div>
    
</div>
@endsection