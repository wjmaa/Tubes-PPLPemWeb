<?php
//start session
if(!isset($_SESSION)) { session_start(); } 

//connection to database
// Declaring and hoisting the variables
$firstName = "";
$lastName = "";
$gender = "";
$email = "";
$password = "";
$number = "";

$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'kebun_binatang');


//REGISTRATION AREA//

if (isset($_POST['reg_user'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $number = mysqli_real_escape_string($db, $_POST['number']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($firstName)) { array_push($errors, "FirstName is required"); }
	if (empty($lastName)) { array_push($errors, "LastName is required"); }
	if (empty($gender)) { array_push($errors, "Gender is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($number)) { array_push($errors, "Number is required"); }

	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		// Inserting data into table
		$query = "INSERT INTO registration (firstName, lastName, gender, email, password, number)
				VALUES('$firstName', '$lastName', '$gender', '$email', '$password','$number')";
		
		mysqli_query($db, $query);

		// Storing firstName of the logged in user,
		// in the session variable
		$_SESSION['firstName'] = $firstName;
		
		// Page on which the user will be
		// redirected to loggin page
		echo "<script>alert('Registrasi berhasil!'); window.location='login.php';</script>";
	}
}

//LOGIN AREEA//

if (isset($_POST['login_user'])) {
	
	// Data sanitization to prevent SQL injection
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	// Error message if the input field is left blank
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {
		$_query1 = "SELECT * FROM admin WHERE username=
		'$email' AND password='$password'";
		$result1 = mysqli_query($db, $_query1);
		if (mysqli_num_rows($result1) == 1){
			echo '<script>window.location="./admin.php"</script>';
		}
		else{
			$query = "SELECT * FROM registration WHERE email=
				'$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			// $results = 1 means that one user with the
			// entered email exists
			if (mysqli_num_rows($results) == 1) {
				
				// Storing firstName in session variable
				$qry = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
				$result = mysqli_query($db, $qry);

				while ($row = mysqli_fetch_assoc($result)) {
					
					$_SESSION['firstName'] = $row['firstName'];
					$_SESSION['lastName'] = $row['lastName'];
					
					// Page on which the user is sent
					// redirected to index page
					header('location: index.php');
					}
				
			}
			else {
				
				// If the username and password doesn't match
				array_push($errors, "Username or password incorrect");
			}
		}
	}
}

//reg tiket//
if (isset($_POST['reg_tiket'])){

	$nama_lengkap = mysqli_real_escape_string($db, $_POST['nama_lengkap']);
    $jadwal = mysqli_real_escape_string($db, $_POST['jadwal']);
    $anak_anak = mysqli_real_escape_string($db, $_POST['anak_anak_num']);
    $remaja = mysqli_real_escape_string($db, $_POST['remaja_num']);
    $dewasa = mysqli_real_escape_string($db, $_POST['dewasa_num']);
    $kode_wahana = mysqli_real_escape_string($db, $_POST['wahana']);
	$total_harga = mysqli_real_escape_string($db, $_POST['total_harga']);
	$pin = str_pad(rand(0, 99999), 5, "0", STR_PAD_LEFT);


	$query = "INSERT INTO tiket (nama_lengkap, jadwal, anak_anak, remaja, dewasa, kode_wahana, total_harga, pin)
			VALUES('$nama_lengkap', '$jadwal', '$anak_anak', '$remaja', '$dewasa','$kode_wahana', '$total_harga', '$pin')";
		
	//mysqli_query($db, $query);
	if (mysqli_query($db, $query)) {

		//simpan value di session
		$_SESSION['nama_lengkap'] = $nama_lengkap;
		$_SESSION['jadwal'] = $jadwal;
		$_SESSION['anak_anak'] = $anak_anak;
		$_SESSION['remaja'] = $remaja;
		$_SESSION['dewasa'] = $dewasa;
		$_SESSION['kode_wahana'] = $kode_wahana; 
		$_SESSION['total_harga'] = $total_harga;
		$_SESSION['pin'] = $pin;

        echo "<script>window.location='tiket/tiket-print.php'; alert('Book berhasil!');</script>";
    } else {
        echo "<script>alert('Book gagal!');</script>";
    }
	

}

?>