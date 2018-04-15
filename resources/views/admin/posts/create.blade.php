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
						@if (count($errors->has('name'))> 0)
							<span class="help-block">
								<strong style="color:red;">{{$errors->first('name')}}</strong>
							</span>
						@endif
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
						<label for="">Chọn thẻ tags</label>
						<select name="tags[]" id="" class="form-control multi-option" multiple>
							@foreach ($tags as $tag)
								<option value="{{$tag->id}}">{{$tag->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<textarea name="description" class="form-control" cols="10" rows="10" placeholder="Nội dung bài viết..."></textarea>
						@if (count($errors->has('description'))> 0)
							<span class="help-block">
								<strong style="color:red;">{{$errors->first('description')}}</strong>
							</span>
						@endif
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

@section('js')
<script>
	
	$(document).ready(function(){
		$('.multi-option').select2();
	});
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        // CKEDITOR.replace('content');
        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '{!! asset('plugins/ckfinder/ckfinder.html') !!}',
            filebrowserImageBrowseUrl: '{!! asset('plugins/ckfinder/ckfinder.html?type=Images') !!}',
            filebrowserFlashBrowseUrl: '{!! asset('plugins/ckfinder/ckfinder.html?type=Flash') !!}',
            filebrowserUploadUrl: '{!! asset('plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') !!}',
            filebrowserImageUploadUrl: '{!! asset('plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') !!}',
            filebrowserFlashUploadUrl: '{!! asset('plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') !!}'
        });
    });
</script>

@endsection

