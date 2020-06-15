@extends('base')
@section('title', 'Services')
@include('nav')

@section('content')
<div class="container">
    
    <h1>Welcome to {{$services->name}}</h1>
    <div>
        <p class="text-muted">Please fill out the form</p>
    </div>

    <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="name">First Name</label>
            <input type="text" class="form-control" id="name" placeholder="First Name" autocomplete="off">
          </div>
          <div class="form-group col-md-4">
            <label for="mname">Middle Name</label>
            <input type="text" class="form-control" id="mname" placeholder="Middle Name" autocomplete="off">
          </div>
          <div class="form-group col-md-4">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" placeholder="Lat Name" autocomplete="off">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="email@example.com" autocomplete="off">
            </div>
            <div class="form-group col-md-8">
                <label for="inputAddress2">Address</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="House No., Street, Sitio, Poblacion" autocomplete="off">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" autocomplete="off">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Batangas</option>
              <option>Cavite</option>
              <option>Laguna</option>
              <option>Rizal</option>
              <option>Quezon</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type here your message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="500" style="resize:none" autocomplete="off"></textarea>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              <a href="#">I agree to the terms and condition</a>
            </label>
          </div>
        </div>
        <div form-group>
            <button class="btn btn-info">Send Message</button>  
        </div>
    </form>
    <a href="\service"><button class="btn btn-warning" style="color: white">Go Back</button></a>

</div>
 
      
</div>
@endsection