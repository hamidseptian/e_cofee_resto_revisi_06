
<?php 
include "../../../../assets/koneksi.php";
require '../../../../assets/PHPMailer/PHPMailerAutoload.php';
$id=$_GET['id'];

	$q1=mysqli_query($conn, "UPDATE toko  set status='1' where id_toko='$id'") or die(mysqli_error()); 

// $from = "kamilhayatiputri@gmail.com";

// $to = "hamidseptian@gmail.com";

// $subject = "Checking PHP mail";

// $message = "PHP mail berjalan dengan baik";

// $headers = "From:" . $from;

// mail($to,$subject,$message, $headers);

// echo "Pesan email sudah terkirim.";


// die;

// $email_pengirim = "kamilhayatiputri@gmail.com";
//         $isi="isi";
//         $subjek="subjek";
//         $email_tujuan="hamidseptian@gmail.com";

//         $mail = new PHPMailer();

//         $mail->IsHTML(true);    // set email format to HTML
//         $mail->IsSMTP();   // we are going to use SMTP
//         $mail->SMTPAuth   = true; // enabled SMTP authentication
//         $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
//         $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
//         $mail->Port       = 465;                   // SMTP port to connect to GMail
//         $mail->Username   = $email_pengirim;  // alamat email kamu
//         $mail->Password   = "kamilhyp12";            // password GMail
//         $mail->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
//         $mail->Subject    = $subjek;
//         $mail->Body       = $isi;
//         $mail->AddAddress($email_tujuan);

//         if(!$mail->Send()) {
//             echo "Eror: ".$mail->ErrorInfo;
//             exit;
//         }else {
//             echo "<div class='alert alert-success'><strong>Berhasil!</strong> Email telah berhasil dikirim.</div>";
//         }



?>

	<script type="text/javascript">
		alert('Toko sudah dijadikan Mitra');
		window.location.href="../../?a=toko"

	</script>