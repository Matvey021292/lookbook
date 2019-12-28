<script>document.write('<div class="rdr-mask rdr-mask_application"></div>');</script>
<script>

    // window.localStorage.getItem('rdr.autobookmarks');
    window.stage = 'real';
    window.readerArgs = {
        "id": {{$book->id}}, 
        "name": "{{$book->book}}", 
        "book": "{{$book->id}}", 
        "bookmarks": [],
        @if($bookmarks)
        "autobookmark": {
            "book": "{{$bookmarks->book}}", 
            "device_name": "{{$bookmarks->device_name}}", 
            "xpath": "{{$bookmarks->xpath}}", 
            "time":{{$bookmarks->time}}, 
            "part": "{{$bookmarks->part}}", 
            "offset": @if($bookmarks->offset) {{$bookmarks->offset}} @else 1 @endif,
            "user": {{$bookmarks->user_id}}
        },
        @endif
        "citations": [], 
        "active_citation": null, 
        "cover": "{{$contents}}/fb2_cover_calibre_mi.jpg", 
        "prefix": "{{$contents}}/", 
        "topbook": null, 
        "subscription": "free",
    
        
        
    };

</script>
