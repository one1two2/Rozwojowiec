<?php $link = Yii::app()->createAbsoluteUrl("site/delete"); ?>
<div class="book" id="<?= $book->id ?>">
    <div class="title"><?= $book->title ?> (<?= $book->realese_date ?>)</div>
    <div class="author">by <?= $book->author ?> publisher <?= $book->publisher ?></div>
    <div>
        <p><?= $book->comment ?></p>
    </div>
    <div class="row buttons">
        <?php echo CHtml::Button('Delete',
                array("onclick"=>"deleteBook('$link','$book->id');","class"=>"delete")
                ); ?> 
    </div>
</div>  