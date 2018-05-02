@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="post" action="{{url('categories')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="name" class="form-control" id=""
                                   placeholder="Category name">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        </div>
    </div>

@endsection
