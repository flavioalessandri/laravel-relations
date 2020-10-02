@extends('layouts.main-layout')

@section('content')

<h2>PAGINE EMPLOYEES</h2>

<ul>


@foreach ($employees as $employee)

<li><a href="{{route('employee-show', $employee->id )}}">

        {{ $employee-> name }} - {{ $employee-> lastname }}

    </a>

</li>


@endforeach

</ul>


@endsection
