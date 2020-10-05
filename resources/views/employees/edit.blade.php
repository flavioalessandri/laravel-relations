@extends('layouts.main-layout')

@section('content')

<section>

  <div id ="employee-edit" class="">


    <h2>EDIT EMPLOYEE</h2>

    <form class="" action="{{route('employee-update',$employee->id)}}" method="post">

    @csrf
    @method('POST')

      <div class="form-group">
          <label for="name">NAME</label>
          <input type="text" name="name" value="{{$employee->name}}">
      </div>

      <div class="form-group">
        <label for="lastname">LASTNAME</label>
        <input type="text" name="lastname" value="{{$employee->lastname}}">
      </div>

      <div class="form-group">
        <label for="personal_code">PERSONALCODE</label>
        <input type="text" name="personal_code" value="{{$employee->personal_code}}">
      </div>

      <div class="form-group">
        <label for="date_of_birth">DATA</label>
        <input type="date" name="date_of_birth" value="{{$employee->date_of_birth}}">
      </div>

      <div class="form-group">

        <label for="location_id">LOCATION</label>
        <select  name="location_id">

          @foreach ($locations as $location)

                  <option value="{{$location -> id}}"


                    @if ($location->id === $employee->location->id )

                    selected

                    @endif

            > {{$location -> city}} </option>

          @endforeach

        </select>
      </div>

      <div class="form-group">
        <label for="button">EDIT</label>
        <button class="button" type="submit" name="button">EDIT</button>
      </div>


      </form>

    </div>

</section>

@endsection
