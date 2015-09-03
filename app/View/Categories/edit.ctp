
<?php
$this->assign('title', 'Thêm chủ đề');
$this->assign('sub_header', 'Thêm mới chủ đề');
$this->start('sidebar_dashboard');
echo $this->element('dashboard/sidebar_categories');
$this->end();
?>

<div>
    <?= $this->Form->create($category, ['class'=>'form-horizontal', 'role'=>'form']) ?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-2 control-label">Thư mục cha</label>
            <div class="col-sm-10">
                <?=$this->Form->input('parent_id', ['label'=>false, 'empty'=>true, 'class'=>'form-control', 'options'=>$parentCategories])?>
            </div>
        </div>
        <div class="form-group">
            <label for="lft" class="col-sm-2 control-label">Chỉ số trái</label>
            <div class="col-sm-10">
                <?=$this->Form->input('lft', ['label'=>false, 'class'=>'form-control'])?>
            </div>
        </div>
        <div class="form-group">
            <label for="rght" class="col-sm-2 control-label">Chỉ số phải</label>
            <div class="col-sm-10">
                <?=$this->Form->input('rght', ['label'=>false, 'class'=>'form-control'])?>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Tên của chỉ mục</label>
            <div class="col-sm-10">
                <?=$this->Form->input('name', ['label'=>false, 'class'=>'form-control'])?>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Miêu tả chủ đề</label>
            <div class="col-sm-10">
                <?=$this->Form->input('description', ['label'=>false, 'class'=>'form-control'])?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-6 col-sm-10">
                <?= $this->Form->button(__('Lưu thay đổi'), ['class'=>'btn btn-default']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
