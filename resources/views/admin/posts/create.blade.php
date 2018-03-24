@extends('layouts/admin')
@section('title', 'Thêm mới bài viết')

@section('content')


<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Thêm mới bài viết</h3>
    </div>
    <div class="box-body">
    	<div class="row">
			<div class="col-md-12">
				<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">Tên bài viết</label>
						<input type="text" name="name" class="form-control" placeholder="Tên bài viết...">
					</div>
					<div class="form-group">
						<label for="">Ảnh đại diện</label>
						<input type="file" class="form-control" name="image" >
					</div>
					<div class="form-group">
						<label for="">Danh mục</label>
						<select name="category_id" id="" class="form-control">
							<option value=""> -- Chọn danh mục -- </option>
							@foreach ($categories as $c)
								<option value="{{ $c->id }}">{{ $c->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">Trạng thái</label>
						<select name="status" id="" class="form-control">
							<option value="1">Hiện</option>
							<option value="0">Ẩn</option>
						</select>
					</div>
					<div class="form-group">
						<textarea name="description" class="form-control" cols="10" rows="10" placeholder="Nội dung bài viết..."></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Thêm mới</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>



@endsection

