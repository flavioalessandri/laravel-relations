@extends('layouts.main-layout')

@section('content')

<section>

  <div id="employees-list">

    <h2>PAGINE EMPLOYEES</h2>

    <ol class="main-list">

          @foreach ($employees as $employee)

            @if( $loop->iteration % 3 == 1)

            </li>
              </ul>
                <li>
                  <ul class="employee-group">

          @endif
                <li class="new">
                  <a href="{{route('employee-show', $employee->id )}}">

                        {{ $employee-> name }} - {{ $employee-> lastname }}

                    </a>
                </li>
          @endforeach

      </ol>
  </div>
</section>

@endsection
