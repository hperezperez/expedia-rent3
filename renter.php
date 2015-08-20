<?php
/**
 * This is an simplify example of data collected  and store about renter for rent a car in a rental car companies
 * of course this can be expanded
 **/
class Car {
	private $CarId;
	/**
	 * this is the id  for car, this is the primary key
	 **/
	private $Renterid;
	/**
 * id of the car  that sentthis rent; this is the foreign key
 **/
	private $Pickuplocation;
/**
 * caracters content, this the location tha you choose to pick your car
 **/

	public function_construct($newrRenterId, $newPickuplocation, $newPickupdatetime = null) {
	try {
			$this-> set RenterId ($newRenterId);
			$this-> set Pickuplocation ($newPickuplocation);
			$this-> set Pickupdatime ($newPickupdatetime);
}  catch (InvalidArgumentException $ invalidArgument){
			throw (new InvalidArgumentException)
}
}
/**
 * accesor method for Carid
 */
public function getCardId() {
	return ($this->CarId);

}
 public function setCarId($newCarId){
 if($newCarId === null) {
	   $this->CarId  = null;
	 	return;
 }
	//verify the Carid is valid
	$newCarId = filter_var($newCarId,FILTER_VALIDATE_INT);

 if ($newCarId.Id === false){
	 			throw (new InvalidArgumentException ( "CarId is not a valid integer") );

 }
	 if ( $newCarId.<=0) {
	 throw (new RangeException("Car ID is not positive"));
	  }

/**
 * accesor method for RenterId
 **/

public function get Renterid ( );{
		return ($ this -> RenterId);
}
/** mutator method fo Renter id
 * */

public function setRenterId ($newRenterId){
		//verify the renterid is valid
			$newRenterId = filter-var ($newRenterId,FILTER_VALIDATE_INT.);
	}
	// base case: if the datais null,use the current date and time
	if ($newPickup_datetime === null){
					$this -> Pickup_datetime = new Datetime ();
					return;
		//store the rent data
		try{
			$newPickup_datetime = validateDate ($newPickup_datetime.);
		}
		catch (InvalidArgumentException $invalidArgument) {
			throw
		}
	}
}

function connectToEncryptedMySQL($renter) {
	// grab the encrypted mySQL properties file and create the DSN
	$config = readConfig($renter);
	$dsn = "mysql:host=" . $config["hostname"] . ";dbname=" . $config["database"];
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return($pdo);
}
?>
rquieer-once ("/etc/apache2/data-design/encripted-config
