<ul class="nav nav-sidebar">
    <li class="active"><?=$this->Html->link('Quản lý bài viết', ['controller'=>'articles', 'action'=>'index'])?></li>
    <li><?=$this->Html->link('Danh sách bài viết deactive', ['controller'=>'articles', 'action'=>'listdeactive'])?></li>
    <li><?=$this->Html->link('Thêm bài viết', ['controller'=>'articles', 'action'=>'add'])?></li>
</ul>