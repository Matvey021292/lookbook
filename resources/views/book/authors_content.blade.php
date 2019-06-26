@if($authors)
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1504607702805">
                    <div class="wpb_wrapper">
                        <div class="heading-2">
                            <div class="wrap-heading">
                                <h2 class="heading">Авторы</h2>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 10px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="cms-grid-wraper grid-2-min cs-saler grid-2 extend-space">
                            <div class="row">
                                @foreach($authors as $author)
                                    <div class="mb-4 col-md-3 col-sm-6 col-xs-12 ">
                                        <div class="d-flex">
                                            <div class="cms-grid-media">
                                                <a href="{{ route('author.show', ['alias' => $author->slug]) }}">
                                                    @if($author->desc && $author->desc->image)
                                                        <img src="{{ $author->desc->image}}"
                                                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                             alt="{{ $author->title }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="info-product pl-2">
                                                <a class="product-title"
                                                   href="{{ route('author.show', ['alias' => $author->slug]) }}">{{ $author->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row justify-content-center mt-5">
                                {{ $authors->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

