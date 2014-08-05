<?php echo $header; ?>
<?php if ($success) { ?>
<div class="success"><?php echo $success; ?></div>
<?php } ?>
<?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php echo $content_top; ?>
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <h1 class="page-heading"><strong><?php echo $heading_title; ?></strong></h1>
  <?php if ($error_warning) { ?>
  <div class="warning"><?php echo $error_warning; ?></div>
  <?php } ?>
  <div class="login-content">
    <div class="left">
     <h2 ><?php echo strtoupper($text_new_customer) ; ?></h2>
      <div class="content">
        
        <p><b><?php echo $text_register; ?></b></p>
        <p><?php echo $text_register_account; ?></p>
        <a href="<?php echo $register; ?>" class="button"><?php echo strtoupper($button_continue) ; ?></a></div>
    </div>
    <div class="right">
      <h2 style="font-size: 14px"><?php echo strtoupper($text_returning_customer); ?></h2>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
      
        <div class="content">

          <p><?php echo $text_i_am_returning_customer; ?></p>
          <span><?php echo $entry_email; ?></span><br />
          <input type="text" name="email" value="<?php echo $email; ?>" />
          <br />
          <br />
          <span><?php echo $entry_password; ?></span><br />
          <input type="password" name="password" value="<?php echo $password; ?>" />
          <br />
          <a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a><br />
          <br />
          <input type="submit" value="<?php echo strtoupper($button_login) ; ?>" class="button" />
          <?php if ($redirect) { ?>
          <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
          <?php } ?>
        </div>
      </form>
    </div>
  </div>
  <?php echo $content_bottom; ?></div>
<script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
//--></script> 
<?php echo $footer; ?>