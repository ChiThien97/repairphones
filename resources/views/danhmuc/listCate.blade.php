@extends('layouts.app2')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    @if( isset($message) ) 
                    <div class="alert alert-success" role="alert">
                        Thêm danh mục mới thành công !!!
                    </div>
                    @endif
                    <ul>
                    @foreach($danhmucs as $danhmuc)
                        <li>
                            <h3>{{$danhmuc->name_cate}}</h3>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection