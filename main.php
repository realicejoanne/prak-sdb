<?php
include ("koneksi/koneksi.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Klinik</title>
		<link rel="icon" href="lib/img/first_kit.png">
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<!--Import materialize.css-->
		<link href='css/materialize.min.css' type='text/css' rel='stylesheet'  media='screen,projection'>
		<link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>
		<link href='css/jquery.dataTables.min.css' type='text/css' rel='stylesheet'>
		
		<link rel='stylesheet' href='fonts/font-awesome/css/font-awesome.min.css'>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type='text/javascript' src='js/jquery.dataTables.min.js'></script>
		<script type='text/javascript' src='js/materialize.min.js'></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('.tabel_klinik').dataTable();
			$('select').material_select();
		});
		</script>
	
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body data-twttr-rendered='true'>
		<header>
			<div class='container'>
				<a href='#' data-activates='nav-mobile' class='button-collapse top-nav'><i class='mdi-navigation-menu'></i></a>
			</div>
			<ul id='nav-mobile' class='side-nav fixed'>
				<li class='logo'><a id='logo-container' href='beranda' class='brand-logo'><object id='front-page-logo' type='image/svg+xml' data='lib/img/first_kit.svg'>Your browser does not support SVG</object></a></li>
				<li class='no-padding'>
					<ul class='collapsible collapsible-accordion'>
						<li class='bold'><a class='collapsible-header waves-effect waves-teal'><i class='fa fa-users fa-fw'></i>Data Diri</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-datadiri'>Input Data</a></li>
									<li><a href='view-datadiri'>View Data</a></li>
								</ul>
							</div>
						</li>
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-user fa-fw'></i>Pasien</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-pasien'>Input Data</a></li>
									<li><a href='view-pasien'>View Data</a></li>
								</ul>
							</div>
						</li>
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-user-md fa-fw'></i>Dokter</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-dokter'>Input Data</a></li>
									<li><a href='view-dokter'>View Data</a></li>
								</ul>
							</div>
						</li>
						<!--
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-heartbeat fa-fw'></i>Perawat</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-perawat'>Input Data</a></li>
									<li><a href='view-perawat'>View Data</a></li>
								</ul>
							</div>
						</li>
						-->
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-calendar-plus-o fa-fw'></i>Perawatan</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-perawatan'>Input Data</a></li>
									<li><a href='view-perawatan'>View Data</a></li>
								</ul>
							</div>
						</li>
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-clipboard fa-fw'></i>Resep</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-resep'>Input Data</a></li>
									<li><a href='view-resep'>View Data</a></li>
								</ul>
							</div>
						</li>
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-medkit fa-fw'></i>Obat</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-obat'>Input Data</a></li>
									<li><a href='view-obat'>View Data</a></li>
								</ul>
							</div>
						</li>
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-calendar fa-fw'></i>Appointment</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-appointment'>Input Data</a></li>
									<li><a href='view-appointment'>View Data</a></li>
								</ul>
							</div>
						</li>
						<li class='bold'><a class='collapsible-header  waves-effect waves-teal'><i class='fa fa-building fa-fw'></i>Departemen</a>
							<div style='' class='collapsible-body'>
								<ul>
									<li><a href='input-dept'>Input Data</a></li>
									<li><a href='view-dept'>View Data</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>	
			</ul>
		</header>	
		<main>
		<nav>
			<div class='nav-wrapper' style='background-color:#106577;'>
			<?php
			switch($_GET["page"]){
				case "beranda":
				echo"
					<ul class='right hide-on-med-and-down'>
						<a href='#'><i class='fa fa-home fa-fw'></i> Beranda</a>
					</ul>";
				break;
				
				case "input_datadiri":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-user fa-fw'></i> Input Data Diri</a></li>				
					</ul>";
				break;
				
				case "view_datadiri":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Diri</a></li>
					</ul>";
				break;
				
				case "input_pasien":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-user fa-fw'></i> Input Data Pasien</a></li>				
					</ul>";
				break;
				
				case "view_pasien":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Pasien</a></li>
					</ul>";
				break;
				
				case "input_dokter":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-user-md fa-fw'></i> Input Data Dokter</a></li>				
					</ul>";
				break;
				
				case "view_dokter":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Dokter</a></li>
					</ul>";
				break;
				
				case "input_perawat":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-heartbeat fa-fw'></i> Input Data Perawat</a></li>				
					</ul>";
				break;
				
				case "view_perawat":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Perawat</a></li>
					</ul>";
				break;
				
				case "input_perawatan":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-calendar-plus-o fa-fw'></i> Input Data Perawatan</a></li>				
					</ul>";
				break;
				
				case "view_perawatan":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Perawatan</a></li>
					</ul>";
				break;
				
				case "input_resep":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-clipboard fa-fw'></i> Input Data Resep</a></li>				
					</ul>";
				break;
				
				case "view_resep":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Resep</a></li>
					</ul>";
				break;
				
				case "input_obat":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-medkit fa-fw'></i> Input Data Obat</a></li>				
					</ul>";
				break;
				
				case "view_obat":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Obat</a></li>
					</ul>";
				break;
				
				case "input_appointment":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-calendar fa-fw'></i> Input Data Appointment</a></li>				
					</ul>";
				break;
				
				case "view_appointment":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Appointment</a></li>
					</ul>";
				break;
				
				case "input_departemen":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='fa fa-building fa-fw'></i> Input Data Departemen</a></li>				
					</ul>";
				break;
				
				case "view_departemen":
				echo"
					<ul class='right hide-on-med-and-down'>
						<li><a href='#'><i class='material-icons left'>pageview</i>View Data Departemen</a></li>
					</ul>";
				break;
				
				
			
			}
			?>
			</div>
		</nav>
		<?php
		switch($_GET["page"]){
			
			case "beranda":
				echo"
				<div class='container'>
				<!--  Outer row  -->
					<div class='row'>
						<div class='col s12 m9 l10'>
							<!--  Material Design -->
							<div id='materialdesign' class='section scrollspy'>
								<div class='row section'>
									<h2 class='header light'>Sistem Klinik</h2>
									<div class='row center'>
										<h6 class='header col s12 light'>
											Merupakan sebuah aplikasi sederhana yang bertujuan membantu pengolahan data-data yang dibutuhkan dalam suatu sistem kerja klinik
										</h6>
										<img src='lib/img/first_kit.png'>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<!-- End Container -->";
			break;
		
			case "input_datadiri":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=inputdatadiri'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>description</i>
														<input id='id' name='id_person' type='text' class='validate'>
														<label for='ID'>ID Person (KTP/KTM/Kartu Pelajar)</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>account_circle</i>
														<input id='nama' name='nama' type='text' class='validate'>
														<label for='Nama'>Nama</label>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>mode_edit</i>
															<textarea id='alamat' name='alamat' class='materialize-textarea'></textarea>
															<label for='Alamat'>Alamat</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>location_on</i>
															<input id='tempat-lhr' name='tempat_lhr' type='text' class='validate'>
															<label for='Tempat Lahir'>Tempat Lahir</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='dob' name='tgl_lhr' type='text' class='datepicker'>
															<label for='DOB'>Tanggal Lahir</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>phone</i>
														<input id='kontak' name='kontak' type='text' class='validate'>
														<label for='Kontak'>No Kontak</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_datadiri":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID</th>
									<th data-field='Nama'>Nama</th>
									<th data-field='Alamat'>Alamat</th>
									<th data-field='Tempat Lahir'>Tempat Lahir</th>
									<th data-field='Tanggal Lahir'>Tanggal Lahir</th>
									<th data-field='Kontak'>Kontak</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM data_diri");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_person]</td>
								<td>$b[nama]</td>
								<td>$b[alamat]</td>
								<td>$b[tempat_lhr]</td>
								<td>$b[tgl_lhr]</td>
								<td>$b[kontak]</td>
								<td><a class='modal-trigger' href='#$b[id_person]'>Edit </a><a href='proses.php?page=delete_datadiri&id=$b[id_person]'> Delete</a>
								<div id='$b[id_person]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_datadiri'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_person' type='hidden' class='validate' value='$b[id_person]'>
													<input id='nama' name='nama' type='text' class='validate' value='$b[nama]'>
													<label for='Nama'>Nama</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='alamat' name='alamat' type='text' class='validate' value='$b[alamat]'>
													<label for='Alamat'>Alamat</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tempat-lhr' name='tempat_lhr' type='text' class='validate' value='$b[tempat_lhr]'>
													<label for='Tempat Lahir'>Tempat Lahir</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl-lhr' name='tgl_lhr' type='text' class='datepicker' value='$b[tgl_lhr]'>
													<label for='Tanggal Lahir'>Tanggal Lahir</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='kontak' name='kontak' type='text' class='validate' value='$b[kontak]'>
													<label for='No Kontak'>No Kontak</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_pasien":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_pasien'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>description</i>
														<input id='id' name='id_pasien' type='text' class='validate'>
														<label for='ID'>ID Pasien</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_person' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Person (KTP/KTM/Kartu Pelajar)</option>";
															$a = mysql_query("SELECT * FROM data_diri WHERE id_person NOT IN(SELECT id_person FROM pasien)");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_person]'>$b[id_person]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='tgl-registrasi' name='tgl_registrasi' type='text' class='datepicker'>
															<label for='Tgl Registrasi'>Tanggal Registrasi</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_pasien":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Pasien</th>
									<th data-field='ID Person'>ID Person</th>
									<th data-field='Nama'>Nama</th>
									<th data-field='Alamat'>Alamat</th>
									<th data-field='Tempat Lahir'>Tempat Lahir</th>
									<th data-field='Tanggal Lahir'>Tanggal Lahir</th>
									<th data-field='Kontak'>Kontak</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM data_diri INNER JOIN pasien ON data_diri.id_person = pasien.id_person");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_pasien]</td>
								<td>$b[id_person]</td>
								<td>$b[nama]</td>
								<td>$b[alamat]</td>
								<td>$b[tempat_lhr]</td>
								<td>$b[tgl_lhr]</td>
								<td>$b[kontak]</td>
								<td><a class='modal-trigger' href='#$b[id_pasien]'>Edit </a><a href='proses.php?page=delete_pasien&id=$b[id_person]'> Delete</a>
								<div id='$b[id_pasien]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_pasien'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_person' type='hidden' class='validate' value='$b[id_person]'>
													<input id='id_pasien' name='id_pasien' type='text' class='validate' value='$b[id_pasien]'>
													<label for='ID Pasien'>ID Pasien</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='nama' name='nama' type='text' class='validate' value='$b[nama]'>
													<label for='Nama'>Nama</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='alamat' name='alamat' type='text' class='validate' value='$b[alamat]'>
													<label for='Alamat'>Alamat</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tempat-lhr' name='tempat_lhr' type='text' class='validate' value='$b[tempat_lhr]'>
													<label for='Tempat Lahir'>Tempat Lahir</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl-lhr' name='tgl_lhr' type='text' class='datepicker' value='$b[tgl_lhr]'>
													<label for='Tanggal Lahir'>Tanggal Lahir</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='kontak' name='kontak' type='text' class='validate' value='$b[kontak]'>
													<label for='No Kontak'>No Kontak</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_dokter":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_dokter'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>description</i>
														<input id='id' name='id_dokter' type='text' class='validate'>
														<label for='ID'>ID Dokter</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_person' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Person (KTP/KTM/Kartu Pelajar)</option>";
															$a = mysql_query("SELECT * FROM data_diri WHERE id_person NOT IN(SELECT id_person FROM dokter)");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_person]'>$b[id_person]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dept' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Departemen</option>";
															$a = mysql_query("SELECT * FROM dept");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_dept]'>$b[id_dept]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='tgl-kerja' name='tgl_kerja' type='text' class='datepicker'>
															<label for='Tgl Kerja'>Tanggal Kerja</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>query_builder</i>
															<input id='yoe' name='yoe' type='text' class='validate'>
															<label for='YOE'>Years Of Experience</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_dokter":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Dokter</th>
									<th data-field='ID Person'>ID Person</th>
									<th data-field='ID Dept'>ID Departemen</th>
									<th data-field='Nama'>Nama</th>
									<th data-field='Tanggal Kerja'>Tanggal Kerja</th>
									<th data-field='YOE'>Years Of Exp</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM dokter INNER JOIN data_diri ON dokter.id_person = data_diri.id_person");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_dokter]</td>
								<td>$b[id_person]</td>
								<td>$b[id_dept]</td>
								<td>$b[nama]</td>
								<td>$b[tgl_kerja]</td>
								<td>$b[years_of_exp]</td>
								<td><a class='modal-trigger' href='#$b[id_dokter]'>Edit </a><a href='proses.php?page=delete_dokter&id=$b[id_person]'> Delete</a>
								<div id='$b[id_dokter]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_dokter'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_person' type='hidden' class='validate' value='$b[id_person]'>
													<input id='id_dokter' name='id_dokter' type='text' class='validate' value='$b[id_dokter]'>
													<label for='ID Dokter'>ID Dokter</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='nama' name='nama' type='text' class='validate' value='$b[nama]'>
													<label for='Nama Dokter'>Nama Dokter</label>
												</div>
											</div>
											<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dept' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Departemen</option>";
															$sql = mysql_query("SELECT * FROM dept");
															while($row=mysql_fetch_array($sql)){
																echo"<option value='$row[id_dept]'>$row[id_dept]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl-kerja' name='tgl_kerja' type='text' class='datepicker' value='$b[tgl_kerja]'>
													<label for='Tanggal Kerja'>Tanggal Kerja</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='yoe' name='yoe' type='text' class='validate' value='$b[years_of_exp]'>
													<label for='yoe'>Years Of Experience</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_perawat":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_perawat'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>description</i>
														<input id='id' name='id_perawat' type='text' class='validate'>
														<label for='ID'>ID Perawat</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_person' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Person (KTP/KTM/Kartu Pelajar)</option>";
															$a = mysql_query("SELECT * FROM data_diri WHERE id_person NOT IN(SELECT id_person FROM perawat)");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_person]'>$b[id_person]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dept' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Departemen</option>";
															$c = mysql_query("SELECT * FROM dept");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_dept]'>$d[id_dept]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='tgl-kerja' name='tgl_kerja' type='text' class='datepicker'>
															<label for='Tgl Kerja'>Tanggal Kerja</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>query_builder</i>
															<input id='yoe' name='yoe' type='text' class='validate'>
															<label for='YOE'>Years Of Experience</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_perawat":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Perawat</th>
									<th data-field='ID Person'>ID Person</th>
									<th data-field='ID Dept'>ID Departemen</th>
									<th data-field='Nama'>Nama</th>
									<th data-field='Tanggal Kerja'>Tanggal Kerja</th>
									<th data-field='YOE'>Years Of Exp</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM perawat INNER JOIN data_diri ON perawat.id_person = data_diri.id_person");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_perawat]</td>
								<td>$b[id_person]</td>
								<td>$b[id_dept]</td>
								<td>$b[nama]</td>
								<td>$b[tgl_kerja]</td>
								<td>$b[years_of_exp]</td>
								<td><a class='modal-trigger' href='#$b[id_perawat]'>Edit </a><a href='proses.php?page=delete_perawat&id=$b[id_person]'> Delete</a>
								<div id='$b[id_perawat]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_perawat'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_person' type='hidden' class='validate' value='$b[id_person]'>
													<input id='id_perawat' name='id_perawat' type='text' class='validate' value='$b[id_perawat]'>
													<label for='ID Perawat'>ID Perawat</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='nama' name='nama' type='text' class='validate' value='$b[nama]'>
													<label for='Nama Perawat'>Nama Perawat</label>
												</div>
											</div>
											<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dept' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Departemen</option>";
															$sql = mysql_query("SELECT * FROM dept");
															while($row=mysql_fetch_array($sql)){
																echo"<option value='$row[id_dept]'>$row[id_dept]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl-kerja' name='tgl_kerja' type='text' class='datepicker' value='$b[tgl_kerja]'>
													<label for='Tanggal Kerja'>Tanggal Kerja</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='yoe' name='yoe' type='text' class='validate' value='$b[years_of_exp]'>
													<label for='yoe'>Years Of Experience</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_perawatan":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_perawatan'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>info_outline</i>
														<input id='id' name='id_perawatan' type='text' class='validate'>
														<label for='ID'>ID Perawatan</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_pasien' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Pasien</option>";
															$a = mysql_query("SELECT * FROM pasien");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_pasien]'>$b[id_pasien]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dokter' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Dokter</option>";
															$c = mysql_query("SELECT * FROM dokter");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_dokter]'>$d[id_dokter]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>description</i>
															<input id='id_resep' name='id_resep' type='text' class='validate'>
															<label for='ID Resep'>ID Resep</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>comment</i>
															<input id='keterangan' name='keterangan' type='text' class='validate'>
															<label for='Keterangan'>Keterangan</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='tgl' name='tgl' type='text' class='datepicker'>
															<label for='Tgl'>Tanggal</label>
														</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>receipt</i>
															<input id='biaya' name='biaya' type='text' class='validate'>
															<label for='Biaya'>Biaya</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_perawatan":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Perawatan</th>
									<th data-field='ID Pasien'>ID Pasien</th>
									<th data-field='ID Dokter'>ID Dokter</th>
									<th data-field='ID Resep'>ID Resep</th>
									<th data-field='Keterangan'>Keterangan</th>
									<th data-field='Tanggal'>Tanggal</th>
									<th data-field='Biaya'>Biaya</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM perawatan");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_perawatan]</td>
								<td>$b[id_pasien]</td>
								<td>$b[id_dokter]</td>
								<td>$b[id_resep]</td>
								<td>$b[keterangan]</td>
								<td>$b[tgl]</td>
								<td>$b[biaya]</td>
								<td><a class='modal-trigger' href='#$b[id_perawatan]'>Edit </a><a href='proses.php?page=delete_perawatan&id=$b[id_perawatan]'> Delete</a>
								<div id='$b[id_perawatan]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_perawatan'>
											<div class='row'>
													<div class='input-field col s12'>
														<input id='id' name='id_perawatan' type='hidden' class='validate' value='$b[id_perawatan]'>
														<select name='id_pasien' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Pasien</option>";
															$sql = mysql_query("SELECT * FROM pasien");
															while($row=mysql_fetch_array($sql)){
																echo"<option value='$row[id_pasien]'>$row[id_pasien]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dokter' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Dokter</option>";
															$c = mysql_query("SELECT * FROM dokter");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_dokter]'>$d[id_dokter]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
													<div class='input-field col s12'>
														<select name='id_resep' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Resep</option>";
															$e = mysql_query("SELECT * FROM resep");
															while($f=mysql_fetch_array($e)){
																echo"<option value='$f[id_resep]'>$f[id_resep]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl' name='tgl' type='text' class='datepicker' value='$b[tgl]'>
													<label for='Tanggal'>Tanggal</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='keterangan' name='keterangan' type='text' class='validate' value='$b[keterangan]'>
													<label for='Keterangan'>Keterangan</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='biaya' name='biaya' type='text' class='validate' value='$b[biaya]'>
													<label for='biaya'>Biaya</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_resep":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_resep'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>description</i>
														<input id='id' name='id_resep' type='text' class='validate'>
														<label for='ID'>ID Resep</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_obat' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Obat</option>";
															$a = mysql_query("SELECT * FROM obat");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_obat]'>$b[id_obat]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_perawatan' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Perawatan</option>";
															$c = mysql_query("SELECT * FROM perawatan");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_perawatan]'>$d[id_perawatan]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='tgl' name='tgl' type='text' class='datepicker'>
															<label for='Tgl'>Tanggal</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_resep":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Resep</th>
									<th data-field='ID Obat'>ID Obat</th>
									<th data-field='ID Perawatan'>ID Perawatan</th>
									<th data-field='Tanggal'>Tanggal</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM resep");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_resep]</td>
								<td>$b[id_obat]</td>
								<td>$b[id_perawatan]</td>
								<td>$b[tgl]</td>
								<td><a class='modal-trigger' href='#$b[id_resep]'>Edit </a><a href='proses.php?page=delete_resep&id=$b[id_resep]'> Delete</a>
								<div id='$b[id_resep]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_resep'>
											<div class='row'>
													<div class='input-field col s12'>
														<input id='id' name='id_resep' type='hidden' class='validate' value='$b[id_resep]'>
														<select name='id_obat' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Obat</option>";
															$sql = mysql_query("SELECT * FROM obat");
															while($row=mysql_fetch_array($sql)){
																echo"<option value='$row[id_obat]'>$row[id_obat]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
													<div class='input-field col s12'>
														<select name='id_perawatan' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Perawatan</option>";
															$c = mysql_query("SELECT * FROM perawatan");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_perawatan]'>$d[id_perawatan]</option>";
															}
															echo"
														</select>
													</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl' name='tgl' type='text' class='datepicker' value='$b[tgl]'>
													<label for='Tanggal'>Tanggal</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_obat":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_obat'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>info_outline</i>
														<input id='id' name='id_obat' type='text' class='validate'>
														<label for='ID'>ID Obat</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>label_outline</i>
														<input id='satuan' name='satuan' type='text' class='validate'>
														<label for='Satuan'>Satuan</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>description</i>
														<input id='keterangan' name='keterangan' type='text' class='validate'>
														<label for='Keterangan'>Keterangan</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>receipt</i>
														<input id='harga' name='harga' type='text' class='validate'>
														<label for='Harga'>Harga</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_obat":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Obat</th>
									<th data-field='Satuan'>Satuan</th>
									<th data-field='Keterangan'>Keterangan</th>
									<th data-field='Harga'>Harga</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM obat");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_obat]</td>
								<td>$b[satuan]</td>
								<td>$b[keterangan]</td>
								<td>$b[harga]</td>
								<td><a class='modal-trigger' href='#$b[id_obat]'>Edit </a><a href='proses.php?page=delete_obat&id=$b[id_obat]'> Delete</a>
								<div id='$b[id_obat]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_obat'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_obat' type='hidden' class='validate' value='$b[id_obat]'>
													<input id='satuan' name='satuan' type='text' class='validate' value='$b[satuan]'>
													<label for='Satuan'>Satuan</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='keterangan' name='keterangan' type='text' class='validate' value='$b[keterangan]'>
													<label for='Keterangan'>Keterangan</label>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='harga' name='harga' type='text' class='validate' value='$b[harga]'>
													<label for='Harga'>Harga</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_appointment":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_appointment'>
												<div class='row'>
													<div class='input-field col s12'>
														<i class='material-icons prefix'>info_outline</i>
														<input id='id' name='id_appointment' type='text' class='validate'>
														<label for='ID'>ID Appointment</label>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_pasien' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Pasien</option>";
															$a = mysql_query("SELECT * FROM pasien");
															while($b=mysql_fetch_array($a)){
																echo"<option value='$b[id_pasien]'>$b[id_pasien]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dokter' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Dokter</option>";
															$c = mysql_query("SELECT * FROM dokter");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_dokter]'>$d[id_dokter]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='tgl' name='tgl' type='text' class='datepicker'>
															<label for='Tgl'>Tanggal</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_appointment":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Appointment</th>
									<th data-field='ID Pasien'>ID Pasien</th>
									<th data-field='ID Dokter'>ID Dokter</th>
									<th data-field='Tanggal'>Tanggal</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM appointment");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_appointment]</td>
								<td>$b[id_pasien]</td>
								<td>$b[id_dokter]</td>
								<td>$b[tgl]</td>
								<td><a class='modal-trigger' href='#$b[id_appointment]'>Edit </a><a href='proses.php?page=delete_appointment&id=$b[id_appointment]'> Delete</a>
								<div id='$b[id_appointment]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_appointment'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_appointment' type='hidden' class='validate' value='$b[id_appointment]'>
													<select name='id_pasien' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Pasien</option>";
															$sql = mysql_query("SELECT * FROM pasien");
															while($row=mysql_fetch_array($sql)){
																echo"<option value='$row[id_pasien]'>$row[id_pasien]</option>";
															}
															echo"
														</select>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<select name='id_dokter' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Dokter</option>";
															$c = mysql_query("SELECT * FROM dokter");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_dokter]'>$d[id_dokter]</option>";
															}
															echo"
														</select>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='tgl' name='tgl' type='text' class='datepicker' value='$b[tgl]'>
													<label for='Tanggal'>Tanggal</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
			
			case "input_departemen":
				echo"
					<div class='container'>
						<!--  Outer row  -->
						<div class='row'>
							<div class='col s12 m9 l10'>
							<!--  Material Design -->
								<div id='materialdesign' class='section scrollspy'>
									<div class='row section'>				
										<div class='row' style='margin:1%;'>
											<form class='col s12' method='post' action='proses.php?page=input_departemen'>
												<div class='row'>
													<div class='input-field col s12'>
															<i class='material-icons prefix'>info_outline</i>
															<input id='id_dept' name='id_dept' type='text' class='validate'>
															<label for='ID Dept'>ID Departemen</label>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>supervisor_account</i>
															<input id='id_kadept' name='id_kadept' type='text' class='validate'>
															<label for='ID Kadept'>ID Kadept</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<select name='id_dokter' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Dokter</option>";
															$c = mysql_query("SELECT * FROM dokter");
															while($d=mysql_fetch_array($c)){
																echo"<option value='$d[id_dokter]'>$d[id_dokter]</option>";
															}
															echo"
														</select>
													</div>
												</div>
												<div class='row'>
														<div class='input-field col s12'>
															<i class='material-icons prefix'>today</i>
															<input id='nama_dept' name='nama_dept' type='text' class='validate'>
															<label for='Nama Dept'>Nama Departemen</label>
														</div>
												</div>
												<div class='row'>
													<div class='input-field col s12'>
														<button class='btn waves-effect waves-light' type='submit' name='action'>Submit
														<i class='mdi-content-send right'></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->";
			break;
			
			case "view_departemen":
			echo"
			<div class='container'>
				<!--  Outer row  -->
				<div class='row'>
					<div class='col s12 m9 l10'>
						<!--  Material Design -->
						<table class='striped centered responsive-table tabel_klinik'>
							<thead>
								<tr>
									<th data-field='ID'>ID Departemen</th>
									<th data-field='Nama Dept'>Nama Dept</th>
									<th data-field='ID Kadept'>ID Ketua Dept</th>
									<th data-field='ID Dokter'>ID Dokter</th>
									<th data-field='Nama Dokter'>Nama Dokter</th>
									<th data-field='Aksi'>Aksi</th>
								</tr>
							</thead>
						<tbody>";
						$a = mysql_query("SELECT * FROM dept, kadept, dokter, data_diri WHERE dept.id_dept = dokter.id_dept AND kadept.id_dokter = dokter.id_dokter AND dokter.id_person = data_diri.id_person GROUP BY dept.id_dept");
						while($b=mysql_fetch_array($a)){
						echo"
							<tr>
								<td>$b[id_dept]</td>
								<td>$b[nama_dept]</td>
								<td>$b[id_kadept]</td>
								<td>$b[id_dokter]</td>
								<td>$b[nama]</td>
								<td><a class='modal-trigger' href='#$b[id_dept]'>Edit </a><a href='proses.php?page=delete_departemen&id=$b[id_dept]'> Delete</a>
								<div id='$b[id_dept]' class='modal'>
									<div class='modal-content'>
										<form class='col s12' method='post' action='proses.php?page=edit_departemen'>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='id' name='id_dept' type='hidden' class='validate' value='$b[id_dept]'>
													<select name='id_kadept' class='browser-default waves-effect waves-light btn'>
															<option value='' disabled selected>ID Kepala Dept</option>";
															$sql = mysql_query("SELECT * FROM kadept");
															while($row=mysql_fetch_array($sql)){
																echo"<option value='$row[id_kadept]'>$row[id_kadept]</option>";
															}
															echo"
														</select>
												</div>
											</div>
											<div class='row'>
												<div class='input-field col s12'>
													<input id='nama_dept' name='nama_dept' type='text' class='validate' value='$b[nama_dept]'>
													<label for='Nama Dept'>Nama Dept</label>
													<button class='waves-effect waves-light btn' type='submit'>Submit</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								</td>
							</tr>
							";
						}
						echo"
						</tbody>
					</table>	
				</div>
			</div>
			<!-- End Container -->";
			break;
	}
	?>
	</main>
	<script type="text/javascript">
		$('.datepicker').pickadate({
			min: new Date(1976,11),
			max: new Date(2017,6,2),
			selectMonths: true,
			selectYears: 80,
			format: 'yyyy-dd-mm',
			onSet: function( arg ){
				if ( 'select' in arg ){ //prevent closing on selecting month/year
				this.close();
				}
			}
		});
		
		$("#dob").click(function (event) {
			event.stopPropagation();
			$(".datepicker").first().pickadate("picker").open();
		});
		$(".button-collapse").sideNav();
		
		(function ($) {
			$(function () {
				//initialize all modals           
				$('.modal').modal();
				
				//by click on trigger
				$('.modal-trigger').modal();
				
				$('select').material_select();
				
			}); // end of document ready
		})(jQuery); // end of jQuery name space
		
		$('.tabel_klinik').dataTable( {
			"pageLength": 10,
			"dom": 'ftipr',
			"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
		});
	</script>
	</body>
</html>
