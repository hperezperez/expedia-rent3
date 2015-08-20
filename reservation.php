<?php
/** This reservstion is  an short example  of  data collected and store a renter for renting  purpose
 * this can be extented
 * @author Humberto Perez <hperezperez@cnm.edu>
 **/
class Reservation {
/**
 *id for this reservation; this  is the primary id
 **/
	private $reservationId;
/**
 * id for the renter  whose owns this reservation ; this is a foreign key
 **/
	private $renterId;
	/**
	 * confirmation of the locat ion of the car rented
	 **/
	private $locationConfirmation;
	/**
	 * confirmation of  the provider (Avis, BUdget. etc.)
	**/
	private $providerConfirmation;

	/**
	 * constructor for this Reservation
	 **/
	public function__construc($newReservationId, $newRenterId, $newLocationConfirmation, $newProviderConfirmation){
				try{
							$this->setReservationId($newReservationId);
							$this->setRenterId($newRenterId);
							$this->setLocationConfirmation($newLocationConfirmaton);
							$this->setProviderConfirmation($newProviderConfirmation);
                } catch(UnexpectedValuedException $exception) {
								//rethrow to the caller
								throw(new UnexpectedValueException("Unable to construct Reservation", 0, $exception ));
                 }
    }
	  /**
		* accesor method for reservation id
		*
		* @return int value of reservation id
		*/
	public function getReservationID() {
				return ($this->reservationId);
	}
	/**
	 * mutator method  for  reservation id
	 *
	 * @param int $newwReservationId new value of reservation id
	 * @throws UnexpectedValueException if $newResevationId is not aan intenger
	 */
	public function setReservationId($newReservationId){
		// verify  the reservation id is valid
		$newReservation = filter_var($newReservationId, FILTER_VALIDATE_INT);
		if ($newReservationId ===false){
					throw ( new UnexpectedValueException("renter id is not a valid integer"));
		}
		// convert and store  the profile id
		$this ->reservationId = intval($newReservationId);
	}
		/**
		 * accesor method for  renter  id
		 *
		 *@return int value of renter id
		**/
	public function getRenterId( ) {
					return ($this->renterId);
	}
	/**
	 * mutator method for renter id
	 *
	 * @param int $newRenterId new value of  reservation id
	 * @throws UnexpectedValueException if $newRenter
	**/
	public function setRenterId($newRenterID) {
	//verify the user id is valid
	$newRenterId = filter_var($newRenterId, FILTER_VALIDATE_INT);
	if($newRenterId === false) {
		throw(new UnexpectedValueException("renter id is not a valid integer"))
			}
    }
		//convert and store the renter id
		$this->renterId = intval($newRenterId);
	}
	/**
	 * accesor method for locationconfirmation
	 *
	 * @return string value of locationconfirmation
	 **/
	public function getlocationConfirmation() {
					return($this->locationConfirmation);
	}

	/**
	 * mutator method for locationConfirmation
	 *
	 * @param string $newLocationConfirmation new value of location confirmation
	 * @throws UnexpectedValueException if $newLocationConfirmation is not valid
	 */
	public function  setLocationConfirmation($newLocationConfirmation) {
				//verify the locationConfirmation is valid
		$newLocationConfirmation = filter_var($newLocationConfirmation, FILTER_SANITIZE_STRING);
		if ($newLocationConfirmation === false) {
					throw(new UnexpectedValueException(" locationConfirmation is not a valid string"));
		}
		//store the location confirmation
		$this->locationConfirmation = $newLocationConfirmation;
	}
	/**
	 * this is the accessor method for providerConfirmation
	 *
	 * @return string value of provider
	 **/
	public function getProviderConfirmation(){
				return($this->providerConfirmation);
	}
	/**
	 * this is the mutator  method for providerConfirmation
	 *
	 * @param string $newProviderConfirmation new value of providerConfirmation
	 **/
	public function  setProviderConfirmation($newProviderConfirmation) {
	// verify  the provider cofirmation is valid
	$newProviderConfirmation = filter_var($newProviderConfirmation,FILTER_SANITIZE_STRING .);
		if($newProviderConfirmation === false) {
			throw(new UnexpectedValueException(" provider corfimation is not a valid string"));
		}

		//store the provider confirmation
		$this->providerConfirmation = $newProviderConfirmation;
	}
	/**
	 * * toString() magic method
	 *
	 * @return string HTHL formated profiled
	 **/
	public function__toString(){
			//create an HTML formatted Reservation
			$html = "<p>Reservation id" . $this->reservationId , "<br/>"
											."Renter Id: "     .$this->renterId
		."<br />"
                   ."Location confirmation: "    .$this->locationConfirmation
      ."<br/>"
						 ."Provider confirmation: "    .$this->providerConfirmation
							."</p>";
			return($html);
     }

}