@extends('layouts.public-layout')

@section('content')

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $post->category }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div><!-- /.container -->
<!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
        <div class="row">
			<div class="col-md-12 my-wishlist">
                <div style="background:white;border-radius:5px; border:1px solid #ded7d7a1;margin-bottom:10px">
                    <h1 class="text-left" style="padding-left:10px;">
                        {{ $post->title }}
                        <sub><span style="font-size:12px;font-weight:600;color:#38343494;">Post by: __{{ $post->author }}</span></sub>
                    </h1>
                        <hr/>
                        <div style="padding:0px 15px;text-align:justify">
                            {!! $post->content !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection