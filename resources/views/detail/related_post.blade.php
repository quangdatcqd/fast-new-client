<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin tức liên quan</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach ($postRelated as $post)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="{{ $post->thumbnail }}" alt="" /></div>
                        <div>
                            <a href="{{ route('post.show', ['id' => $post->slug]) }}"
                                class="d-block fh5co_small_post_heading">
                                <span class="">{{ $post->title }}</span>
                            </a>
                            <div class="c_g"><i class="fa fa-clock-o"></i>
                                {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y - h:m') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
