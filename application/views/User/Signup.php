<div class="container h-100">
	<div class="row h-100 justify-content-center align-items-center">
		<form action="<?=base_url('user/signup')?>" method="post" accept-charset="utf-8" role="form" autocomplete="off">
			<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">

			<h2>Please Sign Up <small>It's free and always will be.</small></h2>

			<hr class="colorgraph">

			<div class="form-group">
				Before we start the signup, we need to verify your email.
			</div>

			<div class="form-group">
				<?=form_input($form_email)?>
			</div>

			<hr class="colorgraph">

			<div class="row">
				<?=form_submit($form_submit)?>
			</div>
		</form>
	</div>
</div>
