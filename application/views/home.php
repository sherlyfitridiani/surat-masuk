<?php
	$master_dinas = false;
	$master_instansi = false;
	$master_jenis_surat = false;
	$master_jabatan = false;
	$manajemen_pengguna = false;
	$surat_masuk = false;
	$catat_surat_masuk = false;
	$surat_masuk_disposisi = false;
	$laporan = false;
	$redaksional_sms = false;

	$this->load->library('session');
	$kode_role = $this->session->userdata('kode_role');
	if($kode_role == 1)
	{	
		$master_dinas = true;
		$master_instansi = true;
		$master_jenis_surat = true;
		$master_jabatan = true;
		$manajemen_pengguna = true;
		$surat_masuk = true;
		$catat_surat_masuk = true;
		$laporan = true;
		$redaksional_sms = true;
	}
	else
	{
		$master_dinas = false;
		$master_instansi = false;
		$master_jenis_surat = false;
		$master_jabatan = false;
		$manajemen_pengguna = false;
		$surat_masuk = true;
		$catat_surat_masuk = false;
		if($kode_role == 7 ) 
			$surat_masuk_disposisi = false;
		else
			$surat_masuk_disposisi = true;
	}


?>

<div class="border_content">
	<div class="title" align="center">Selamat Datang, <?php echo $this->session->userdata('username');?></div>
	<div class="inner_content">
		<fieldset>
		<legend><label><b>| Informasi umum aplikasi |</b></label></legend>
			<table width="100%" cellpadding="10">
			<tr>
				<td>
					Aplikasi ini adalah aplikasi yang dikembangkan untuk membantu mempermudah pengelolaan surat masuk di lingkup pemerintahan. Dengan aplikasi ini, serangkaian proses surat masuk dapat dilakukan dengan cepat karena salah satunya juga didukung oleh teknologi SMS Gateway. SMS Gateway digunakan sebagai pemberi informasi peringatan kepada setiap pejabat yang terkait bahwa terdapat surat masuk yang ditujukan kepada pejabat terkait
				</td>
			</tr>
		</table>
		</fieldset>
		<fieldset>
		<legend><label><b>| Menu yang bisa diakses |</b></label></legend>
			<table width="100%" cellpadding="20">
			<tr>
				<td></td>
				<?php if($catat_surat_masuk){?><td width="auto"><div align="center"><?php echo anchor(site_url('surat_masuk/add'),img(array('src'=>'images/icon/catat_surat_masuk.png','border'=>'0','alt'=>'')).'<b>Catat Surat Masuk</b>',''); ?></td><?php } ?>
				<?php if($surat_masuk){?><td width="auto"><div align="center"><?php echo anchor(site_url('surat_masuk'),img(array('src'=>'images/icon/inbox.png','border'=>'0','alt'=>'')).'<b>Daftar Surat Masuk</b>',''); ?></td><?php } ?>
				<?php if($surat_masuk_disposisi){?><td width="auto"><div align="center"><?php echo anchor(site_url('surat_masuk/grid_surat_disposisi'),img(array('src'=>'images/icon/email_icon.png','border'=>'0','alt'=>'')).'<b>Daftar Surat Masuk Disposisi</b>',''); ?></td><?php } ?>
				<?php if($laporan){?><td width="auto"><div align="center"><?php echo anchor(site_url('chart_data'),img(array('src'=>'images/icon/report-3.png','border'=>'0','alt'=>'')).'<b>Laporan Grafik</b>',''); ?></td><?php } ?>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<?php if($master_dinas){?><td width="25%"><div align="center"><?php echo anchor(site_url('dinas'),img(array('src'=>'images/icon/master_dinas.png','border'=>'0','alt'=>'')).'<b>Master Dinas</b>',''); ?></td><?php } ?>
				<?php if($master_instansi){?><td width="25%"><div align="center"><?php echo anchor(site_url('instansi'),img(array('src'=>'images/icon/master_instansi.png','border'=>'0','alt'=>'')).'<b>Master Instansi</b>',''); ?></td><?php } ?>
				<?php if($master_jenis_surat){?><td width="25%"><div align="center"><?php echo anchor(site_url('jenis_surat'),img(array('src'=>'images/icon/master_jenis_surat.png','border'=>'0','alt'=>'')).'<b>Master Jenis Surat</b>',''); ?></td><?php } ?>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<?php if($master_jabatan){?><td width="25%"><div align="center"><?php echo anchor(site_url('jabatan'),img(array('src'=>'images/icon/master_jabatan.png','border'=>'0','alt'=>'')).'<b>Master Jabatan</b>',''); ?></td><?php } ?>
				<?php if($manajemen_pengguna){?><td width="25%"><div align="center"><?php echo anchor(site_url('manajemen_pengguna'),img(array('src'=>'images/icon/manajemen_pengguna.png','border'=>'0','alt'=>'')).'<b>Manajemen Pengguna</b>',''); ?></td><?php } ?>
				<?php if($redaksional_sms){?><td width="25%"><div align="center"><?php echo anchor(site_url('sms'),img(array('src'=>'images/icon/send_sms.png','border'=>'0','alt'=>'')).'<b>Redaksional SMS</b>',''); ?></td><?php } ?>
				<td></td>
			</tr>
			</table>
		</fieldset>
	</div>
</div>
