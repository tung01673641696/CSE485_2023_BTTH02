@extends('commonAdmin')

@section('content')
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="add_author.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Tác Giả</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($author as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->ten_tgia}}</td>
                            <td>
                              <a href="" class="btn btn-warning">Edit</a>
                              <form method="post" action="" style="display: inline">
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
