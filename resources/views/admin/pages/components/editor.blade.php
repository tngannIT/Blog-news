<textarea  name="content" id="content" class="ck-editor">{{ $post->content ? : ''}}</textarea>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    });
</script> --}}

