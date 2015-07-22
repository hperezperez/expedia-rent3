<!DOCTYPE html>
<html lang="en">

	<title>Data Design Proyect Phase 1 </title>
	<head>
		<meta charset="utf-8">
		<title>Data Design Proyect Phase 1 </title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1> JOSE SANCHEZ Persona</h1>
			</header>
			<p> He is school teacher. He likes extreme sports. He  likes speed.</P>
			<p>He is single with one kid and one dog. He travels in the summer.</p>
			<p>His salary is 35,ooo per year. Acording  to his family size he needs a medium car o greater</p>
			<img src="graficas/graficas/actionfoto.jpg" alt="action">
			<h3>Use cases</h3>
			<ul>

				<li>The first use case is A person rent a car by</li>
				<p>1)accesing the site,</p>
				<simple>- a)   pick up locatio</simple>
				<p>- b)  pickup date and time</p>
				<p>- c)  choose a price
				<p>- d)  choose provider</p>
				<p>2) clicking </p>
				<p>-a)get rental confirmatio num</p>
				<p>-b) get location</p>
				<p>-c) get price's confirmation</p>

				<p>3)	clicking.</p>
				<li>The  second use case is A person rent a car  by</li>
				<p>1)	accessing  the site </p>
				<p> -they are the same steps a,b,c and d from previous case1</p>
				<p>2)   reserve the car </p>
				<p> -a) renter get reservation num</p>
				<p> -b) renter get reservation location inf</p>
				<p> -c) renter get reservation price inf</p>
				<p>3)later	rent the car</p>
				<li> The third use case is a person try to rent a car by </li>
				<p>1)accesing the site</p>
				<p> They are the same  step a,b,c, and from previous case 1</p>
				<p>2)make reservation</p>
				<p> they ar the same step a,b,c, and from case 2</p>
				<p>3)but never reserve it </p>
			</ul>
			<h1>Entity Relationship Diagram</h1>
			<img src="graficas/graficas/dibujo1.jpg"alt="diagram">
			<div clas="sql">

				<p>DROP TABLE IF EXISTS reservation; </p>
				<p>DROP TABLE IF EXISTS car_rented; </p>
				<P>DROP TABLE IF EXISTS renter;</P>

				<P> </P>
				<p>CREATE TABLE renter(</p>
				<p>renterid       INT UNSIGNED AUTO-INCREMENTS NOT NULL</p>
				<p>picklocation   VARCHAR(32)</p>
				<P>returnloation  VARCHAR(32)</P>
				<P>pickdate       DATE NOT NULL</P>
				<P>returndate     DATE NOT NULL</P>
				<P>picktime       TIMESTAMP NOT NULL</P>
				<P>returntime     TIMESTAMP NOT NULL</P>
				<P>unique( )</P>
				<p>unique( )</p>
				<p>PRIMARY KEY (renter id)</>
				<P>);</P>
				<p>CREATE TABLE car-rented (</p>
				<p>car_rentedid INT UNSIGNED AUTO-INCREMENTS NOT NULL</p>
				<P>renterid     INT UNSIGNED NOT NULL</P>
				<P>price        DECIMAL(5,2)  NOT NULL</P>
				<P>provider     VARCHAR (32)  NOT NULL</P>
				<P>location     VARCHAR (32)  NOT NULL</P>
				<p>INDEX (renterid)</p>
				<p>FOREIGN KEY (renterid)  REFERENCES renter (renterid),</p>
				<p>PRIMARY KEY  (car_rented id)</p>
				<p>);</p>
				<p>    </p>
				<p>CREATE TABLE reservation ( </p>
				<P> renterid INT UNSIGNED NOT NULL,</P>
				<P>reservationid INT UNSIGNED NOT NULL,</P>
				<P>reservationloc VARCHAR (32)</P>
				<P>reservationprice decimal(5,2)</P>
				<P> INDEX (renterid) REFERENCES Rresevation (renterid)</P>
				<p> FOREIGN KEY (renterid)</p>
				<P> PRIMARY KEY (	reservationid)</P>
				<p> </p>



			</div>
	</body>
</html>



