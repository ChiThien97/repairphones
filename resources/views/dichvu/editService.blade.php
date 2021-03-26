@extends('layouts.app-demo')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Sửa dịch vụ') }}</h3></div>
                <div class="card-body">
                    <form action="{{ route('dich-vu.update' , $dichvu->id) }}" method="POST" enctype="multipart/form-data">
                    <!--Tạo token để chống tấn công CSRF (Cross-site Request Forgery)-->
                    @method('PATCH')
                    @csrf 
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="category-list">Danh mục</label>
                            
                            <select name="idCate" style="margin-left:15px !important" class="col-sm-8 custom-select" id="category-list">
                               
                                @foreach($danhmucs as $danhmuc)
                                @if($danhmuc->id == $dichvu->id_cate)
                                <option value="{{ $danhmuc->id }}" selected>{{ $danhmuc->name_cate }}</option>
                                @else
                                <option value="{{ $danhmuc->id }}">{{ $danhmuc->name_cate }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="nameService" class="col-sm-3 col-form-label">Tên dịch vụ</label>
                            <div class="col-sm-9">
                                <input name="nameService" type="text" class="form-control" id="nameService" value="{{ $dichvu->name_service }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">Giá niêm yết</label>
                            <div class="col-sm-9">
                                <input name="price" type="text" class="form-control" id="price" value="{{ $dichvu->price }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="salePrice" class="col-sm-3 col-form-label">Giá khuyến mại</label>
                            <div class="col-sm-9">
                                <input name="salePrice" type="text" class="form-control" id="salePrice" value="{{ $dichvu->sale_price }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description">{{ $dichvu->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file-image" class="col-sm-3 col-form-label">Ảnh dịch vụ</label>
                            <div style="margin-left:15px !important" class="col-sm-8 custom-file">
                                <input name="image" type="file" class="custom-filt" id="file-image" value="/images/{{ $dichvu->image }}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Sửa dịch vụ</button>
                            </div>
                        </div>
                    </form>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block text-center">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                            @if( Session::get('image') == 'Không có thay đổi hình ảnh')
                            <p>{{ Session::get('image') }}</p>
                            @else
                            <img src="/images/{{ Session::get('image') }}">
                            @endif
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