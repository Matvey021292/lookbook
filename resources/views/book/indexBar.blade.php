@if($authors)
    <div class="col-sm-12 col-md-12">
        <aside class="widget-home widget_browse_author">
            <h4 class=" mb-0">Авторы</h4>
            <hr class="mb-0">
           <div class="row">
               @foreach($authors as $author)
                   <div class="col-md-3">
                       <div class="bj-brs-author-item clearfix d-flex align-items-center mt-3">
                           <div class="wrap-thumbnail">
                               <a href="{{ route('author.show', ['alias' => $author->slug]) }}">
                                   @if($author->desc && $author->desc->image)
                                       <img
                                               src="{{$author->desc->image}}"
                                               class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                               alt="{{ $author->title }}">
                                   @else
                                       <img
                                               src="{!! env('THEME').'/images/35x35.jpg' !!}"
                                               class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                               alt="{{ $author->title }}">
                                   @endif
                               </a>
                           </div>
                           <div class="wrap-info pl-3">
                               <a href="{{ route('author.show', ['alias' => $author->slug]) }}">{{ $author->title }}</a>
                               <div class="bj-brs-author-count">Книг {!! count($author->book) !!}</div>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
        </aside>
    </div>
@endif