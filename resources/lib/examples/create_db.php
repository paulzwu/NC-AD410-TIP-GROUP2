<?php
	// script to create a sample database
	try {
		// open the database - creates the db if file not present
		$conn = new PDO("sqlite:test.sqlite");
		// create the table(s) within the db file
		$conn->exec("CREATE TABLE Colors (Id INTEGER PRIMARY KEY, Name TEXT, Rgb TEXT, Hex TEXT)");
		// insert data
		$conn->exec("INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Red', '255,0,0', '#ff0000');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Lime', '0,255,0', '#00ff00');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Blue', '0,0,255', '#0000ff');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Yellow', '255,255,0', '#ffff00');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Aqua', '0,255,255', '#00ffff');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Fuchsia', '255,0,255', '#ff00ff');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Olive', '128,128,0', '#808000');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Teal', '0,128,128', '#008080');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Purple', '128,0,128', '#800080');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('White', '255,255,255', '#ffffff');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Gray', '128,128,128', '#808080');".
								"INSERT INTO Colors (Name, Rgb, Hex) VALUES ('Black', '0,0,0', '#000000');");
		echo "Database created successfully";
		// closes db
		$conn = NULL;
	} catch(PDOException $e) {
		print 'Exception : '.$e->getMessage();
	}

?>

