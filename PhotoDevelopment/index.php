<?php
require_once 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/funtzioak.js"></script>  
	<script type="text/javascript" src="js/proba.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body >             
	<?php
		if(isset($_GET['result'])){
			$result=$_GET['result'];
			if($result=='ok'){
				echo '<div class="alert alert-success">
					<strong>'. $lang['FORM_VALUE'] .'</strong>
					</div>';
			}else{
				echo '<div class="alert alert-danger">
					<strong>'. $lang['FORM_BAD_VALUE'] .'</strong>
				</div>';
			}
		}
	?>
    <!-- Page Content -->
    <div class="container" >
		<div class="form-group">
			<form method="post" action="gordeFormularioa.php" onsubmit="return konprobatu()">
				<h4><?php echo $lang['FORM_MODAL_LABEL_USER_NAME'];?><font color="red">*</font></h4>
				<input name="userName" id="userName"/>
				<h4><?php echo $lang['FORM_MODAL_LABEL_USER_LAST_NAME'];?><font color="red">*</font></h4>
				<input name="lastName" id="lastName"/>
				<h4><?php echo $lang['FORM_MODAL_LABEL_COUNTRY'];?><font color="red">*</font></h4>
					<select name="country" id="country" onchange="countryChange()">
						<option disabled="disabled" value="<?php echo $lang['FORM_MODAL_LABEL_COUNTRY_DEFAULT'];?>">
							<?php echo $lang['FORM_MODAL_LABEL_COUNTRY_DEFAULT'];?>
						</option>
							<?php
								foreach($countries as $key => $value):
								echo '<option value="'.$key.'">'.$value.'</option>';
								endforeach;
							?>
					</select>
				<p><?php echo $lang['FORM_MODAL_LABEL_COUNTRY_MESSAGE'];?></p>
				<div id="regionDiv" style="display: none;">
					<h4><?php echo $lang['FORM_MODAL_LABEL_REGION'];?><font color="red">*</font></h4>
					<select name="region">
						<option disabled="disabled" value="<?php echo $lang['FORM_MODAL_LABEL_REGION_DEFAULT'];?>">
							<?php echo $lang['FORM_MODAL_LABEL_REGION_DEFAULT'];?>
						</option>
							<?php

								foreach($regions as $key => $value):
								echo '<option value="'.$key.'">'.$value.'</option>';
								endforeach;
							?>  
					</select>
				</div>
				<h4><?php echo $lang['FORM_MODAL_LABEL_AGE'];?><font color="red">*</font></h4>
				<select name="birthday" id="birthday" onchange="userAgeChange()">
				<?php for ($i = 1;$i<99 ; $i++) {
						echo '<option value="'.$i.'">'.$i.'</option>';
					}
				?>
				</select>
				<p><?php echo $lang['FORM_MODAL_LABEL_BIRTHDAY_MESSAGE'];?></p>
				<div id="userEmailDiv" style="display: none;">
					<h4><?php echo $lang['FORM_MODAL_LABEL_USER_EMAIL'];?></h4>
					<input type="email" name="email" id="email" onchange="emailChange()"/>
					<p><?php echo $lang['FORM_MODAL_LABEL_EMAIL_MESSAGE'];?></p>
				</div>
				<div id="interesedThemes" style="display: none;">
				<h4><?php echo $lang['FORM_MODAL_LABEL_THEMES'];?></h4>
					<input type="checkbox" name="Privacy"/><?php echo $lang['FORM_MODAL_LABEL_THEMES_PRIVACY'];?></input></br>
					<input type="checkbox" name="SecurePassword"/><?php echo $lang['FORM_MODAL_LABEL_THEMES_SECURE_PASSWOD'];?></input></br>
					<input type="checkbox" name="SocialNetwork"/><?php echo $lang['FORM_MODAL_LABEL_THEMES_SOCIAL_NETWORK'];?></input></br>
					<input type="checkbox" name="SecureConnection"/><?php echo $lang['FORM_MODAL_LABEL_THEMES_SECURE_CONNECTION'];?></input></br>
				</div>
				</br>
				<input type="checkbox" id="politics" name="politics"><?php echo $lang['FORM_MODAL_TERMS_OF_USE'];?><font color="red">*</font></input>
				</br>
				<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog" >

							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-body">
									<?php echo $lang['FORM_MODAL_TERMS_OF_USE_TEXT'];?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['FORM_MODAL_CLOSE'];?>
										</button>
									</div>
								</div>

							</div>
						</div>
				</br>
				</br>
				<button type="submit" class="btn btn-success "><?php echo $lang['FORM_MODAL_FORM_SUBMIT'];?></button>
			</form>
		</div>
	</div>

</body>

</html>
