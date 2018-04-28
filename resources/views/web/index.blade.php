@extends('layouts.web')

@section('body')

<div class="container">
    <div class="row">
        <div class="post-list">

			@foreach ($posts as $post)
            <div class="col-md-4">
                <div class="post-single">
                    <ul class="post-cat">
                        <li><a href="#">interface</a>
                        </li>
                        <li><a href="#">standard</a>
                        </li>
                    </ul>
                    <div class="post-img">
                        <a href="{{ route('web.show', $post->id) }}">
                            <img src="{{ asset($post->image) }}" alt="">
                        </a>
                    </div>
                    <div class="post-desk">
                        <h4 class="text-uppercase">
                            <a href="{{ route('web.show', $post->id) }}">{{ $post->name }}</a>
                        </h4>
                        <div class="date">
                            <a href="#" class="author">martin smith</a> {{ $post->created_at }}
                        </div>
                        <p>
                            {!! $post->description !!}
                        </p>
                        <a href="{{ route('web.show', $post->id) }}" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                    </div>
                </div>
            </div>
			@endforeach

            <div class="col-md-12">
                <!--pagination-->
                <div class="text-center">
                    {{$posts->links()}}
                </div>
                <!--pagination-->
            </div>

        </div>
    </div>
</div>

@endsection