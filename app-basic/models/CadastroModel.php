<?php

namespace app\models;

//use yii\base\Model;
use yii\db\ActiveRecord;

Class CadastroModel extends ActiveRecord
{  
  public $idade;

  public static function tableName()
    {
        return 'pessoas'; 
    }

   public function rules()
   {
      return [
        [['nome', 'email', 'idade'], 'required'],
        ['email', 'email'],
        ['idade', 'number', 'integerOnly' => true],
      ];
   }

   public function attributeLabels()
   {
     return [
       'nome' => 'Nome Completo',
       'email' => 'E-mail',
       'idade' => 'Idade',
     ];
   }
}



