@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('sections.store')}}">
        {{csrf_field()}}
        <input class="form-control col-md-3" placeholder="name" name="name">
        <input type="color" class=" col-md-3" name="color" placeholder="note">
        <input class="btn btn-primary" type="submit" value="save">
    </form>
@endsection



