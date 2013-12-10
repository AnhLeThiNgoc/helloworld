<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);
$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>
ngocanh
<h1>Posts</h1>
<h3><?php echo date("D M j G:i:s T Y"); ?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<?php
echo CHtml::form();
echo CHtml::textField('myTextField', '',
    array('ajax' =>
    array(
        'type' => 'POST',
        'url' => CController::createUrl('myActionName'),
        'update' => '#updateDropDownList'
    ))
);

echo CHtml::dropDownList('updateDropDownList', '', array(), array());
echo CHtml::endForm();
?>
