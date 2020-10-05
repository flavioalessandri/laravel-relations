@extends('layouts.main-layout')

@section('content')

<section>

  <div id="employee-show" class="">


    <ul class="selected-employee" data-id="{{ $employee->id }}">
      <li><h2>SINGOLO EMPLOYEE</h2></li>
      <li>Name:  {{ $employee->name }} </li>
      <li>LastName:  {{ $employee->lastname }}</li>
      <li>Personal-Code: {{ $employee->personal_code }}</li>
      <li>Date-Of-Birth: {{ $employee->date_of_birth }}</li>
      <li>Location: {{ $employee->location->city }}, ( {{ $employee->location->country }} )</li>
      <li class="buttons">
        <button type="button" name="button"><a href="{{route('employee-edit', $employee ->id)}}">EDIT</a></button>
        <button type="button" name="button"><a href="{{route ('employee-destroy', $employee ->id) }}">DELETE</a></button>
      </li>
    </ul>

    <div id= "tasks-carousel">
      <h2>TASK ASSEGNATI</h2>
      <ul class="tasks-container" >
        @foreach ( $employee-> tasks as $task )

          <li class="@if ($count ==1)
                      first show
                      @else
                      hidden
                      @endif"
                      data-id="{{$task -> id}}" data-carousel="{{$count++}}">
            <ul >
              <li><strong>Title:</strong> {{ $task -> title }}</li>
              <li><strong>Description:</strong> {{$task -> description }}</li>
              <li><strong>Difficulty Level:</strong> {{ $task -> difficulty_level }}</li>
            </ul>
          </li>

          @endforeach
        </ul>


          <a id="prev" href="#"><i class="fa fa-chevron-left" ></i></a>
          <a id="next" href="#"><i class="fa fa-chevron-right" ></i></a>


      </div>


  </div>
</section>

@endsection
