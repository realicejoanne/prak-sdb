<?php
	include("koneksi/koneksi.php");
	include("lib/noinjek.php");

	switch ($_GET['page']) {		
		case "inputdatadiri":
			$id=$_POST['id_person'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$tempat_lhr=$_POST['tempat_lhr'];
			$tgl_lhr=$_POST['tgl_lhr'];
			$kontak=$_POST['kontak'];
			
			mysql_query("INSERT INTO data_diri(id_person, nama, alamat, tempat_lhr, tgl_lhr, kontak) VALUES('$id', '$nama', '$alamat', '$tempat_lhr', '$tgl_lhr', '$kontak')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_datadiri":
			mysql_query("DELETE from data_diri where id_person='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_datadiri":
			$id=noinjek($_POST['id_person']);
			$nama=noinjek($_POST['nama']);
			$alamat=noinjek($_POST['alamat']);
			$tempat_lhr=noinjek($_POST['tempat_lhr']);
			$tgl_lhr=noinjek($_POST['tgl_lhr']);
			$kontak=noinjek($_POST['kontak']);
		
			mysql_query("UPDATE data_diri SET nama='$nama', alamat='$alamat', tempat_lhr='$tempat_lhr', tgl_lhr='$tgl_lhr', kontak='$kontak' WHERE id_person='$id'");
			header('location:view-datadiri');
			break;
			
		case "input_pasien":
			$id_pasien=$_POST['id_pasien'];
			$id_person=$_POST['id_person'];
			$tgl_registrasi=$_POST['tgl_registrasi'];
			
			mysql_query("INSERT INTO pasien(id_pasien, id_person, tgl_registrasi) VALUES('$id_pasien', '$id_person', '$tgl_registrasi')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_pasien":
			mysql_query("DELETE from pasien where id_person='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_pasien":
			$id=$_POST['id_person'];
			$id_pasien=$_POST['id_pasien'];
			$nama=noinjek($_POST['nama']);
			$alamat=noinjek($_POST['alamat']);
			$tempat_lhr=noinjek($_POST['tempat_lhr']);
			$tgl_lhr=noinjek($_POST['tgl_lhr']);
			$kontak=noinjek($_POST['kontak']);
		
			mysql_query("UPDATE pasien SET id_pasien='$id_pasien' WHERE id_person='$id'");
			mysql_query("UPDATE data_diri SET nama='$nama', alamat='$alamat', tempat_lhr='$tempat_lhr', tgl_lhr='$tgl_lhr', kontak='$kontak' WHERE id_person='$id'");
			header('location:view-pasien');
			break;
		
		case "input_dokter":
			$id_dokter=$_POST['id_dokter'];
			$id_person=$_POST['id_person'];
			$id_dept=$_POST['id_dept'];
			$tgl_kerja=$_POST['tgl_kerja'];
			$yoe=$_POST['yoe'];
			
			mysql_query("INSERT INTO dokter(id_dokter, id_person, id_dept, tgl_kerja, years_of_exp) VALUES('$id_dokter', '$id_person', '$id_dept', '$tgl_kerja', '$yoe')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_dokter":
			mysql_query("DELETE from dokter where id_person='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_dokter":
			$id=$_POST['id_person'];
			$id_dokter=$_POST['id_dokter'];
			$id_dept=$_POST['id_dept'];
			$nama=noinjek($_POST['nama']);
			$tgl_kerja=noinjek($_POST['tgl_kerja']);
			$yoe=noinjek($_POST['yoe']);
			
		
			mysql_query("UPDATE dokter SET id_dokter='$id_dokter', id_dept='$id_dept', tgl_kerja='$tgl_kerja', years_of_exp='$yoe' WHERE id_person='$id'");
			mysql_query("UPDATE data_diri SET nama='$nama'WHERE id_person='$id'");
			header('location:view-dokter');
			break;
			
		case "input_perawat":
			$id_perawat=$_POST['id_perawat'];
			$id_person=$_POST['id_person'];
			$id_dept=$_POST['id_dept'];
			$tgl_kerja=$_POST['tgl_kerja'];
			$yoe=$_POST['yoe'];
			
			mysql_query("INSERT INTO perawat(id_perawat, id_person, id_dept, tgl_kerja, years_of_exp) VALUES('$id_perawat', '$id_person', '$id_dept', '$tgl_kerja', '$yoe')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_perawat":
			mysql_query("DELETE from perawat where id_person='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_perawat":
			$id=$_POST['id_person'];
			$id_perawat=$_POST['id_perawat'];
			$id_dept=$_POST['id_dept'];
			$nama=noinjek($_POST['nama']);
			$tgl_kerja=noinjek($_POST['tgl_kerja']);
			$yoe=noinjek($_POST['yoe']);
			
		
			mysql_query("UPDATE perawat SET id_perawat='$id_perawat', id_dept='$id_dept', tgl_kerja='$tgl_kerja', years_of_exp='$yoe' WHERE id_person='$id'");
			mysql_query("UPDATE data_diri SET nama='$nama'WHERE id_person='$id'");
			header('location:view-perawat');
			break;

		case "input_perawatan":
			$id_perawatan=$_POST['id_perawatan'];
			$id_pasien=$_POST['id_pasien'];
			$id_dokter=$_POST['id_dokter'];
			$id_resep=$_POST['id_resep'];
			$keterangan=$_POST['keterangan'];
			$tgl=$_POST['tgl'];
			$biaya=$_POST['biaya'];
			
			
			mysql_query("INSERT INTO perawatan(id_perawatan, id_pasien, id_dokter, id_resep, keterangan, tgl, biaya) VALUES('$id_perawatan', '$id_pasien', '$id_dokter', '$id_resep', '$keterangan', '$tgl', '$biaya')");
			mysql_query("INSERT INTO resep(id_resep, tgl) VALUES('$id_resep', '$tgl')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_perawatan":
			mysql_query("DELETE from perawatan where id_perawatan='$_GET[id]'");
			mysql_query("DELETE from resep where id_perawatan='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_perawatan":
			$id=$_POST['id_perawatan'];
			$id_pasien=noinjek($_POST['id_pasien']);
			$id_dokter=noinjek($_POST['id_dokter']);
			$id_resep=noinjek($_POST['id_resep']);
			$keterangan=noinjek($_POST['keterangan']);
			$tgl=noinjek($_POST['tgl']);
			$biaya=noinjek($_POST['biaya']);
			
			mysql_query("UPDATE perawatan SET id_pasien='$id_pasien', id_dokter='$id_dokter', id_resep='$id_resep', keterangan='$keterangan', tgl='$tgl', biaya='$biaya' WHERE id_perawatan='$id'");
			header('location:view-perawatan');
			break;
			
		case "input_resep":
			$id_resep=$_POST['id_resep'];
			$id_obat=$_POST['id_obat'];
			$id_perawatan=$_POST['id_perawatan'];
			$tgl=$_POST['tgl'];
			
			mysql_query("INSERT INTO resep(id_resep, id_obat, id_perawatan, tgl) VALUES('$id_resep', '$id_obat', '$id_perawatan', '$tgl')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_resep":
			mysql_query("DELETE from resep where id_resep='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_resep":
			$id=$_POST['id_resep'];
			$id_obat=noinjek($_POST['id_obat']);
			$id_perawatan=noinjek($_POST['id_perawatan']);
			$tgl=noinjek($_POST['tgl']);
			
		
			mysql_query("UPDATE resep SET id_obat='$id_obat', id_perawatan='$id_perawatan', tgl='$tgl' WHERE id_resep='$id'");
			header('location:view-resep');
			break;

		case "input_obat":
			$id_obat=$_POST['id_obat'];
			$satuan=$_POST['satuan'];
			$keterangan=$_POST['keterangan'];
			$harga=$_POST['harga'];
			
			mysql_query("INSERT INTO obat(id_obat, satuan, keterangan, harga) VALUES('$id_obat', '$satuan', '$keterangan', '$harga')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_obat":
			mysql_query("DELETE from obat where id_obat='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_obat":
			$id=$_POST['id_obat'];
			$satuan=noinjek($_POST['satuan']);
			$keterangan=noinjek($_POST['keterangan']);
			$harga=noinjek($_POST['harga']);
			
		
			mysql_query("UPDATE obat SET satuan='$satuan', keterangan='$keterangan', harga='$harga' WHERE id_obat='$id'");
			header('location:view-obat');
			break;
			
		case "input_appointment":
			$id_appointment=$_POST['id_appointment'];
			$id_pasien=$_POST['id_pasien'];
			$id_dokter=$_POST['id_dokter'];
			$tgl=$_POST['tgl'];
			
			mysql_query("INSERT INTO appointment(id_appointment, id_pasien, id_dokter, tgl) VALUES('$id_appointment', '$id_pasien', '$id_dokter', '$tgl')");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_appointment":
			mysql_query("DELETE from appointment where id_appointment='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_appointment":
			$id=$_POST['id_appointment'];
			$id_pasien=noinjek($_POST['id_pasien']);
			$id_dokter=noinjek($_POST['id_dokter']);
			$tgl=noinjek($_POST['tgl']);
			
		
			mysql_query("UPDATE appointment SET id_pasien='$id_pasien', id_dokter='$id_dokter', tgl='$tgl' WHERE id_appointment='$id'");
			header('location:view-appointment');
			break;
			
		case "input_departemen":
			$id_dept=$_POST['id_dept'];
			$id_kadept=$_POST['id_kadept'];
			$id_dokter=$_POST['id_dokter'];
			$nama_dept=$_POST['nama_dept'];
			
			mysql_query("INSERT INTO dept(id_dept, id_kadept, nama_dept) VALUES('$id_dept', '$id_kadept', '$nama_dept')");
			mysql_query("INSERT INTO kadept(id_kadept, id_dokter) VALUES('$id_kadept', '$id_dokter')");
			mysql_query("UPDATE dokter SET id_dept='$id_dept' WHERE id_dokter='$id_dokter'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
		
		case "delete_departemen":
			mysql_query("DELETE from dept where id_dept='$_GET[id]'");
			mysql_query("DELETE from dokter where id_dept='$_GET[id]'");
			header('location:'.$_SERVER['HTTP_REFERER'].'');
			break;
			
		case "edit_departemen":
			$id=$_POST['id_dept'];
			$id_kadept=noinjek($_POST['id_kadept']);
			$nama_dept=noinjek($_POST['nama_dept']);
			
			mysql_query("UPDATE dept SET id_kadept='$id_kadept', nama_dept='$nama_dept' WHERE id_dept='$id'");
			header('location:view-dept');
			break;
		
	}
	
	

?>