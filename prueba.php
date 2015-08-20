require-once("/etc/apache2/data-design/encrypted-config.php");
require-once("car.php");


try  {
 			$pdo = connectToEncryptedMySQL("/etc/apache2/data-design/hperezperez.ini");
}			$Car = $newCarId (null,1, "foo", "2015-07-22 10-07-08");
			$Car-> insert ($pdo);
			var-dump ($  Car);
	}  		catch (PDOEXCEPTION $pdoException){
	// handle PDO error
	} catch (Exception $exception) {
	//handle others erros
	}

