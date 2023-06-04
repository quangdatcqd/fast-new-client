@extends('layouts.main')
@section('title', 'Trang tin tức tổng hợp | Tin nhanh')
@section('main')

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container  ">

            <form id="form-search" method="">
                <div class=" input-group ">
                    <input type="text" class="search-input input-group px-2  " autofocus placeholder="Tìm kiếm"
                        value="{{ $keyword }}" name="keyword">
                    <button class="btn   search-btn ml-1" type="submit">Tìm kiếm</button>
                </div>
            </form>

        </div>
        <div class="container-fluid pb-1 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div>
                            <div class=" fh5co_heading py-2 mb-4">Có <b>{{ $posts->total() }}</b> kết quả với
                                "<b>{{ $keyword }}</b>"
                            </div>
                        </div>
                        @foreach ($posts as $post)
                            <div class="row pb-4">
                                <div class="col-md-4">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img"><img src="{{ $post->thumbnail }}" alt="" />
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-8 animate-box">
                                    <div>
                                        <a href="{{ route('post.show', ['id' => $post->slug]) }}" class="fh5co_magna py-2">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                    <div class="py-1">
                                        <a href="single.html" class="fh5co_mini_time py-0"><i class="fa fa-user-o"></i>
                                            {{ $post->user->name }}
                                        </a>
                                        -
                                        {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}
                                        -
                                        <a href="{{ route('category.show', ['id' => $post->category->slug]) }}">
                                            {{ $post->category->name }}
                                        </a>


                                    </div>

                                    <div class="fh5co_consectetur">
                                        {{ $post->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div>
                    {{ $posts->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>

    </div>













@endsection
