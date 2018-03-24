@extends('layouts/admin')
@section('title', 'Quản lý bài viết')

@section('content')


<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Quản lý bài viết</h3>
    </div>
    <div class="box-body">
    	<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Ảnh</th>
							<th>Tên bài viết</th>
							<th>Slug</th>
							<th>Nội dung bài viết</th>
							<th>Danh mục</th>
							<th>Trạng thái</th>
							<th>
								<a class="btn btn-success" href="{{ route('posts.create') }}">
									<i class="fa fa-plus"></i>
								</a>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($posts as $post)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $post->image }}</td>
								<td><a href="{{ route('posts.show', ['id'=>$post->id]) }}">{{ $post->name }}</a></td>
								<td>{{ $post->slug }}</td>
								<td>{{ str_limit($post->description, 100) }}</td>
								<td>{{ $post->getCateName($post->category_id) }}</td>
								<td>{{ $post->status }}</td>
								<td>
									<a class="btn btn-info" href="{{ route('posts.edit', ['id'=>$post->id]) }}">
										<i class="fa fa-pencil"></i>
									</a>
									<a class="btn btn-danger" href="{{ route('posts.destroy', ['id'=>$post->id]) }}">
										<i class="fa fa-times"></i>
									</a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

  
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>



@endsection

