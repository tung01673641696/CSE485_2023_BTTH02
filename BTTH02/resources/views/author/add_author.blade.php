@extends('commonAdmin')

@section('content')

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm Tác Giả</h3>

            <form action="{{url('save-author')}}" method="post">
                @csrf
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                    <input type="text" class="form-control" name="nameAuthor"/>
                </div>

                <div class="form-group float-end ">
                    <button type="submit" class="btn btn-primary">Thêm tác giả</button>
                    <a href="{{url('author')}}" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection