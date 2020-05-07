<?php

/**
 * This is the model class for table "{{project}}".
 *
 * The followings are the available columns in table '{{project}}':
 * @property integer $id
 * @property string $name
 * @property string $status
 * @property string $category
 * @property string $priority
 * @property string $images
 * @property string $client
 * @property string $leader
 * @property string $team
 * @property string $notes
 * @property string $tasks
 * @property integer $taskId
 * @property string $start_date
 * @property string $due_date
 * @property integer $days_overdue
 * @property integer $company_id
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Task[] $tasks0
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Project the static model class
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
		return '{{project}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taskId, days_overdue, company_id', 'numerical', 'integerOnly'=>true),
			array('name, status, category, priority, images, client, leader, team, notes, tasks, start_date, due_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, status, category, priority, images, client, leader, team, notes, tasks, taskId, start_date, due_date, days_overdue, company_id', 'safe', 'on'=>'search'),
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
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'tasks0' => array(self::HAS_MANY, 'Task', 'project_id'),
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
			'status' => 'Status',
			'category' => 'Category',
			'priority' => 'Priority',
			'images' => 'Images',
			'client' => 'Client',
			'leader' => 'Leader',
			'team' => 'Team',
			'notes' => 'Notes',
			'tasks' => 'Tasks',
			'taskId' => 'Task',
			'start_date' => 'Start Date',
			'due_date' => 'Due Date',
			'days_overdue' => 'Days Overdue',
			'company_id' => 'Company',
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
		$criteria->compare('status',$this->status,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('priority',$this->priority,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('client',$this->client,true);
		$criteria->compare('leader',$this->leader,true);
		$criteria->compare('team',$this->team,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('tasks',$this->tasks,true);
		$criteria->compare('taskId',$this->taskId);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('days_overdue',$this->days_overdue);
		$criteria->compare('company_id',$this->company_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}