@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{url('categories/create')}}" class="btn btn-primary btn-lg">Create</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table-bordered table table-hover">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cats as $cat )
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}
                                <div class="btn-group float-right ">
                                    <form id="form-{{$cat->id}}" action="{{url('categories/'.$cat->id)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$cat->id}}">
                                        <button onclick="delete_cat({{$cat->id}})" class=" btn btn-danger "
                                                type="button">delete
                                        </button>
                                    </form>
                                    <a class="btn btn-warning">edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function delete_cat(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#form-' + id).submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        }
    </script>
@endsection