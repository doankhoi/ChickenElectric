
<?php
$this->assign('title', 'Chỉnh sửa chủ đề');
$this->assign('sub_header', 'Chỉnh sửa chủ đề');
$this->start('sidebar_dashboard');
echo $this->element('sidebar_categories');
$this->end();
?>
<style type="text/css">
    .control-label{
        background: #eeeeee;
    }
</style>
<div>
    <?= $this->Form->create('Category',['class'=>'form-horizontal', 'role'=>'form']) ?>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Tiêu đề</label>
            <div class="col-sm-10">
                <?=$this->Form->input('name', ['label'=>false, 'class'=>'form-control', 'value'=>$cate['Category']['name']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Miêu tả</label>
            <div class="col-sm-10">
                <?=$this->Form->textarea('description', ['label'=>false, 'class'=>'form-control', 'value'=>$cate['Category']['description']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="link" class="col-sm-2 control-label">Link</label>
            <div class="col-sm-10">
                <?=$this->Form->input('link', ['label'=>false, 'class'=>'form-control', 'value'=>$cate['Category']['link']])?>
            </div>
        </div>

        <div class="form-group">
            <label for="sub" class="col-sm-2 control-label">Thư mục cha</label>
            <div class="col-sm-10">
                <?=$this->Form->select('sub',$sub,array('empty'=>array(''=>"--Main--"), 'class'=>'form-control'));?>  
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-6 col-sm-10">
                <?= $this->Form->button(__('Hoàn tất'), ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
