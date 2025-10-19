<?php
namespace app\models;

//is used as a parent for model classes not associated with database tables
use yii\base\Model;

//is normally the parent for model classes that do correspond to database tables.
// yii\db\ActiveRecord 

class EntryForm extends Model {

  public $name;
  public $email;

  //Returns a set of rules for validating the data
  public function rules(){
    return [
      [['name', 'email'], 'required'],
      ['email', 'email']
    ];
  }
}
