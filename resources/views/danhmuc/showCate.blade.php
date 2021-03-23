@extends('layouts.app2')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($dichvus as $dichvu)
                            <li class="list-group-item">
                                <h3>{{$dichvu->name_service}}</h3>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="pull-right mt-3">
                        <a href="{{ route('danh-muc.index') }}" class="btn btn-success">Trở lại danh sách danh mục</a>
                        <a href="{{ route('danh-muc.edit', $danhmuc->id) }}" class="btn btn-primary">Sửa danh mục</a>
                        
                        <form action="{{ route('danh-muc.destroy', $danhmuc->id)}}" method="post">
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