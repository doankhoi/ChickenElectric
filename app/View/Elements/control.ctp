<!-- <h1 class="page-header">Quản lý website</h1> -->

<div class="row placeholders">

  <div class="col-xs-6 col-sm-3 placeholder">
    <span class="glyphicon glyphicon-user"></span>
    <!-- <img class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?=$this->Html->link('Quản lý người dùng',['controller'=>'users', 'action'=>'index']);?></h4>
    <span class="text-muted">-------***------</span>
  </div>

  <div class="col-xs-6 col-sm-3 placeholder">
    <span class="glyphicon glyphicon-folder-open"></span>
   <!-- <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail"> -->
   <h4><?=$this->Html->link('Quản lý bài viết', ['controller'=>'articles', 'action'=>'index'])?></h4>
   <span class="text-muted">-------***------</span>
 </div>

 <div class="col-xs-6 col-sm-3 placeholder">
  <span class="glyphicon glyphicon-list"></span>
   <!-- <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail"> -->
   <h4><?=$this->Html->link('Quản lý chủ đề bài viết', ['controller'=>'categories', 'action'=>'index'])?></h4>
   <span class="text-muted">-------***------</span>
 </div>

 <div class="col-xs-6 col-sm-3 placeholder">
  <span class="glyphicon glyphicon-comment"></span>
  <!-- <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail"> -->
  <h4><?=$this->Html->link('Quản lý bình luận', ['controller'=>'comments', 'action'=>'index'])?></h4>
  <span class="text-muted">-------***------</span>
</div>

</div>
