<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom pt-2 py-2 mb-4">Xem nhiều</div>
    </div>

    @foreach ($popularPosts as $post)
        <div class="row pb-3">
            <div class="col-5 align-self-center">
                <img src="{{ $post->thumbnail }}" class="fh5co_most_trading" />
            </div>
            <div class="col-7 paddding">
                <div class="most_fh5co_treding_font"> <a href="{{ route('post.show', ['id' => $post->slug]) }}"
                        style="color: black">{{ $post->title }}</a>
                </div>
                {{-- <div class="most_fh5co_treding_font_123"> {{ $post->category->name }}</div> --}}
            </div>
        </div>
    @endforeach


</div>
