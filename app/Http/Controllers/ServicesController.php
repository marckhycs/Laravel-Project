<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    
    public function index(){
        $data = Service::all();
        return view('service.index', compact('data'));
    }

    public function submit(){
        //validate
        
        //Adding the validated data into the database
        Service::create($this->dataValidation());
        return redirect('/service');
    }

    public function create(){
        return view('service.create');
    }

    public function show(Service $services){
        return view('service.show', compact('services'));
    }

    public function edit(Service $services){
        return view('service.edit',compact('services'));
    }

    public function update(Service $services){
        //Update the validated data into the database

        $services->update($this->dataValidation());
        return redirect('/service');
        
    }

    public function destroy(Service $services){
        $services->delete();
        return redirect('/service');

    }

    private function dataValidation(){
        return request()->validate([
            'name' => 'required',
        ]);
    }
}
