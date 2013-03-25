<?=render('includes.header'); ?>
<?=render('includes.navbar_admin'); ?>
<div class="container">
<div class="content" id="content" style="display:none">
  <div class="page-header">
    <h2>All Users</h2>
  </div>
  <div class="row">
  <div class="span11">
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Number</th>
      <th>Firstname</th>
      <th>Lastname</th>
    </tr>
  </thead>
  <? foreach ($users->results as $user): ?>
  <tr>
    <td><?=$user->number; ?></td>
    <td><?=$user->firstname; ?></td>
    <td><?=$user->lastname; ?></td>
  </tr>
  <? endforeach; ?>
  </table>
  </div>
  </div>
  <div class="row">
  <div class="span5 offset3">
    <?=$users->links(); ?>
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
