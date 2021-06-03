@extends('layouts/main_layout')
@section('content')
    <ul>
        @foreach ($car as $item)
        <li>
            <div class="car">
                <span>
                    Name
                </span>
                {{$item -> name}}
                <span>
                    Model
                </span>
                {{$item -> model}}
                <span>
                    Potenza
                </span>
                {{$item -> kW}}
            </div>
            <div class="brand">
                <span>
                    Nationality
                </span>
                {{$item -> brand -> nationality}}
            </div>
            <div class="pilot">
                @foreach ($item -> pilots as $pilot)
                <span>
                    pilota
                </span>
                <a href="{{route('pilot',$pilot->id)}}">
                    {{$pilot -> name}}

                </a>
                @endforeach

            </div>
        </li>
        @endforeach
    </ul>

@endsection
