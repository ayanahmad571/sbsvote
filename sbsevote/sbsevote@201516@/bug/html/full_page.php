
<?php

if(isset($_POST['textarea'])){
	


$text=  str_replace('<!DOCTYPE html><html><head><title></title></head><body>','',$_POST['textarea']);
	$text=  str_replace('</body>','',$text);
	$text=  str_replace('</html>','',$text);
	
	
$myfile = fopen("bugs/Bug Reported at ".date('D d - M m - Y at  H,i,s',time()).",".microtime()." by ".$_POST['person'].".txt", "w") or die("Unable to open file!");
fwrite( $myfile,$text);
fclose($myfile);


}
?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bug/css/froala_editor.css">
  <link rel="stylesheet" href="bug/css/froala_style.css">
  <link rel="stylesheet" href="bug/css/plugins/code_view.css">
  <link rel="stylesheet" href="bug/css/plugins/colors.css">
  <link rel="stylesheet" href="bug/css/plugins/emoticons.css">
  <link rel="stylesheet" href="bug/css/plugins/image_manager.css">
  <link rel="stylesheet" href="bug/css/plugins/image.css">
  <link rel="stylesheet" href="bug/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="bug/css/plugins/table.css">
  <link rel="stylesheet" href="bug/css/plugins/char_counter.css">
  <link rel="stylesheet" href="bug/css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <style>
      body {
          text-align: center;
      }

      div#editor {
          width: 81%;
          margin: auto;
          text-align: left;
      }
  </style>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div id="editor">
      <textarea  name="textarea" id="edit" style="
      margin-top: 30px;">
      
iehgui piujbuethbuhiu ohuo buo it b tib irthbihb bih bib hite hbiuh uithbiethi ebeh tb
      </textarea>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script src="bug/js/froala_editor.min.js"></script>
  <script src="bug/js/plugins/align.min.js"></script>
  <script src="bug/js/plugins/code_view.min.js"></script>
  <script src="bug/js/plugins/emoticons.min.js"></script>
<script src="bug/js/plugins/font_size.min.js"></script>
  <script src="bug/js/plugins/font_family.min.js"></script>
  <script src="bug/js/plugins/image.min.js"></script>
  
<script src="bug/js/plugins/image_manager.min.js"></script>
  <script src="bug/js/plugins/line_breaker.min.js"></script>
  <script src="bug/js/plugins/link.min.js"></script>
  <script src="bug/js/plugins/lists.min.js"></script>
  <script src="bug/js/plugins/paragraph_format.min.js"></script>
  <script src="bug/js/plugins/paragraph_style.min.js"></script>
  <script src="bug/js/plugins/table.min.js"></script>
  <script src="bug/js/plugins/video.min.js"></script>
  <script src="bug/js/plugins/url.min.js"></script>

  <script src="bug/js/plugins/entities.min.js"></script>

<script src="bug/js/plugins/char_counter.min.js"></script>
  <script src="bug/js/plugins/inline_style.min.js"></script>
  <script src="bug/js/plugins/save.min.js"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor({
        fullPage: true
      })
    });
  </script>
  
  <input type="submit" name="submitedbutton"  class="btn btn-default"/>
  </form>
</body>
</html>