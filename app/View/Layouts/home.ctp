
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chicken Electric</title>

    <!-- Bootstrap core CSS -->
    <?=$this->Html->css('bootstrap.min.css')?>

    <!-- Custom styles for this template -->
    <?=$this->Html->css('default.css')?>
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <div class="navbar-wrapper">

      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?=$this->Html->link('Chicken Electric', ['controller'=>'frontends', 'action'=>'home'], ['class'=>'navbar-brand'])?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><?=$this->Html->link('Trang chủ', ['controller'=>'frontends', 'action'=>'home'], ['class'=>'active'])?></li>
                <?php foreach($cates as $cate):?>
                  <li><?=$this->Html->link($cate['Category']['name'], ['controller'=>'frontends', 'action'=>'listcate', $cate['Category']['id']])?></li>
                <?php endforeach;?>
                <li><?=$this->Html->link('Contact', ['controller'=>'frontends', 'action'=>'contact'])?></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

        <?php $flag = true; foreach ($galleries as $gallery): ?>

          <?php if($flag):?>
              <div class="item active">
                <?=$this->Html->image('gallery/'.$gallery['Gallery']['images'])?>
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=$gallery['Gallery']['title']?></h1>
                    <p><?=$gallery['Gallery']['description']?></p>
                    <?php 
                      if($gallery['Gallery']['link'] != ''){
                        echo '<p><a class="btn btn-lg btn-primary" target="_blank" href="'.$gallery['Gallery']['link'].'" role="button">Sign up today</a></p>';
                      }
                    ?>
                  </div>
                </div>
              </div>
          <?php $flag = false; else:?>
              <div class="item">
                <?=$this->Html->image('gallery/'.$gallery['Gallery']['images'])?>
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=$gallery['Gallery']['title']?></h1>
                    <p><?=$gallery['Gallery']['description']?></p>
                    <?php 
                      if($gallery['Gallery']['link'] != ''){
                        echo '<p><a class="btn btn-lg btn-primary" target="_blank" href="'.$gallery['Gallery']['link'].'" role="button">Sign up today</a></p>';
                      }
                    ?>
                  </div>
                </div>
              </div>
          <?php endif;?>

        <?php endforeach;?>

      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">

        <?php foreach ($cates as $cate):?>
          <div class="col-lg-4">
            <?=$this->Html->image('gallery/'.$cate['Category']['image'], ['class'=>'img-circle item-header', 'alt'=>'Ảnh đại diện'])?>
            <h2><?=$cate['Category']['name']?></h2>
            <p><?=$cate['Category']['description']?></p>
            <p><?=$this->Html->link('View details &raquo;', ['controller'=>'frontends', 'action'=>'listcate', $cate['Category']['id']], ['class'=>'btn btn-default', 'escape' => false])?></p>
          </div><!-- /.col-lg-4 -->
        <?php endforeach;?>

      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="#">First featurette heading.</a></h2>
          <p class="lead">
            <ul><a href="#">This is ok</a></ul>
            <ul><a href="#">This is ok</a></ul>
            <ul><a href="#">This is ok</a></ul>
            <ul><a href="#">This is ok</a></ul>
            
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Chicken Electric.</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?=$this->Html->script('jquery.min.js')?>
    <?=$this->Html->script('bootstrap.min.js')?>
    <?=$this->Html->script('default.js')?>
  </body>
</html>
