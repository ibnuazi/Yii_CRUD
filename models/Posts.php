<?php
namespace app\models;
use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{
    private $Name;
    private $Phone;
    private $Email;

    public function rules(){
        return [
            [['Name','Phone','Email'],'required']
        ];
    }
}

?>