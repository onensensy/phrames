<?php
class Employee extends Model
{
	// Table
	protected $table = 'employees';

	// Attributes
	public $name;
	public $position;

	public function parents($employee_id)
	{
		$result = $this->connection->query(
			'SELECT
				`parents`.`employee_id`,
				`parents`.`name`
			FROM
				`parents`
				INNER JOIN `employees` ON `parents`.`employee_id` = `employees`.`id`
			WHERE
				(`parents`.`employee_id` =' . $employee_id . ')
			'
		);

		$result->execute();

		return $result->fetchAll(PDO::FETCH_OBJ);
	}
}
