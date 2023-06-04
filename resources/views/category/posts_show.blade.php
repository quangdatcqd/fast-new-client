@extends('layouts.main')
@section('title', 'Danh mục | ' . $category->name)
@section('category-active', 'active')
@section('main')
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box minHeight-50vh" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-2 ">
                            <a href="{{ route('home') }}">
                                <i class="fa fa-home"></i> </a>>

                            @if ($category->parent_id != null)
                                <a href="{{ route('category.show', ['id' => $category->parent->slug]) }}">
                                    {{ $category->parent->name }} </a>>
                            @endif
                            {{ $category->name }}
                        </div>
                        @if ($category->parent_id == null)
                            <div class="mb-4">
                                @foreach ($category->childrens as $cate)
                                    <a href="{{ route('category.show', ['id' => $cate->slug]) }}"
                                        class="nav-category text-primary mx-2">{{ $cate->name }}</a>
                                @endforeach
                            </div>
                        @endif

                    </div>

                    @foreach ($posts as $post)
                        {{-- {{ dd($postsLeft) }} --}}
                        <div class="row pb-4 ">
                            <div class="col-md-5">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img"><img src="{{ $post->thumbnail }}" alt="" />
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-7 animate-box">
                                <a href="{{ route('post.show', ['id' => $post->slug]) }}" class="fh5co_magna py-2">
                                    {{ $post->title }} </a>
                                {{-- <a href="single.html" class="fh5co_mini_time py-3">{{ $post['thumbnail'] }} </a> --}}
                                <div class="fh5co_consectetur"> {{ $post->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @include('home.popular_posts')

            </div>
            {{ $posts->links('vendor.pagination.default') }}

        </div>
    </div>

@endsection
