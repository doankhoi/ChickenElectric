
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
    <?=$this->Html->css('template.css')?>
  </head>

  <body>

    <div class="blog-masthead navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <?=$this->Html->link('Chicken Electric', ['controller'=>'frontends', 'action'=>'home'], ['class'=>'navbar-brand'])?>
        </div>
        <nav class="blog-nav">
          <?=$this->Html->link('Trang chủ', ['controller'=>'frontends', 'action'=>'home'], ['class'=>'blog-nav-item active'])?>
          <?php foreach($cates as $cate): ?>
              <?=$this->Html->link($cate['Category']['name'], ['controller'=>'frontends', 'action'=>'listcate', $cate['Category']['id']], ['class'=>'blog-nav-item'])?>
          <?php endforeach;?>
          <?=$this->Html->link('Contact', ['controller'=>'frontends', 'action'=>'contact'], ['class'=>'blog-nav-item'])?>
        </nav>
      </div>
    </div>

    <div class="container content-main">
      <div class="row">

        <div class="col-sm-8 blog-main">
          <?=$this->Flash->render()?>
          <?=$this->fetch('content')?>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Tác giả</h4>
            <p>
                <?=$this->fetch('intro_author')?>
            </p>
          </div>
          <!-- <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div> -->
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>@ Bản quyền của Chicken Electric.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?=$this->Html->script('jquery.min.js')?>
    <?=$this->Html->script('bootstrap.min.js')?>
  </body>
</html>
