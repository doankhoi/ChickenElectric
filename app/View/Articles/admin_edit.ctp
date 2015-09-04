<?php
  $this->assign('title', 'Chỉnh sửa bài viết');
  $this->assign('sub_header', 'Chỉnh sửa bài viết');
  $this->start('sidebar_dashboard');
  echo $this->element('sidebar_article');
  $this->end();
 ?>
<style type="text/css">
  
  .control-label{
    background: #EEEEEE;
  }
  
</style>


<?=$this->Form->create(['type'=>'file', 'class'=>'form-horizontal', 'role'=>'form'])?>
  <div class="form-group">
      <label class="col-sm-2 control-label">Chủ đề</label>
      <div class="col-sm-10">
        <?=$this->Form->input('category_id', ['class'=>'form-control', 'label'=>false, 'options'=>$cates, 'value' => $article['Article']['category_id']])?>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Tiêu đề</label>
      <div class="col-sm-10">
        <?=$this->Form->input('title', ['class'=>'form-control', 'label'=>false, 'value'=>$article['Article']['title']])?>
      </div>
    </div>
   
    <div class="form-group">
      <label class="col-sm-2 control-label">Tóm tắt nội dung</label>
      <div class="col-sm-10">
        <?=$this->Form->textarea('description', 
          ['class'=>'form-control', 'label'=>false, 'value'=>$article['Article']['description']]
        )?>
      </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Nội dung</label>
        <div class="col-sm-10">
          <?=$this->Form->textarea('body', 
            ['class'=>'form-control ckeditor', 'label'=>false, 'rows'=>20, 'value'=>$article['Article']['body']]
          )?>
      </div>
   </div>

    <div class="form-group">
        <div class="col-sm-offset-6 col-sm-10">
            <?= $this->Form->button(__('Hoàn tất'), ['class'=>'btn btn-primary']) ?>
        </div>
    </div>
<?=$this->Form->end()?>
