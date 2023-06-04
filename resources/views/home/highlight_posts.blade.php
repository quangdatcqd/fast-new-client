<div class="container-fluid pb-3 pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin nổi bật</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach ($highLightPosts as $post)
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ $post->thumbnail }}" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('post.show', ['id' => $post->slug]) }}" class="text-white">
                                {{ $post->title }}
                            </a>
                            <div class="fh5co_latest_trading_date_and_name_color">
                                <i class="fa fa-user-o"></i>
                                <a href="">
                                    {{ $post->user->name }}
                                </a>
                                |
                                <a href="{{ route('category.show', ['id' => $post->category->slug]) }}">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
