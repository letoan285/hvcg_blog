@extends('layouts/admin')
@section('title', 'Category Management')

@section('content')


<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Quan ly danh muc</h3>
    </div>
    <div class="box-body">
    	<div class="row">
			<div class="col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên danh mục</th>
							<th>Danh mục cha</th>
							<th>Trạng thái</th>
							<th>
								<a class="btn btn-success" href="{{ route('categories.create') }}">
									<i class="fa fa-plus"></i>
								</a>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($categories as $category)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $category->name }}</td>
							<td>{{ $category->parent_id }}</td>
							<td>{{ $category->status }}</td>
							<td>
								<a class="btn btn-sm btn-info" href="">
									<i class="fa fa-pencil"></i>
								</a>
								<a class="btn btn-sm btn-danger" href=""><i class="fa fa-times"></i></a>
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

