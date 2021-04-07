@extends('layouts.app-demo')
@section('content')
    <div class="container mt-2">
        <div class="featured">
          <div class="card-header">
            <h1>Có <?php echo $dichvus->count() ?> kết quả tìm kiếm:</h1>
          </div>
          <p class="card-title mt-3" style="cursor: pointer;"><i><a>{{$message}}</a></i></p>
          <div class="row mt-3">
                @foreach($dichvus as $dichvu)
                <div class="services col-lg-3 col-md-4 col-sm-6 px-2">
                    <div class="card">
                        <a href="{{ route('dich-vu.show',$dichvu->id) }}">
                            <img class="card-img-top" src="images/{{$dichvu->image}}" alt="{{$dichvu->name_service}}">
                            <div class="card-body p-2">
                                <h5 class="card-title text-dark">{{$dichvu->name_service}}</h5>
                                <div class="d-flex justify-content-around">
                                    @if($dichvu->sale_price != 0)
                                    <h6 class="text-danger">{{ number_format($dichvu->sale_price) }} VNĐ</h6>
                                    <h6 class="text-dark"><del>{{ number_format($dichvu->price) }} VNĐ<del></h6>
                                    @else
                                    <h6 class="text-danger">{{ number_format($dichvu->price) }} VNĐ</h6>
                                    @endif
                                </div>    
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</body>
</html>
@endsection