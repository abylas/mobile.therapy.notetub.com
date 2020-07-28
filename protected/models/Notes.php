<?php

/**
 * This is the model class for table "{{notes}}".
 *
 * The followings are the available columns in table '{{notes}}':
 * @property integer $id
 * @property string $name
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 */
class Notes extends CActiveRecord
{

    const STATUS_DRAFT=1;
    const STATUS_PUBLISHED=2;
    const STATUS_ARCHIVED=3;

    private $_oldTags;

    /**
	 * Returns the static model of the specified AR class.
	 * @return Notes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

//    public function behaviors(){
//        return array(
//            'CTimestampBehavior' => array(
//                'class' => 'zii.behaviors.CTimestampBehavior',
//                'createAttribute' => 'create_time',
//                'updateAttribute' => 'update_time',
//            ));
//    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{notes}}';
	}

//    public function behaviors(){
//        return array('CTimestampBehavior'=>array(
//            'class' => 'zii.behaviors.CTimestampBehavior',
//            'createAttribute' => 'create_time',
//            'updateAttribute' => 'update_time',
//            'setUpdateOnCreate' => true,
//        ));
//    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('name', 'safe'),
            array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/', 'message'=>'Tags can only contain word characters.'),
            array('tags', 'normalizeTags'),

            //			array('name, status, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, status, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

//$this->create_time=$this->update_time=time();

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
			'id' => 'ID',
			'name' => 'Name',
            'tags' => 'Tags you have selected',
			'status' => 'Status',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		);
	}

    public function getUrl()
    {
        return Yii::app()->createUrl('notes/view', array(
            'id'=>$this->id,
            'name'=>$this->name,
        ));
    }

    /**
     * @return array a list of links that point to the post list filtered by every tag of this post
     */
    public function getTagLinks()
    {
        $links=array();
        foreach(Tag::string2array($this->tags) as $tag)
            $links[]=CHtml::link(CHtml::encode($tag), array('notes/index', 'tag'=>$tag));
        return $links;
    }

    /**
     * Normalizes the user-entered tags.
     */
    public function normalizeTags($attribute,$params)
    {
        $this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
    }


    /**
     * This is invoked when a record is populated with data from a find() call.
     */
    protected function afterFind()
    {
        parent::afterFind();
        $this->_oldTags=$this->tags;
    }

    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->create_time=$this->update_time=new CDbExpression('NOW()'); //new CDbExpression('NOW()');   //time();
//                $this->author_id=Yii::app()->user->id;
            }
            else
                $this->update_time= new CDbExpression('NOW()'); //new CDbExpression('NOW()'); //time();
            return true;
        }
        else
            return false;
    }

    /**
     * This is invoked after the record is saved.
     */
    protected function afterSave()
    {
        parent::afterSave();
        Tag::model()->updateFrequency($this->_oldTags, $this->tags);
    }

    /**
     * This is invoked after the record is deleted.
     */
    protected function afterDelete()
    {
        parent::afterDelete();
//        Comment::model()->deleteAll('post_id='.$this->id);
        Tag::model()->updateFrequency($this->tags, '');
    }

    /**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
//		$criteria->compare('status',$this->status,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider(
//		    get_class($this),
            'Notes',
            array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'update_time DESC',
            ),
		));
	}
}