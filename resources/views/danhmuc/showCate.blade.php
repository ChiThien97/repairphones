@extends('layouts.app2')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    <div>
                        <h2>{{ $danhmuc->name_cate }}</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <img class="card-img-top m-auto" style="width:40%" src="../images/{{ $danhmuc->image }}" alt="{{ $danhmuc->description }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $danhmuc->name_cate }}</h5>
                            <p class="card-text">{{ $danhmuc->description }}</p>
                            <a href="{{ route('dich-vu.index') }}">Xem danh sách dịch vụ của danh mục <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="pull-right mt-3">
                        <a href="{{ route('danh-muc.index') }}" class="btn btn-success">Trở lại danh sách danh mục</a>
                        <a href="{{ route('danh-muc.edit', $danhmuc->id) }}" class="btn btn-primary">Sửa danh mục</a>
                        
                        <form class="mt-3" action="{{ route('danh-muc.destroy', $danhmuc->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Xóa danh mục</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection