@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="col-sm-8">
                        <h2>{{ __('Danh sách dịch vụ') }}</h2>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{ route('dich-vu.create') }}"><button class="btn btn-primary">Thêm mới dịch vụ</button></a>
                    </div>
                </div>
                <div class="card-body">
                    @if( isset($message) ) 
                    <div class="alert alert-success" role="alert">
                        Thêm dịch vụ mới thành công !!!
                    </div>
                    @endif
                    <ul>
                    @foreach($dichvus as $dichvu)
                        <li>
                            <h3>{{$dichvu->name_service}}</h3>
                        </li>
                    @endforeach
                    </ul>
                </div>
                {{ $dichvus->links()}}
            </div>
        </div>
    </div>
</div>

@endsection