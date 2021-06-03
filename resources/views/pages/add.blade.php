@extends('layouts.main_layout')
@section('content')
<form method="post" action="{{route('add_function')}}">
    @method('post')
    @csrf
    <div class="car_form">
        <h2>car</h2>
        <label for="">Name</label>
        <input type="text" name="name" id="">
        <label for="">Model</label>
        <input type="text" name="model" id="">
        <label for="">Potenza</label>
        <input type="number" name="kW" id="">
    </div>
    <div>
        <div>

            <select name="brand_id" id="">
                <option value="">Nessuno</option>
                @foreach ($brand as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="pilot_id" id="">
                <option value="">Nessuno</option>
                @foreach ($pilot as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

        </div>
    </div>
    <button type="submit">Add</button>
</form>
@endsection
