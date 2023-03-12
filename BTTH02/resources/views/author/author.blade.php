@extends('commonAdmin')

@section('content')
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="{{url('add-author')}}" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã Tác Giả</th>
                        <th scope="col">Tên Tác Giả</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($author as $item)
                        <tr>
                            <th scope="row">{{$item->ma_tgia}}</th>
                            <td>{{$item->ten_tgia}}</td>
                            <td>
                              <a href="{{url('edit-author/'.$item->ma_tgia)}}" class="btn btn-warning">Edit</a>
                              <form method="POST" action="{{url('delete-author/'.$item->ma_tgia)}}" style="display: inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
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
