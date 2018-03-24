@extends('layouts/admin')
@section('title', 'Category Management')

@section('content')


<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Thêm mới danh mục</h3>
    </div>
    <div class="box-body">
    	<div class="row">
			<form action="{{ route('categories.store') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Tên danh mục</label>
					<input type="text" class="form-control" placeholder="Tên danh mục..." name="name">
				</div>
				<div class="form-group">
					<label for="">Danh mục cha</label>
					<select name="parent_id" id="" class="form-control">
						<option value="">Chọn danh mục</option>
						@foreach ($categories as $c)
							<option value="{{ $c->id }}">{{ $c->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="" class="form-control">
						<option value="">Chọn trạng thái</option>
						<option value="0">Ẩn</option>
						<option value="1">Hiện</option>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit"><i class="fa fa-plus"></i>Thêm mới</button>
				</div>
			</form>
		</div>
    </div>
  </div>



@endsection

