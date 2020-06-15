@extends('base')
@section('title', 'Services')
@include('nav')

@section('content')
<div class='container'>
        <h1>Welcome to Services</h1>
        <div>
            <a href="\service\create"><button class="btn btn-success">Add New Service</button></a>
        </div>
        <br>
        <div class="list-group">
            @forelse ($data as $item)
            <div class="form-row">
                <div class="col-md-10">
                    <a href="\service\{{$item->id}}"><li class="list-group-item">{{$item->name}}</li></a>
                </div>
            
                <div class="col-md-1">
                    <a href="service/{{$item->id}}/edit"><button class="btn btn-success">Edit</button></a>
                </div>
                <div class="col-md-1">
                    <form action="/service/{{$item->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            </div>
                @empty
             <h1>No Records As of Now</h1>
    
             @endforelse
        </div>
       
</div>
  

@endsection
