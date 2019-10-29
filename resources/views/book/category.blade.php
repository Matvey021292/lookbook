@if($content)
<div class="container">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-2">
                        <div class="wrap-heading">
                            <h2 class="heading">{!! $category->category!!}</h2>
                        </div>
                    </div>
                    <ul class="BookList__items">
                        @foreach($content as $book)
                        @include(env('THEME') . '.card-book-list', ['items'=>$book,'book' => $book, 'carousel' => true])
                        @endforeach
                    </ul>
                    <div class="row justify-content-center mt-5">
                        {{ $content->links() }}
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1504607702805">
                        <div class="wpb_wrapper">
                            <div class="heading-2">
                                <div class="wrap-heading">
                                    <h2 style=";color: #888a92;" class="heading">Записей не сушествует</h2>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 10px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        