<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	public function actionIndex()
	{
            $model = new BookForm;
            if(isset($_POST['BookForm'])){
                    echo CActiveForm::validate(array($model));
                    Yii::app()->end();
            }
            $books = Book::model()->findAll(array('order'=>'id DESC'));
            $this->render('books',array(
               'books' => $books, 
               'model'  => $model,
            ));
	}
        public function actionAdd(){
            if(Yii::app()->request->isAjaxRequest){
                $model=new BookForm;
                $model->attributes = $_POST['BookForm']; 
                if($model->validate()){
                    $book = new Book;
                    $book->comment = $model->comment;
                    $book->author = $model->author;
                    $book->realese_date = $model->realese_date;
                    $book->title = $model->title;
                    $book->publisher = $model->publisher;
                    $book->save();
                    $this->renderPartial('book',array(
                        'book' => $book 
                    ));
                }
            }
        }
        public function actionDelete(){
            if(Yii::app()->request->isAjaxRequest){
                $pk = $_POST["pk"];
                $book = Book::model()->findByPk($pk);
                Book::model()->deleteByPk($pk);
                $this->renderPartial('delete',array(
                    'book' => $book 
                ));
            }
        }
}