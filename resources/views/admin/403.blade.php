@extends('layouts/admin')
@section('title', '403 Permission denied')

@section('content')


<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Bạn không có quyền truy cập! 
      	<a href="{{ route('dashboard') }}">Quay lại</a>
      </h3>
    </div>
</div>



@endsection

