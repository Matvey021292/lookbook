@if($authors)
    <div class="column-wg-left wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_widgetised_column wpb_content_element padding-right">
                    <div class="wpb_wrapper">
                        <aside id="browse_author-3" class="widget-home widget_browse_author">
                            <h3 class="wg-home-title">Авторы</h3>
                            @foreach($authors as $author)
                                <div class="bj-brs-author-item clearfix" style="display:block">
                                    <div class="wrap-thumbnail">
                                        <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=642&author_id=110">
                                            {{--                <img src="{!! $author->desc->image !!}" alt="">--}}
                                        </a>
                                    </div>
                                    <div class="wrap-info">
                                        <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=642&author_id=110">{{ $author->title }}</a>
                                        {{--            <div class="bj-brs-author-count">{{!! $author->books->slug !!}}</div>--}}
                                    </div>
                                </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif