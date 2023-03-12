@extends('commonAdmin')

@section('content')
  <main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm Bài Viết</h3>

            <form action="{{url('save-article')}}" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên bài viết</span>
                    <input type="text" class="form-control" name="nameArticle"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                    <input type="text" class="form-control" name="title"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                    <input type="text" class="form-control" name="nameSong"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mã thể loại</span>
                    <select name="theloai">
                        @foreach ($category as $cate)
                            <option value="{{ $cate->ma_tloai }}">{{ $cate->ten_tloai }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                    <input type="text" class="form-control" name="summary"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Nội dung</span>
                    <input type="text" class="form-control" name="content"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mã tác giả</span>
                    <select name="tacgia">
                        @foreach ($author as $auth)
                            <option value="{{ $auth->ma_tgia }}">{{ $auth->ten_tgia }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Ngày viết</span>
                    <input type="date" class="form-control" name="date"/>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Hình ảnh</span>
                    <input type="file" class="form-control" name="image"/>
                </div>

                <div class="form-group float-end ">
                    <button name="add" class="btn btn-primary">Add</button>
                    <a href="{{url("article")}}" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
  </main>

@endsection
