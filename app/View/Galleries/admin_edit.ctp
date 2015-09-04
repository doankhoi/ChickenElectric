<?php
$this->assign('title', 'Chỉnh sửa slideshow');
$this->assign('sub_header', 'Chỉnh sửa slideshow');
$this->start('sidebar_dashboard');
echo $this->element('sidebar_slideshow');
$this->end();
?>
<style type="text/css">
    .control-label{
        background: #eeeeee;
    }
</style>
<div>
    <?= $this->Form->create('Gallery',['type'=>'file','class'=>'form-horizontal', 'role'=>'form']) ?>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nơi đặt</label>
            <div class="col-sm-10">
                <?php
                    echo $this->Form->radio('type',array('0'=>"Trang chủ"),array('hiddenField'=>false));
                    echo $this->Form->radio('type',array('1'=>"Trang ảnh"),array('hiddenField'=>false));
                ?>  
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Tiêu đề</label>
            <div class="col-sm-10">
                <?=$this->Form->input('title', ['label'=>false, 'class'=>'form-control', 'value'=>$gallery['Gallery']['title']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Miêu tả</label>
            <div class="col-sm-10">
                <?=$this->Form->textarea('description', ['label'=>false, 'class'=>'form-control', 'value'=>$gallery['Gallery']['description']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="ordered" class="col-sm-2 control-label">Thứ tự</label>
            <div class="col-sm-10">
                <?=$this->Form->input('ordered', ['label'=>false, 'class'=>'form-control', 'value'=>$gallery['Gallery']['ordered']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="link" class="col-sm-2 control-label">Link</label>
            <div class="col-sm-10">
                <?=$this->Form->input('link', ['label'=>false, 'class'=>'form-control', 'value'=>$gallery['Gallery']['link']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="images" class="col-sm-2 control-label">Link</label>
            <div class="col-sm-10">
                <?=$this->Form->file('images', ['label'=>false, 'class'=>'form-control'])?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-6 col-sm-10">
                <?= $this->Form->button(__('Hoàn tất'), ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
