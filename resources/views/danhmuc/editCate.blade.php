@extends('layouts.app-demo')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Sửa danh mục') }}</h3></div>
                <div class="card-body">
                    <form action="{{ route('danh-muc.update' , $danhmuc->id) }}" method="POST"  enctype="multipart/form-data">
                    <!--Tạo token để chống tấn công CSRF (Cross-site Request Forgery)-->
                    @method('PATCH')
                    @csrf 
                        <div class="form-group row">
                            <label for="nameCate" class="col-sm-3 col-form-label">Tên danh mục</label>
                            <div class="col-sm-9">
                                <input name="nameCate" type="text" class="form-control" id="nameCate" value="{{ $danhmuc->name_cate }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description" >{{ $danhmuc->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file-image" class="col-sm-3 col-form-label">Ảnh danh mục</label>
                            <div class="col-sm-8 " id="file-image">
                                <div class="row">
                                    <a class="btn btn-sm btn-warning col-sm-3" data-toggle="collapse" data-target="#hinhanh">Sửa ảnh</a>
                                    <p class="col-sm-9">{{ $danhmuc->image }}</p>
                                </div>
                                <div id="hinhanh" style="margin-left:15px !important" class="collapse custom-file">
                                    <input name="image" type="file" class="custom-filt"  value="/images/{{ $danhmuc->image }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Sửa danh mục</button>
                            </div>
                        </div>
                    </form>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @if( Session::get('image') == 'Không có thay đổi hình ảnh')
                    <p>{{ Session::get('image') }}</p>
                    @else
                    <img src="/images/{{ Session::get('image') }}">
                    @endif
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