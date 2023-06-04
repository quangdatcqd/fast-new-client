<div class="container-fluid pb-1 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">XÃ HỘI</div>
                </div>
                @foreach ($category1 as $post)
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="{{ $post->thumbnail }}" alt="" />
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <div>
                                <a href="{{ route('post.show', ['id' => $post->slug]) }}" class="fh5co_magna py-2">
                                    {{ $post->title }}
                                </a>
                            </div>
                            <div class="py-1">
                                <a href="single.html" class="fh5co_mini_time py-0"><i class="fa fa-user-o"></i>
                                    {{ $post->user->name }} -
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }} </a>
                            </div>

                            <div class="fh5co_consectetur">
                                {{ $post->description }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                @include('home.tags')
            </div>
        </div>

    </div>
</div>
