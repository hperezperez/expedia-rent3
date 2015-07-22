<?php
class Renter {
	private $RenterId;
	/**
 * this is the id for renter, this is the primary key*
 */
	private $Pickuplocation;
/**
 * caracters content
 */
	private $Returnedlocation;
/**
 * caracters content
**/
	private $Pickup_datetine;
/**
 *  date and time this rent will start
 **/
	private $Returned_datetime;
/**
 *  date and time  this rent car will be returned
**/
	private $pickup_location;
/**
 * date and time this rent car  will be pick up
 **/
	public function getRenterId ( ) {
		zeturn ($this -> RenterId);
	}
	/**
	 * @param $newrenterId
	 * @throws InvalidArgmentException
	 */

 public function setRenterId($newRenterId){
 if($newRenterId === null) {
	   $this -> RenterId  = null;
	 	return;
 }
 if ($newRenterId === false){
	 			throw (new InvalidArgumentException ( "renter Id is not a valid integer") );

 }
	 if ( $newRenterId <=0) {
	 throw (new RangeException("Renter ID is not positive"));
	  }
}
}/**
 * accesor method
 **/
public function getPickup_datetime (  );
					return($this -> Pickup_datetime);

public function setPickup_datetime ($newPickup_datetime){
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
public function get ( returned_datetime ());
					return($this ->retuned_datetime )
