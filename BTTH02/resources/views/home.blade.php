@extends('common')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 mt-3 text-primary">TOP bài hát yêu thích</h3>
    <div class="row" style= "margin: 50px 100px">

       
            <div class="col-sm-3" style= "margin-bottom: 30px">
                <div class="card mb-2" style="width: 100%;">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none"></a>
                        </h5>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</main>
@endsection


