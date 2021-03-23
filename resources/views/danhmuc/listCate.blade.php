@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="col-sm-8">
                        <h2>{{ __('Danh sách danh mục') }}</h2>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{ route('danh-muc.create') }}"><button class="btn btn-primary">Thêm mới danh mục</button></a>
                    </div>
                </div>
                <div class="card-body row justify-content-center">
                    @foreach($danhmucs as $danhmuc)
                    <div class="col-md-6 card text-center">
                        <img class="card-img-top m-auto" src="../images/{{ $danhmuc->image }}" alt="{{ $danhmuc->description }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $danhmuc->name_cate }}</h5>
                            <p class="card-text">{{ $danhmuc->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($dichvus as $dichvu)
                            @if($dichvu->id_cate == $danhmuc->id)
                            <li class="list-group-item">
                                <h3>{{$dichvu->name_service}}</h3>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('danh-muc.show', $danhmuc->id) }}" class="btn btn-success">Xem danh mục</a>
                            <a href="{{ route('danh-muc.edit', $danhmuc->id) }}" class="btn btn-primary">Sửa danh mục</a>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                <img src="/images/{{ Session::get('image') }}">
                @endif
        
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection