@extends('layouts.app-demo')

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
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="">#</th>
                                        <th scope="col" class="">Title</th>
                                        <th scope="col" class="">Description</th>
                                        <th scope="col" class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($danhmucs as $danhmuc)
                                    <tr class="text-center">
                                        <th scope="row">{{$danhmuc->id}}</th>
                                        <td><a href="{{route('danh-muc.show',$danhmuc->id)}}">{{$danhmuc->name_cate}}</a></td>
                                        <td>{{$danhmuc->description}}</td>
                                        <td class="d-flex align-items-center justify-content-around">
                                        <form action="{{route('danh-muc.edit',$danhmuc->id)}}" method="get">
                                            <button class="btn btn-md btn-primary rounded-5">
                                            Edit
                                            </button>
                                        </form>
                                        <form action="{{route('danh-muc.destroy',$danhmuc->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-md btn-danger rounded-5">
                                            Delete
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @elseif($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
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