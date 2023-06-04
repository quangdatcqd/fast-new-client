<div class="container text-uppercase mt-4">
    <a href="{{ route('home') }}"><i class="fa fa-home"></i></a> > <a
        href="{{ route('category.show', ['id' => $parentCategory->slug]) }}">
        {{ $parentCategory->name }}</a>
    > <a href="{{ route('category.show', ['id' => $post->category->slug]) }}">{{ $post->category->name }}</a>
</div>
<div class="container  my-1">
    <a href="{{ route('home') }}"><i class="fa fa-user"></i> {{ $post->user->name }}</a> &nbsp;&nbsp;~&nbsp;&nbsp;
    <span
        class="">{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y - h:m') }}</span>&nbsp;&nbsp;~&nbsp;&nbsp;
    <i class=""> <b>{{ $post->views }} </b> lượt xem</i>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">

        <div class="mx-auto row  ">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div class="title-post">
                    <h1 class="title-post"> {{ $post->title }}</h1>
                </div>
                <div class="my-3 list-group-item h6">
                    <i>
                        <h2 class="description-post">{{ $post->description }}</h2>
                    </i>
                </div>
                <div class="content  ">
                    {!! $post->content !!}
                </div>
                <div class="fh5co_tags_all">
                    <b> Từ khoá:</b>
                    @foreach ($post->tags as $tag)
                        <a href="" class="fh5co_tagg">{{ $tag->title }}</a>
                    @endforeach

                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                @include('home.tags')
            </div>
        </div>
    </div>
