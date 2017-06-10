<?php 

/**
 * User Interface and Class
 */

interface UserInterface
{
	public function getData():array;
}

class User implements UserInterface
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
	

	public function __construct(String $name, String $pass)
	{
		$this->name = $name;
		$this->pass = $pass;
	}


	public function getData(): array
	{
		return [
			'name' => $this->name,
			'pass' => $this->pass,
		];
	}
}


/**
 * Formater's Interface and Class
 */

interface DataFormater
{
	public function format(UserInterface $user);
}


class Json implements DataFormater
{

	/**
	 * @param  UserInterface
	 * @return String
	 */
	public function format(UserInterface $user)
	{
		return json_encode($user->getData());
	}
}


class Text implements DataFormater
{
	/**
	 * @param  UserInterface
	 * @return String
	 */
	public function format(UserInterface $user)
	{
		$text = '';
		$userData = $user->getData();
		foreach ($userData as $key => $value) {
			$text .= ucwords($key) . ': ' . $value;
			if (end($userData) != $value) {
				$text .= ', ';
			}
		}
		return $text;
	}
}

$user = new User('Dev', 'Lusaja');
$json = new Json();
$string = new Text();
var_dump($json->format($user));
var_dump($string->format($user));

?>