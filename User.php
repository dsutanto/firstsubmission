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

		$this->connection = new Connection();
		$conn = $this->connection->openConnection();

		$read = $conn->prepare("SELECT * FROM [dbo].[User]");
		$read->execute();

		return $read->fetchAll(PDO::FETCH_ASSOC);

		$this->connection->closeConnection();

	}

	function create() {
		$this->connection = new Connection();
		$conn = $this->connection->openConnection();

		$insert = $conn->prepare("INSERT INTO [dbo].[User] ('FullName', 'Email', 'Gender') VALUES (:name, :email, :gender)");

		try {
			$conn->beginTransaction();
			$result = $insert->execute(array(
				'FullName' => $this->getFullName(),
				'Email' => $this->getEmail(),
				'Gender' => $this->getGender()
			));

			
			if ($result) {
				$conn->commit(); //Saving data permanantly
				echo "<i style='color:green'>User Saved Successfully..! <i>";
			} else {
				echo "<i style='color:red'>There are some problem while saving the Data...! <i>";
			}
		} catch (PDOExecption $e) {
			$conn->rollback();
			print "Error!: " . $e->getMessage() . "</br>";
		}

		$this->connection->closeConnection();

	}

}
?>