<!DOCTYPE html>
<html>
<head>
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea',
    plugins: "code",
    toolbar: "code",
  });
  </script>
  <style>
    #mytextarea{
      height:40em;
    }
  </style>
</head>

<body>
<h1>WISYSWIG</h1>
  <form method="post">
    <textarea id="mytextarea">Another one!</textarea>
  </form>
</body>
</html>
