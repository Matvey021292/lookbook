@if($cat)
    <!-- <div id="content" class="site-content">
        <div id="primary" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="main" class="site-main">
                        <article id="post-642" class="post-642 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1507194645392">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">  -->
                                                @include(env('THEME') . '.customCategoryItems', ['items'=>$cat->roots(),'books' => $books_c])
                                            <!-- </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </div> -->
@endif
