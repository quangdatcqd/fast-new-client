<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="{{ $newPosts[0]->thumbnail }}" alt="img" />
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class="mb-1"><a class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                            {{ \Carbon\Carbon::parse($newPosts[0]->created_at)->format('d-m-Y') }}
                        </a>
                        |
                        <a class="category-name"
                            href="{{ route('category.show', ['id' => $newPosts[0]->category->slug]) }}">{{ $newPosts[0]->category->name }}
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('post.show', ['id' => $newPosts[0]->slug]) }}" class="fh5co_good_font">
                            {{ $newPosts[0]->title }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ $newPosts[1]->thumbnail }}" alt="img" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class="mb-1">
                                <a class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                    {{ \Carbon\Carbon::parse($newPosts[1]->created_at)->format('d-m-Y') }}
                                </a>
                                |
                                <a class="category-name"
                                    href="{{ route('category.show', ['id' => $newPosts[1]->category->slug]) }}">{{ $newPosts[1]->category->name }}
                                </a>
                            </div>
                            <div class="">
                                <a href="{{ route('post.show', ['id' => $newPosts[1]->slug]) }}"
                                    class="fh5co_good_font w-100">
                                    {{ $newPosts[1]->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ $newPosts[2]->thumbnail }}" alt="img" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class="mb-1">
                                <a class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                    {{ \Carbon\Carbon::parse($newPosts[2]->created_at)->format('d-m-Y') }}
                                </a>
                                |
                                <a class="category-name"
                                    href="{{ route('category.show', ['id' => $newPosts[2]->category->slug]) }}">{{ $newPosts[2]->category->name }}
                                </a>
                            </div>
                            <div class="">
                                <a href="{{ route('post.show', ['id' => $newPosts[2]->slug]) }}"
                                    class="fh5co_good_font w-100">
                                    {{ $newPosts[2]->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ $newPosts[3]->thumbnail }}" " alt="img" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class="mb-1">
                                <a class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                    {{ \Carbon\Carbon::parse($newPosts[3]->created_at)->format('d-m-Y') }}
                                </a>
                                |
                                <a class="category-name"
                                    href="{{ route('category.show', ['id' => $newPosts[3]->category->slug]) }}">{{ $newPosts[3]->category->name }}
                                </a>
                            </div>
                            <div class="">
                                <a href="{{ route('post.show', ['id' => $newPosts[3]->slug]) }}"
                                    class="fh5co_good_font w-100">
                                    {{ $newPosts[3]->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ $newPosts[4]->thumbnail }}"  alt="img" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class="mb-1">
                                <a class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                    {{ \Carbon\Carbon::parse($newPosts[4]->created_at)->format('d-m-Y') }}
                                </a>
                                |
                                <a class="category-name"
                                    href="{{ route('category.show', ['id' => $newPosts[4]->category->slug]) }}">{{ $newPosts[4]->category->name }}
                                </a>
                            </div>
                            <div class="">
                                <a href="{{ route('post.show', ['id' => $newPosts[4]->slug]) }}"
                                    class="fh5co_good_font w-100  ">
                                    {{ $newPosts[4]->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
