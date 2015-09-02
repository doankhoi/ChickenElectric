<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Chicken Electric</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($current_user)):?>
          <li><?=$this->Html->link($current_user['username'],['controller'=>'users','action'=>'view', $current_user['id']]);?></li>
          <li><?=$this->Html->link('Logout',['controller'=>'users', 'action'=>'logout'])?></li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</nav>

<style type="text/css">
  .img-avatar{
    width: 50px !important;
    height: 50px !important;
  }
</style>