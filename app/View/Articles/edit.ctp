<?php
  $this->assign('title', 'Chỉnh sửa bài viết');
  $this->assign('sub_header', 'Chỉnh sửa bài viết');
  $this->start('sidebar_dashboard');
  echo $this->element('dashboard/sidebar_article');
  $this->end();
 ?>

<?=$this->Form->create($article, ['class'=>'form-horizontal', 'role'=>'form'])?>
  <div class="form-group">
      <label class="col-sm-2 control-label">Chủ đề</label>
      <div class="col-sm-10">
        <?=$this->Form->input('categories', ['class'=>'form-control', 'label'=>false])?>
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
          <?=$this->Form->input('body', ['class'=>'form-control', 'label'=>false, 'rows'=>20])?>
      </div>
   </div>

    <div class="form-group">
        <div class="col-sm-offset-6 col-sm-10">
            <?= $this->Form->button(__('Lưu thay đổi'), ['class'=>'btn btn-primary']) ?>
        </div>
    </div>
<?=$this->Form->end()?>