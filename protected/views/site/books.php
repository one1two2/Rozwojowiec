<?php
$this->renderPartial('add',array(
           'model' => $model
       ));
?>
<div id="books">
    <?php foreach($books as $book){
        $this->renderPartial('book',array(
                'book' => $book 
             ));
    }
    //widget about delete book
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
	'id'=>'deleteSuccess',
	'options'=>array(
		'title'=>'Delete a book',
		'autoOpen'=>false,
		'modal'=>false,		
	),
    ));?>
    <div id="deleteSuccessText"></div>
    <div class="button-dialog">
        <?= CHtml::Button('OK',array('onclick'=>'$("#deleteSuccess").dialog("close"); return false;')); ?> 
    </div>
    <?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>
</div>
