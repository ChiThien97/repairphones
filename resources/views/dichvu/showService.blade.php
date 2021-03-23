@extends('layouts.app2')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    <div>
                        <h2>{{ $dichvu->name_service }}</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <img class="card-img-top m-auto" style="width:40%" src="../images/{{ $dichvu->image }}" alt="{{ $dichvu->description }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dichvu->name_service }}</h5>
                            <p class="card-text">{{ $dichvu->description }}</p>
                            <div class="row px-0 pt-3 justify-content-center align-items-center border-top">
                                <div class="col-6 text-danger font-weight-bold  border-right">
                                    {{ number_format($dichvu->sale_price) }} VNĐ
                                </div>
                                <div class="col-6">
                                    <del>{{ number_format($dichvu->price) }} VNĐ </del>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="pull-right mt-3">
                        <a href="{{ route('dich-vu.index') }}" class="btn btn-success">Trở lại danh sách dịch vụ</a>
                        <a href="{{ route('dich-vu.edit', $dichvu->id) }}" class="btn btn-primary">Sửa dịch vụ</a>
                        
                        <form class="mt-3" action="{{ route('dich-vu.destroy', $dichvu->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Xóa dịch vụ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection