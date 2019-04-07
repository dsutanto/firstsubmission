<?PHP
include_once "connection.php";
class User {
	private $user_id, $name, $email, $gender;
	protected $connection;
	public function getUserId() {
		return ($this->user_id);
	}

	public function setUserId($userId) {
		$this->user_id = $userId;
	}

	public function getFullName() {
		return ($this->name);
	}

	public function setFullName($fullName) {
		$this->name = $fullName;
	}

	public function getEmail() {
		return ($this->email);
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getGender() {
		return ($this->gender);
	}
	public function setGender($gender) {
		$this->gender = $gender;
	}

	function read() {

		try{
			
		$this->connection = new Connection();
		$conn = $this->connection->openConnection();

		$read = $conn->prepare("Select * from [dbo].[User];");
		$read->execute();

		if ($read->rowCount() > 0) {
			return $read->fetchAll(PDO::FETCH_ASSOC);

		} else {
			echo "<i style='color:red'>No Record Found<i>";
			return (false);
		}

		$this->connection->closeConnection();
		}catch (Exception $e) {
    echo $e->getMessage();
}

	}
}
?>
