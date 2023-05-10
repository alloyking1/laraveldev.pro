<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  // tinymce.init({
  //   selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
  //   plugins: 'code table lists codesample wordcount',
  //   toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | codesample',
  //   codesample_global_prismjs: true,
  // });






tinymce.init({
  selector: 'textarea#myeditorinstance',
  image_class_list: [
    {title: 'img-responsive', value: 'img-responsive'},
  ],
  height: 500,
  setup: function (editor) {
      editor.on('init change', function () {
          editor.save();
      });
  },
  plugins: 'image code table lists codesample wordcount',
  toolbar: 'undo redo | link image | code | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | codesample',
  image_title: true,
  automatic_uploads: true,
  images_upload_url:'/post-image'
  file_picker_types: 'image',
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

</script>