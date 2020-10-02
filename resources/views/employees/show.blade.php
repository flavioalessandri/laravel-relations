@extends('layouts.main-layout')

@section('content')

<h2>SINGOLO EMPLOYEE</h2>

<ul>

  <li>id: {{ $employee->id }}</li>
  <li>Name:  {{ $employee->name }} </li>
  <li>LastName:  {{ $employee->lastname }}</li>
  <li> Personal-Code: {{ $employee->personal_code }}</li>
  <li> Date-Of-Birth: {{ $employee->date_of_birth }}</li>
  <li> Location: {{ $employee->location->city }}, ( {{ $employee->location->country }} )</li>

  <ul>
    <li>TASK ASSEGNATI</li>

    <ul>
      @foreach ( $employee-> tasks as $task )

        <li>Title: {{ $task -> title }}</li>
        <li>Description: {{$task -> description }}</li>
        <li>Difficulty Level: {{ $task -> difficulty_level }}</li>
        <br>

      @endforeach
    </ul>

  </ul>

  <li><a href="{{route('employee-edit', $employee ->id)}}">EDIT</a></li>
    <li><a href="{{route ('employee-destroy', $employee ->id) }}">DELETE</a></li>


</ul>



@endsection
