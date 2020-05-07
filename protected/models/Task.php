<?php

/**
 * This is the model class for table "{{task}}".
 *
 * The followings are the available columns in table '{{task}}':
 * @property integer $id
 * @property string $name
 * @property string $details
 * @property string $priority
 * @property string $assignee
 * @property string $project
 * @property integer $estimated_duration
 * @property integer $final_duration
 * @property string $start_date
 * @property string $due_date
 * @property string $logged_time
 * @property integer $project_id
 *
 * The followings are the available model relations:
 * @property Project $project0
 */
class Task extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Task the static model class
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
		return '{{task}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estimated_duration, final_duration, project_id', 'numerical', 'integerOnly'=>true),
			array('name, details, priority, assignee, project, start_date, due_date, logged_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, details, priority, assignee, project, estimated_duration, final_duration, start_date, due_date, logged_time, project_id', 'safe', 'on'=>'search'),
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
			'project0' => array(self::BELONGS_TO, 'Project', 'project_id'),
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
			'details' => 'Details',
			'priority' => 'Priority',
			'assignee' => 'Assignee',
			'project' => 'Project',
			'estimated_duration' => 'Estimated Duration',
			'final_duration' => 'Final Duration',
			'start_date' => 'Start Date',
			'due_date' => 'Due Date',
			'logged_time' => 'Logged Time',
			'project_id' => 'Project',
		);
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
		$criteria->compare('details',$this->details,true);
		$criteria->compare('priority',$this->priority,true);
		$criteria->compare('assignee',$this->assignee,true);
		$criteria->compare('project',$this->project,true);
		$criteria->compare('estimated_duration',$this->estimated_duration);
		$criteria->compare('final_duration',$this->final_duration);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('logged_time',$this->logged_time,true);
		$criteria->compare('project_id',$this->project_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}