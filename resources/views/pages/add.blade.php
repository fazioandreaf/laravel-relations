@extends('layouts.main_layout')
@section('content')
<form method="post" action="{{route('add_function')}}">
    @method('post')
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="">
    <label for="">Model</label>
    <input type="text" name="model" id="">
    <label for="">Potenza</label>
    <input type="number" name="kW" id="">
    <select name="brand_id" id="">
        @foreach ($brand as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <button type="submit">Add</button>
</form>
@endsection
