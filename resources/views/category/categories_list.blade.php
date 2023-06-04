<div class="container mb-4    bg-light py-3 pb-5 categories-container ">
    {{-- <p><a class="font-weight-bold text-primary" href="{{ route('category.index') }}">Đi đến tất cả danh mục</a></p> --}}
    <div class="row">
        <div class="col-md-5">
            <div class=" box-categories">
                @foreach ($categories as $key => $category)
                    @if ($category->parent_id == $parent->id)
                        <a href="{{ route('category.show', ['id' => $category->slug]) }}">{{ $category->name }}
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                @foreach ($parent->posts()->latest()->limit(3)->get() as $post)
                    <div class=" col-4   px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img" style="height: 130px"><img src="{{ $post->thumbnail }}"
                                    alt="" />
                            </div>
                            <div class="pt-1">
                                <a href="{{ route('post.show', ['id' => $post->slug]) }}"
                                    class="d-block fh5co_small_post_heading">
                                    <span class="">{{ $post->title }} </span>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>





{{-- @foreach ($categories as $parent)
    @if ($parent->parent_id == null)
        <div class="col-md-3 box-categories">
            <p> <a href="{{ route('category.show', ['id' => $parent->slug]) }}">{{ $parent->name }}</a></p>
            <ul class="pl-3">
                @foreach ($categories as $category)
                    @if ($category->parent_id == $parent->id)
                        <li>
                            <a href="{{ route('category.show', ['id' => $category->slug]) }}">{{ $category->name }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
@endforeach --}}
