<?php
 	$this->assign('title', 'Thêm bài viết');
 	$this->assign('sub_header', 'Thêm bài viết');
 	$this->start('sidebar_dashboard');
 	echo $this->element('sidebar_article');
 	$this->end();
 ?>

<?=$this->Form->create(['type'=>'file', 'class'=>'form-horizontal', 'role'=>'form'])?>
	<div class="form-group">
      <label class="col-sm-2 control-label">Chủ đề</label>
      <div class="col-sm-10">
      	<?=$this->Form->input('category_id', ['class'=>'form-control', 'label'=>false, 'options'=>$cates])?>
      </div>
   	</div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Tiêu đề</label>
      <div class="col-sm-10">
      	<?=$this->Form->input('title', ['class'=>'form-control', 'label'=>false])?>
      </div>
   	</div>
   
   	<div class="form-group">
      	<label class="col-sm-2 control-label">Nội dung</label>
      	<div class="col-sm-10">
      		<?=$this->Form->textarea('body', ['class'=>'form-control ckeditor', 'label'=>false, 'rows'=>20])?>
    	</div>
   </div>

    <div class="form-group">
        <div class="col-sm-offset-6 col-sm-10">
            <?= $this->Form->button(__('Hoàn tất'), ['class'=>'btn btn-primary']) ?>
        </div>
    </div>
<?=$this->Form->end()?>
