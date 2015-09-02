
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng nhập</title>

  <!-- Bootstrap core CSS -->
  <?=$this->Html->css('bootstrap.min.css')?>
  <!-- Custom styles for this template -->
  <?=$this->Html->css('login.css')?>
</head>

<body>
  <div class="container main-login">
    <div class="title-login">
        <?=$this->Html->image('icon_login.jpg', ['class'=>'img-responsive img-circle', 'align'=>'middle'])?>
        <p>Chicken Electric</p>
    </div>
    
    <?=$this->Flash->render()?>
    <?=$this->Form->create(null, ['role'=>'form'])?>
       <div class="form-group">
          <?=$this->Form->input('username', ['label'=>false, 'class'=>'form-control','placeholder'=>'Enter username'])?>
       </div>

       <div class="form-group">
          <?=$this->Form->input('password', ['label'=>false, 'class'=>'form-control','placeholder'=>'Enter password'])?>
      </div>
      <?=$this->Form->button(__('Đăng nhập'), ['class'=>'btn btn-default bt-login']);?>
    <?=$this->Form->end()?>
  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?=$this->Html->script('jquery.min.js');?>
    <?=$this->Html->script('bootstrap.min.js')?>
</body>
</html>
