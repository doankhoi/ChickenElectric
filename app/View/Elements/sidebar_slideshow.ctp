<ul class="nav nav-sidebar">
    <li class="active"><?=$this->Html->link('Quản lý slideshow', ['controller'=>'galleries', 'action'=>'index', 0])?></li>
    <li><?=$this->Html->link('Danh sách deactive', ['controller'=>'galleries', 'action'=>'listdeactive'])?></li>
    <li><?=$this->Html->link('Thêm ảnh slideshow', ['controller'=>'galleries', 'action'=>'add'])?></li>
</ul>