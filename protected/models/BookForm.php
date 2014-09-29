<?php

class BookForm extends CFormModel
{
    public $title;
    public $publisher;
    public $realese_date;
    public $comment;
    public $author;
    
    public function rules(){
        return array(
                array('title,author,publisher,comment,realese_date','required'),
                array('realese_date','numerical',
                    'integerOnly'=>true,
                    'min'=>1,
                    'max'=>2020,
                    'tooSmall'=>'You cannot type year below 1',
                    'tooBig'=>'You cannot type year bigger than 2020'),
                array('title','length','max'=>128),
                array('publisher','length','max'=>128),
                array('author','length','max'=>128)
            );
    }
    
    public function attributeLabels() {
        return array(
          'title' => 'Title',
          'author' => 'Author',
          'publisher' => 'Publisher',
          'comment' => 'Comment',
          'realese_date' => 'Realese date'
        );
    }
}
