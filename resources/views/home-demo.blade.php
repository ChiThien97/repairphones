
@extends('layouts.app-demo')
@section('content')
    <!-- Hero Section Begin -->
    <section class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/7.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Hero Section End -->
    <section>
        
            
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="section-title text-left mt-5">
                <h2 class="text-uppercase">Danh mục sửa chữa</h2>
            </div>
            <div class="row">
                @foreach($danhmucs as $danhmuc)
                <div class="col-lg-3 col-md-6 col-sm-6 justify-content-center categories__item">
                    <img  src="images/{{$danhmuc->image}}" alt="" class="img-thumbnail">
                    <h5 class="text-center">
                        <a href="{{route('danh-muc.show',$danhmuc->id)}}">
                        <span><?php $danhmuc->name_cate = substr($danhmuc->name_cate, 12, strlen($danhmuc->name_cate)); echo $danhmuc->name_cate ?></span>
                        </a>
                    </h5>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left mt-5">
                        <h2 class="text-uppercase">Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($dichvus as $dichvu)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2">
                    <div class="card">
                        <a href="{{ route('dich-vu.show',$dichvu->id) }}">
                            <img class="card-img-top" src="images/{{$dichvu->image}}" alt="{{$dichvu->name_service}}">
                            <div class="card-body p-2">
                                <h5 class="card-title text-dark">{{$dichvu->name_service}}</h5>
                                <div class="d-flex justify-content-around">
                                    @if($dichvu->sale_price != 0)
                                    <h6 class="text-danger">{{ number_format($dichvu->sale_price) }} VNĐ</h6>
                                    <h6 class="text-dark"><del>{{ number_format($dichvu->price) }} VNĐ<del></h6>
                                    @else
                                    <h6 class="text-danger">{{ number_format($dichvu->price) }} VNĐ</h6>
                                    @endif
                                </div>    
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
    @endsection