@extends('layout.main')

@section('content')
    <ul>

        @foreach ($Movies as $Movie)
            <li>{{ $Movie['title'] }}</li>
        @endforeach

    </ul>
@endsection
