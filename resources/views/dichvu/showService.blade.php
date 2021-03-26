@extends('layouts.app-demo')

@section('content')
<div class="container bg-white">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="{{ route('home-demo') }}">Home</a></li>
        <li class="breadcrumb-item">
            <a href="{{ route('danh-muc.show',$dichvu->id_cate) }}">
            @foreach($danhmucs as $danhmuc) 
            @if($danhmuc->id == $dichvu->id_cate) 
            {{ $danhmuc->name_cate }}
            @endif
            @endforeach
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ $dichvu->name_service }}</li>
    </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <img class="m-auto" style="width:80%" src="../images/{{ $dichvu->image }}" alt="{{ $dichvu->description }}">
        </div>
        <div class="col-md-5">
            <div class="text-left">
                <div class="header">
                    <div>
                        <h2>{{ $dichvu->name_service }}</h2>
                    </div>
                </div>
                <div class="body">
                    <div class="row px-0 p-3 justify-content-start align-items-center">
                    @if($dichvu->sale_price != 0)
                        <div class="font-size-lg h3 text-danger font-weight-bold">
                            {{ number_format($dichvu->sale_price) }} VNĐ
                        </div>
                        <div class="pl-3">
                            <del>{{ number_format($dichvu->price) }} VNĐ </del>
                        </div>
                    @else
                        <div class="col-12 text-danger font-weight-bold">
                            {{ number_format($dichvu->price) }} VNĐ
                        </div>
                    @endif
                    </div>
                    <h5 class="title">{{ $dichvu->name_service }}</h5>
                    <pre class="text" style="white-space:break-spaces">{{ $dichvu->description }}</pre>
                    <button type="submit" name="add-to-cart" class="btn btn-danger">
                        <strong>ĐẶT LỊCH SỬA CHỮA</strong><br>
                        <span>RepairphoneS sẽ liên hệ với quý khách trong 15 phút</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            {{view('layouts.side-bar')}}
        </div>
    </div>
</div>
@endsection