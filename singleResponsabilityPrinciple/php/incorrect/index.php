<?php 

/**
 * 
 */
class User
{
	
	/**
	 * User name
	 * @var String
	 */
	private $name;

	/**
	 * User password
	 * @var String
	 */
	private $pass;

	/**
	 * @param String
	 * @param String
	 */
	function __construct(String $name, String $pass)
	{
		$this->name = $name;
		$this->pass = $pass;
	}

	/**
	 * @param string
	 */
	public function getDataJson(): String
	{
		$data = [
			'Name' => $this->name,
			'pass' => $this->pass,
		];
		return json_encode($data);
	}

	/**
	 * @return String
	 */
	public function getDataText(): String
	{
		$data = "Name: {$this->name}, Pass: {$this->pass}";
		return $data;
	}
}

$user = new User('Dev', 'Lusaja');
var_dump($user->getDataJson());
var_dump($user->getDataText());

?>