<div id="form_container">
		<div class="title">TAMBAH PENGGUNA</div>
		
		<?php 
			$attributes = array('class' => 'appnitro', 'name' => 'form_tambah_pengguna');
			echo form_open('manajemen_pengguna/add_process',$attributes); ?>
			<ul>
			  	<li>
					<?= anchor(site_url('manajemen_pengguna'),img(array('src'=>'images/flexigrid/prev.gif','border'=>'0','alt'=>'')).'Kembali Ke Manajemen Pengguna',''); ?>
				</li>
				
				<li id="li_1" >
					<label class="description" for="element_1">Username</label>
					<div>
						<input id="username" name="username" class="element text small" type="text" value="<?php echo set_value('username');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>Username</small></p> 
					<?php echo form_error('username'); ?>
				</li>
				
				<li id="li_14" >
					<label class="description" for="element_14">Password</label>
					<div>
						<input id="password" name="password" class="element text medium" type="password" maxlength="100" /> 					
					</div>
					<p class="guidelines" id="guide_14"><small>Password</small></p> 
					<?php echo form_error('password'); ?>
				</li>
				<li id="li_14" >
					<label class="description" for="element_14">Ulangi Password</label>
					<div>
						<input id="ulangi_password" name="ulangi_password" class="element text medium" type="password" maxlength="100" /> 					
					</div>
					<p class="guidelines" id="guide_14"><small>Ulangi Password</small></p> 
					<?php echo form_error('ulangi_password'); ?>
				</li>
				<li id="li_14" >
					<label class="description" for="element_14">Nama Lengkap</label>
					<div>
						<input id="nama" name="nama" class="element text medium" type="text" maxlength="100" value="<?php echo set_value('nama');?>"/> 					
					</div>
					<p class="guidelines" id="guide_14"><small>Nama Lengkap</small> 
					<?php echo form_error('nama'); ?></p>
				</li>
				<li id="li_14" >
					<label class="description" for="element_14">Grup Pengguna</label>
					<div>
						<?php 
								$options = array(
												'0' => '-- Pilih Grup --',
												'1' => 'Administrator',
												'2' => 'Asisten I',
												'3' => 'Asisten II',
												'4' => 'Asisten III',
												'5' => 'Sekretaris',
												'6' => 'Wakil Bupati',
												'7' => 'Bupati',
												'8' => 'Dinas'
											);
								echo form_dropdown('grup',$options, set_value('grup'), 'id="grup" class="element select medium" onChange="ubahGrup();"');
						?>					
					</div>
					<p class="guidelines" id="guide_14"><small>Grup Pengguna</small></p> 
					<?php echo form_error('grup'); ?>
				</li>
				<div id="hideme">
					<li id="li_14" >
						<label class="description" for="element_14">Dinas</label>
						<div>
							<?php 
								echo form_dropdown('dinas',$dinas, set_value('dinas'), 'id="dinas" class="element select medium"');
							?>					
						</div>
						<p class="guidelines" id="guide_14"><small>Dinas</small></p> 
						<?php echo form_error('dinas'); ?>
					</li>
				</div>
				<li id="li_21" >
					<label class="description" for="element_21">Jabatan</label>
					<div>
					<div>
						<?php 
							echo form_dropdown('jabatan',$jabatan,set_value('jabatan'), 'id="jabatan" class="element select medium"');
						?>
					</div>
					<p class="guidelines" id="guide_21"><small>Jabatan</small></p>
					<?php echo form_error('jabatan'); ?>
				</li>
				<li id="li_14" >
					<label class="description" for="element_14">Email</label>
					<div>
						<input id="Email" name="email" class="element text medium" type="text" maxlength="100" value="<?php echo set_value('email');?>"/> 					
					</div>
					<p class="guidelines" id="guide_14"><small>Email</small></p> 
					<?php echo form_error('email'); ?>
				</li>
				
				<li id="li_14" >
					<label class="description" for="element_14">No HP</label>
					<div>
						<input id="handphone" name="handphone" class="element text medium" type="text" maxlength="100" value="<?php echo set_value('handphone');?>" /> 					
					</div>
					<p class="guidelines" id="guide_14"><small>No HP</small></p> 
					<?php echo form_error('handphone'); ?>
				</li>	
				<li>
					<input id="submit-button" type="submit" name="daftar_warna" value="Tambah" />
					<input id="submit-button" type="button" name="batal" value="Batal" onClick="location.href='<?php echo site_url('manajemen_pengguna')?>'"/>
				</li>
			</ul>
		<?php echo form_close(); ?>
	</div>
	<script type="text/javascript">	
		function ubahGrup()
		{
			var grup = $('#grup').val();
			if(grup == 8)
			{
				$('#hideme').show();
			}
			else
			{
				$('#hideme').hide();
			}
		}
		
		Ext.onReady(function(){
			var jabatan = new Ext.form.ComboBox({
				typeAhead: true,
				triggerAction: 'all',
				transform:'jabatan',
				width: 340,
				forceSelection: false
			});
			
			var dinas = new Ext.form.ComboBox({
				typeAhead: true,
				triggerAction: 'all',
				transform:'dinas',
				width: 340,
				forceSelection: false
			});
		}	
	);
	
	$(document).ready(function(){
		$('#hideme').hide();
	});
	</script>
	
