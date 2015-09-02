
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
              <?=$this->Html->link('Chicken Electric', ['controller'=>'articles', 'action'=>''], ['class'=>'navbar-brand'])?>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><?=$this->Html->link('Trang chủ', ['controller'=>'articles', 'action'=>'index', 'cat'=>''], ['class'=>'active'])?></li>
                <li><?=$this->Html->link('Coder', ['controller'=>'articles', 'action'=>'index', 'cat'=>'coder'])?></li>
                <li><?=$this->Html->link('Suy ngẫm', ['controller'=>'articles', 'action'=>'index', 'cat'=>'suy ngẫm'])?></li>
                <li><?=$this->Html->link('Tào lao', ['controller'=>'articles', 'action'=>'index', 'cat'=>'tào lao'])?></li>
                <li><a href="#about">Tác giả</a></li>
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

        <div class="item active">
          <?=$this->Html->image('slider1.jpg', ['class'=>'first-slide'])?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <?=$this->Html->image('slider2.jpg', ['class'=>'second-slide'])?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <?=$this->Html->image('slider3.jpg', ['class'=>'third-slide'])?>
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>

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
        <div class="col-lg-4">
            <?=$this->Html->image('slider1.jpg', ['class'=>'img-circle item-header', 'alt'=>'Coder'])?>
          <h2>Coder</h2>
          <p>Chia sẻ kiến thức lập trình, học tập.</p>
          <p><?=$this->Html->link('View details &raquo;', ['controller'=>'articles', 'action'=>'index', 'cat'=>'coder'], ['class'=>'btn btn-default', 'escape' => false])?></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <?=$this->Html->image('slider2.jpg', ['class'=>'img-circle item-header', 'alt'=>'Chia sẻ'])?>
          <h2>Suy ngẫm</h2>
          <p>Các bài viết về cuộc sống hàng ngày.</p>
          <p><p><?=$this->Html->link('View details &raquo;', ['controller'=>'articles', 'action'=>'index', 'cat'=>'coder'], ['class'=>'btn btn-default', 'escape' => false])?></p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <?=$this->Html->image('slider3.jpg', ['class'=>'img-circle item-header', 'alt'=>'Tào lao'])?>
          <h2>Tào lao</h2>
          <p>Các bài viết hữu ích trên mạng.</p>
          <?=$this->Html->link('View detai &raquo;', ['controller'=>'articles', 'action'=>'index', 'cat'=>'tào lao'], ['class' => 'btn btn-default', 'escape'=>false])?>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
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
