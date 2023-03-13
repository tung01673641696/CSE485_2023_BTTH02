@extends('commonAdmin')

@section('content')
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="{{url('add-category')}}" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã Thể Loại</th>
                        <th scope="col">Tên Thể Loại</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                        <tr>
                            <th scope="row">{{$item->ma_tloai}}</th>
                            <td>{{$item->ten_tloai}}</td>
                            <td>
                              <a href="{{url('edit-category/'.$item->ma_tloai)}}" class="btn btn-warning">Edit</a>
                              <form method="post" action="{{url('delete-category/'.$item->ma_tloai)}}" style="display: inline">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                              </form>
                              
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
