@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                    <div class="card-body row justify-content-center">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col" class="">#</th>
                                            <th scope="col" class="">Title</th>
                                            <th scope="col" class="">Price</th>
                                            <th scope="col" class="">Sale Price</th>
                                            <th scope="col" class="">Description</th>
                                            <th scope="col" class="">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dichvus as $dichvu)
                                        <tr class="text-center">
                                            <th scope="row">{{$dichvu->id}}</th>
                                            <td class="align-items-center"><a href="{{route('dich-vu.show',$dichvu->id)}}">{{$dichvu->name_service}}</a></td>
                                            <td class="align-items-center">{{$dichvu->price}}</td>
                                            <td class="align-items-center">{{$dichvu->sale_price}}</td>
                                            <td class="align-items-center">{{$dichvu->description}}</td>
                                            <td class="d-flex align-items-center justify-content-around border-bottom-0 border-right-0 border-left-0">
                                                <form action="{{route('dich-vu.edit',$dichvu->id)}}" method="get">
                                                    <button class="btn btn-md btn-primary rounded-5">
                                                    Edit
                                                    </button>
                                                </form>
                                                <form action="{{route('dich-vu.destroy',$dichvu->id)}}" method="post">
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
                                    <div class="d-flex justify-content-center">{{$dichvus->links()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
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
</div>

@endsection