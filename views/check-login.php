<?php
session_start();

# check apakah ada akse post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['login-username']) ) { header('location:/'); exit(); }

# set nilai default dari error,
$error = '';

require ( 'config.php' );

$username = trim( $_POST['login-username'] );
$password = trim( $_POST['login-password'] );

if( strlen($username) < 2 )
{
	# jika ada error dari kolom username yang kosong
	$error = '   
	<div class="alert alert-warning alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Warning</h3>
                                        <p class="mb-0">
                                            Username Tidak Boleh Kosong <a class="alert-link" href="javascript:void(0)">link</a>!
                                        </p>
                                    </div>                                      
  
	';
}else if( strlen($password) < 2 )
{
	# jika ada error dari kolom password yang kosong
	$error =  '   
	<div class="alert alert-warning alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Warning</h3>
                                        <p class="mb-0">
                                            Password Tidak Boleh Kosong <a class="alert-link" href="javascript:void(0)">link</a>!
                                        </p>
                                    </div>                                       
  
	';
}else{
	// if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
	// {
	// echo'<script>alert(\'Kode Captcha Salah ! !\')
	// setTimeout(\'location.href="./"\' ,0);</script>';
	// exit;
	// }
	# Escape String, ubah semua karakter ke bentuk string
	$username = $koneksi->escape_string($username);
	$password = $koneksi->escape_string($password);

	# hash dengan md5
	$password = ($password);

	# SQL command untuk memilih data berdasarkan parameter $username dan $password yang 
	# di inputkan
	$sql = "SELECT id, nama, userfile_user, username, hak_akses FROM table_users 
			WHERE username='$username' 
			AND password='$password' LIMIT 1";

	# melakukan perintah
	$query = $koneksi->query($sql);

	# check query
	if( !$query )
	{
		die( 'Oops!! Database gagal '. $koneksi->error );
	}

	# check hasil perintah
	if( $query->num_rows == 1 )
	{	
		# jika data yang dimaksud ada
		# maka ditampilkan
		$row =$query->fetch_assoc();
		
		# data nama disimpan di session browser
		$_SESSION['id'] = $row['id']; 
		$_SESSION['nama'] = $row['nama']; 
		$_SESSION['userfile_user'] = $row['userfile_user']; 
		$_SESSION['akses']	   = $row['hak_akses'];
		$_SESSION['username']	   = $row['username'];
		$_SESSION['hak_akses']	   = $row['hak_akses'];
		

		if( $row['hak_akses'] == 'dashboard')
		{
			# data hak Admin di set
			$_SESSION['saya_admin']= 'TRUE';
		}

		if( $row['hak_akses'] == 'user')
		{
			# data hak Admin di set
			$_SESSION['saya_user']= 'TRUE';
		}

		if( $row['hak_akses'] == 'guru')
		{
			# data hak Admin di set
			$_SESSION['saya_guru']= 'TRUE';
		}

		# menuju halaman sesuai hak akses
		header('location:'.$url.'/'.$_SESSION['akses'].'/');
		exit();

	}else{
		
		# jika data yang dimaksud tidak ada
		$error = '   
		<div class="alert alert-danger alert-dismissable" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h3 class="alert-heading font-size-h5 font-w700 mb-5">Login Gagal!!</h3>
		<p class="mb-0">
			Username/Password Yang Anda Masukan Salah!!</a>!
		</p>
	</div>                                        
      
        ';
	}

}

if( !empty($error) )
{
	# simpan error pada session
	$_SESSION['error'] = $error;
	header('location:'.$url.'/');
	exit();
}