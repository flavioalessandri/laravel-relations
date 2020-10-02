<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class EmployeeController extends Controller
{
    public function index(){
      $employees = Employee::all();
      return view('employees.index', compact('employees') );
    }

    public function show($id){
      $employee = Employee::findOrFail($id);

      return view('employees.show', compact('employee'));
    }

    public function create(){

      $locations = Location::all();

      return view('employees.create', compact('locations'));
    }

    public function store(Request $request){
      $data = $request-> all();
      Employee::create($data);

      return redirect() -> route('employees-index');
    }

    public function destroy($id){

      $emp = Employee::findOrFail($id);
      $emp -> delete();
      return redirect() -> route('employees-index');
    }

    public function edit($id){

      $employee = Employee::findOrFail($id);
      $locations = Location::all();

      return view('employees.edit', compact('employee', 'locations'));


    }


}
