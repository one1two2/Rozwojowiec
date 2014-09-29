<?php

class Book extends CActiveRecord{
        /**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */     
        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{book}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, author, publisher, comment, realese_date', 'required'),
			array('title, author, publisher', 'length', 'max'=>128),
		);
	}
        /**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'title' => 'Title',
			'author' => 'author',
			'publisher' => 'Publisher',
			'comment' => 'Comment',
			'realese_date' => 'Realese_date',
		);
	}
}

