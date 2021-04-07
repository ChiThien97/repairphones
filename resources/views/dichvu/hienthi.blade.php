@extends('layouts.app-demo')
@section('content')
<section class="featured">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title d-flex justify-content-between mt-5">
                <h2 class="text-uppercase mt-2 mb-0">Sản phẩm nổi bật</h2>
                <a href="{{ route('dich-vu.index') }}" class="btn btn-dark d-flex align-items-center">Xem thêm &nbsp;<i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($dichvus as $dichvu)
        <div class="services col-lg-3 col-md-4 col-sm-6 px-2">
            <div class="card">
                <a href="{{ route('dich-vu.show',$dichvu->id) }}">
                    <img class="card-img-top" src="/images/{{$dichvu->image}}" alt="{{$dichvu->name_service}}">
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