<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Thế giới</div>
                </div>
                @foreach ($category2 as $post)
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="{{ $post->thumbnail }}" alt="" />
                                </div>
                                {{-- <div></div> --}}
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="{{ route('category.show', ['id' => $post->slug]) }}" class="fh5co_magna py-2">
                                {{ $post->title }} </a>
                            <br>
                            <a href="#" class="fh5co_mini_time py-1">
                                {{ $post->user->name }}
                            </a>-
                            {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}

                            <div class="fh5co_consectetur"> {{ $post->description }} </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('home.popular_posts')
        </div>

    </div>
</div>
