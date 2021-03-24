
@extends('layouts.app-demo')
@section('content')
<div class="container">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Phân công</th>
				<th scope="col">Database</th>
				<th scope="col">Front-End</th>
				<th scope="col">Back-End</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">Thiều Chí Thiện</th>
				<td></td>
				<td></td>
				<td><i class="fas fa-check"></i></td>
			</tr>
			<tr>
				<th scope="row">Đặng Hoàng Huy</th>
				<td></td>
				<td></td>
				<td><i class="fas fa-check"></i></td>
			</tr>
			<tr>
				<th scope="row">Trần Chí Hữu</th>
				<td></td>
				<td><i class="fas fa-check"></i></td>
				<td></td>
			</tr>
			<tr>
				<th scope="row">Nguyễn Thành Liêm</th>
				<td></td>
				<td><i class="fas fa-check"></i></td>
				<td></td>
			</tr>
			<tr>
				<th scope="row">Nguyễn Kim Long</th>
				<td><i class="fas fa-check"></i></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<p class="text-center">
		<button class="btn btn-dark" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Front-End</button>
		<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Back-End</button>
		<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Database</button>
	</p>
	<div class="row">
		<div class="col">
			<div class="collapse multi-collapse" id="multiCollapseExample1">
			<div class="card card-body">
			Front-end: Thiết kế giao diện trang chủ, danh mục, chi tiết sản phẩm. Phối hợp với Back-End để hiển thị dữ liệu lên Website.
			</div>
			</div>
		</div>
		<div class="col">
			<div class="collapse multi-collapse" id="multiCollapseExample2">
			<div class="card card-body">
			Back-End: Phối hợp với Database để làm các hàm xử lý dữ liệu, trả lại kết quả cho Front-End hiển thị lên Website.
			</div>
			</div>
		</div>
		<div class="col">
			<div class="collapse multi-collapse" id="multiCollapseExample3">
			<div class="card card-body">
			Database: Thiết kế database theo đặc tả. Truyền tải ý đồ, thông tin dữ liệu cho Back-End để thực hiện thao tác dữ liệu.
			</div>
			</div>
		</div>
	</div>
</div>
@endsection