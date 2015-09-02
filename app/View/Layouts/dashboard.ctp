
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$this->fetch('title')?></title>

    <!-- Bootstrap core CSS -->
    <?=$this->Html->css('bootstrap.min.css')?>
    <!-- Custom styles for this template -->
    <?= $this->Html->css('dashboard.css')?>
  </head>

  <body>

    <!--Chèn navabar-->
    <?=$this->element('navabar')?>
    <!--Chèn navabar-->

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <?= $this->fetch('sidebar_dashboard')?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <!--Chèn control_dashboard-->
          <?=$this->element('control')?>
          <!--Chèn control_dashboard-->

          <h2 class="sub-header"><?=$this->fetch('sub_header')?></h2>

          <div class="main-content">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content')?>
          </div>

        </div>

      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?=$this->Html->script('jquery.min.js');?>
    <?=$this->Html->script('jquery-ui-1.8.2.custom.min.js')?>
    <?=$this->Html->script('bootstrap.min.js')?>

    <!--Chèn script tinymce-->
    <?=$this->Html->script('tinymce/tinymce.min.js');?>
     <!--Chèn tinymce-->
  <!--Chèn tinymce-->
    <!--Chèn script tinymce-->

  <script type="text/javascript">
    $(document).ready(function(){
      tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern imagetools"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
          {title: 'Test template 1', content: 'Test 1'},
          {title: 'Test template 2', content: 'Test 2'}
        ]
      });
    });
  </script>

    <?=$this->element('sql_dump')?>
  </body>
</html>
