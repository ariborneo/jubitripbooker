<?=render('includes.header'); ?>
<?=render('includes.navbar'); ?>
<div class="container">
<div class="content" id="content" style="display:none">
	<div class="page-header">
		<h2>Your JTB-Account Informations</h2>
	</div>
	<div class="row">
	<div class="span9 offset1">
		<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="firstname">Firstname</label>
			<div class="controls">
			<input type="text" id="firstname" value="<?=$user->firstname; ?>" disabled>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="lastname">Lastname</label>
			<div class="controls">
			<input type="text" id="lastname" value="<?=$user->lastname; ?>" disabled>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="number">Number</label>
			<div class="controls">
			<input type="text" id="number" value="<?=$user->number; ?>" disabled>
			</div>
		</div>
		</form>
	</div>
	</div>
</div>
<?=render('includes.footer'); ?>
</div>
<?=HTML::script('js/jquery.js'); ?>
<script>
$(document).ready(function() {

	$('#content').fadeIn(1000);
	
});
</script>
</body>
</html>
