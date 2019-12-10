<script>document.write('<div class="rdr-mask rdr-mask_application"></div>');</script>
<script>

    // window.localStorage.getItem('rdr.autobookmarks');
    window.stage = 'real';
    window.readerArgs = {
        "id": "{{$book->id}}", 
        "name": "{{$book->book}}", 
        "book": "{{$book->id}}", 
        "bookmarks": [],
        "citations": [], 
        "active_citation": null, 
        "cover": "{{$contents}}/fb2_cover_calibre_mi.jpg", 
        "prefix": "{{$contents}}/", 
        "topbook": null, 
        "subscription": "free",
        "autobookmark": {
            "book": "{{$book->id}}", 
            "device_name": "web", 
            "xpath": "div[1]/p[7]/text()[1]", 
            "time":{{time()}}, 
            "part": "content0", 
            "offset": 131, 
            "user": {{$user->id}}
        },
        
    };

</script>
