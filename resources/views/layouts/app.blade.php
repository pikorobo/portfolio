<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        <nav>
            <!-- ナビゲーションバーの内容 -->
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({
        selector: "textarea#tinymce",
        height: 500,
        
        
        autoresize_min_height: 300,
        autoresize_max_height: 1500,
        autoresize_bottom_margin: 100,
        plugins: 'autoresize anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'blocks | fontsize | bold italic underline strikethrough forecolor removeformat | alignleft aligncenter alignright alignjustify | emoticons link image table | numlist bullist | code',
        block_formats: 'Paragraph=p; Header 1=h3; Header 2=h4; Header 3=h5',
        color_map: [],
        relative_urls: false,  // 相対URLを使用しない
        image_title: true,
        automatic_uploads: true,
        images_upload_url: '/posts/upload?_token={{csrf_token()}}', // Laravelのトークンを含める
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
          var input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');
          input.onchange = function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
              var id = 'blobid' + (new Date()).getTime();
              var blobCache = tinymce.activeEditor.editorUpload.blobCache;
              var base64 = reader.result.split(',')[1];
              var blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);
              cb(blobInfo.blobUri(), {
                title: file.name
              });
            };
          };
          input.click();
        }
      });
      tinymce.suffix = ".min";
      tinyMCE.baseURL = '/tinymce'; // TinyMCEの置き場所
    </script>
</body>
</html>