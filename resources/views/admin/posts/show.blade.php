@extends('layouts/admin')
@section('title', 'Chi tiết bài viết')

@section('content')


<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Chi tiết bài viết</h3>
    </div>
    <div class="box-body">
    	<div class="row">
			<h3>Tiêu đề bài viết</h3>
			<p>{{ $post->name }}</p><hr>
			<div class="col-md-4">
				<img src="" alt="">
			</div>
			<div class="col-md-8">
				<p>{{ $post->description }}</p>
			</div>
			<strong>Ngày đăng : </strong> <span>{{ $post->created_at }}</span><br>
			<strong>Thuộc danh mục:  </strong>
			<span class="label label-primary">
				{{ $post->getCateName($post->id) }}
			</span>
		</div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a class="btn btn-primary" href="{{ route('posts.index') }}">Trở lại danh sách bài viết</a>
    </div>
    <!-- /.box-footer-->
  </div>



@endsection

