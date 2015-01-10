<?php

/**
 * This is the model class for table "tbl_staff".
 *
 * The followings are the available columns in table 'tbl_staff':
 * @property integer $staff_id
 * @property string $staff_account
 * @property string $staff_pwd
 * @property string $fullname
 * @property string $created_at
 * @property string $updated_at
 * @property integer $del_flg
 */
class Staff extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staff_account, staff_pwd, fullname', 'required'),
			array('del_flg', 'numerical', 'integerOnly'=>true),
			array('staff_account, staff_pwd, fullname', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('staff_id, staff_account, staff_pwd, fullname, created_at, updated_at, del_flg', 'safe', 'on'=>'search'),
            //Tự động ghi nhớ trường ngày tháng            
            array('updated_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
            array('created_at,updated_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'staff_id' => 'Staff',
			'staff_account' => 'Staff Account',
			'staff_pwd' => 'Staff Pwd',
			'fullname' => 'Fullname',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'del_flg' => 'Del Flg',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('staff_account',$this->staff_account,true);
		$criteria->compare('staff_pwd',$this->staff_pwd,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('del_flg',$this->del_flg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staff the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function getUserLogin($username) {
        $criteria= new CDbCriteria;
        $criteria->condition = 'del_flg=:del_flg';
        $criteria->params = array(':del_flg'=>0);
        return $this->model()->findByAttributes(array('staff_account'=>$username),$criteria);
    }
}
