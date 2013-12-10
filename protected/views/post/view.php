<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>
<!--
<h1>View Post #<?php echo $model->id; ?></h1>
-->
<h1><?php echo $model->title; ?></h1>
<div class = "postState">
    Bai dang ngay
    <span class = "postDate"> 
        <?php echo date("d/m/Y", strtotime ($model->date_create));?>
    </span>
    trong muc
    <span>
        <?php echo $model->cat->title;?>
    </span>
</div>
<div class = "postContent">
    <?php echo $model->content;?>
</div>
