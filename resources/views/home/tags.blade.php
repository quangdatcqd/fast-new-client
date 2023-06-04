<div>
    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tìm theo từ khoá</div>
</div>
<div class="clearfix"></div>
<div class="fh5co_tags_all">
    @foreach ($tags as $tag)
        <a href="#" class="fh5co_tagg">{{ $tag->title }}</a>
    @endforeach
</div>
