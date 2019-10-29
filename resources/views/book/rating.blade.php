<div class="VerticalBookCard__rating">
    <div class="BookRating__bookRating">
        <div class="BookRating__rating BookRating__-tiny">
            @if($book->averageRating)
            <div class="BookRating__ratingInner isTiny" style="width:{{(80/5) * $book->averageRating}}px"></div> 
            @endif
        </div>
    </div>
</div>