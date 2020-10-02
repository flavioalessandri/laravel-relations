@extends('layouts.main-layout')

@section('content')

<h2>CREA EMPLOYEE</h2>

<form class="" action="{{route('employee-store')}}" method="post">

@csrf
@method('POST')

  <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" name="name" value="">
  </div>

  <div class="form-group">
    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="">
  </div>

  <div class="form-group">
    <label for="personal_code">PERSONALCODE</label>
    <input type="text" name="personal_code" value="">
  </div>

  <div class="form-group">
    <label for="date_of_birth">DATA</label>
    <input type="date" name="date_of_birth" value="">
  </div>

  <div class="form-group">

    <label for="location_id">LOCATION</label>
    <select  name="location_id">

      @foreach ($locations as $location)

        <option value="{{$location -> id}}"> {{$location -> city}} </option>

      @endforeach

  </select>
</div>

<button type="submit" name="button">CREA</button>


</form>



@endsection
