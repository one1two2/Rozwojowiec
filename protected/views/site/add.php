<?php
//widget success add book
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'addSuccess',
    // additional javascript options for the dialog plugin
    'options'=>array(
    	'title'=>'Add new book',
    	'autoOpen'=>false,
    	'modal'=>false,		
	),
));?>
<div id="addSuccessText">You successfully added new book</div>
<div class="button-dialog">
        <?= CHtml::Button('OK',array('onclick'=>'$("#addSuccess").dialog("close"); return false;')); ?> 
</div>
<?php $this->endWidget('zii.widgets.jui.CJuiDialog');
        
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'addBook',
    // additional javascript options for the dialog plugin
    'options'=>array(
	'title'=>'Add new book',
        'width'=> '440px',
	'autoOpen'=>false,
	'modal'=>false,		
    ),
));
$link = Yii::app()->createAbsoluteUrl("site/add");
?>
<div id="addForm" class="form"> 
<?php 
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'book-form',
    'enableAjaxValidation'=>true,
    'htmlOptions' => array(
       'enctype' => 'multipart/form-data',
           'enableClientValidation'=>true,
                'onsubmit'=>"return false;",/* Disable normal form submit */
                'onkeypress'=>" if(event.keyCode == 13){ addBook('$link'); } "
            ),
)); ?>  
<?= $form->errorSummary($model); ?>
 
<div class="row">
    <?= $form->labelEx($model,'title'); ?>
    <?= $form->textField($model,'title',array('maxlength'=>128,'class'=>'dialog-input')); ?>
    <?= $form->error($model,'title'); ?>
</div>
<div class="row">
    <?= $form->labelEx($model,'author'); ?>
    <?= $form->textField($model,'author',array('maxlength'=>128,'class'=>'dialog-input')); ?>
    <?= $form->error($model,'author'); ?>
</div>
<div class="row">
    <?= $form->labelEx($model,'publisher'); ?>
    <?= $form->textField($model,'publisher',array('maxlength'=>128,'class'=>'dialog-input')); ?>
    <?= $form->error($model,'publisher'); ?>
</div>
<div class="row">
    <?= $form->labelEx($model,'realese_date'); ?>
    <?= $form->numberField($model,'realese_date',array('max'=>'2020','min'=>'0','class'=>'dialog-input')); ?>
    <?= $form->error($model,'realese_date'); ?>
</div>
<div class="row">
    <?= $form->labelEx($model,'comment'); ?>
    <?= $form->textArea($model,'comment',array('class'=>'dialog-input')); ?>
    <?= $form->error($model,'comment'); ?>
</div>
<div class="row buttons">
    <?php echo CHtml::Button('Submit',array("onclick"=>"addBook('$link');")); ?> 
</div>
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->

<?php
// book form widget end
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<div id="model">
<?php
// the link that may open the dialog
echo CHtml::link('Add new book', '#', array(
    'onclick'=>'$("#addBook").dialog("open"); return false;',
));
?>
</div>