@extends('commonAdmin')

@section('content')
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="{{url('add-article')}}" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã bài viết</th>
                        <th scope="col">Tên bài viết</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Tên bài hát</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($article as $item)
                        <tr>
                            <th scope="row">{{$item->ma_bviet}}</th>
                            <td>{{$item->ten_bviet}}</td>
                            <td>{{$item->tieude}}</td>
                            <td>{{$item->ten_bhat}}</td>
                            <td>{{$item->ten_bviet}}</td>
                            <td>
                              <a href="" class="btn btn-warning">Edit</a>
                              <form method="post" action="{{url('delete-article/'.$item->ma_bviet)}}" style="display: inline">
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
