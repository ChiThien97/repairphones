@extends('layouts.app2')

@section('content')
<div class="container pt-5">
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
                <div class="card-body">
                    <h1>{{ $danhmuc->title }}</h1>
                    <p class="lead">{{ $danhmuc->description }}</p>
                    <hr>

                    <a href="{{ route('danh-muc.index') }}" class="btn btn-info">Trở lại danh sách danh mục</a>
                    <a href="{{ route('danh-muc.edit', $danhmuc->id) }}" class="btn btn-primary">Sửa danh mục</a>

                    <div class="pull-right">
                        <a href="#" class="btn btn-danger">Delete this danhmuc</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection