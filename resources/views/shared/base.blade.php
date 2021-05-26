<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Example</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-5">
    @yield('content')
    </div>
    <script src="/js/jquery-3.6.0.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ckeditor.js"></script>
    <script src="/js/ckfinder/ckfinder.js"></script>
    <style>
    /*.ck-editor__editable {min-height: 300px;}*/
    .ck-editor__editable {max-height: 300px;}
    </style>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) , {
                ckfinder: {
                    uploadUrl: '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                },
                toolbar: [ 'heading', '|', 'ckfinder', 'imageUpload', 'imageStyle:full', 'imageStyle:side', 'imageTextAlternative', '|', 'bold', 'italic', '|', 'undo', 'redo', '|', 'numberedList', 'bulletedList', 'blockQuote', '|', 'link', '|', 'insertTable', '|', 'mediaEmbed', '|', 'indent', 'outdent' ]
            })
            .then( editor => {
                //  editor.ui.view.editable.element.style.height = '150px';
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>