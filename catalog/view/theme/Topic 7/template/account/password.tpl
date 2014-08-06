<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php echo $content_top; ?>
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <h1 class="page-heading"><strong><?php echo $heading_title; ?></strong></h1>
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    
    <div class="content">
    <h2><?php echo strtoupper($text_password); ?></h2>
      <table class="form">
        <tr>
          <td> <?php echo $entry_password; ?><span class="required">*</span></td>
          <td><input type="password" name="password" value="<?php echo $password; ?>" />
            <?php if ($error_password) { ?>
            <span class="error"><?php echo $error_password; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
          <td> <?php echo $entry_confirm; ?><span class="required">*</span></td>
          <td><input type="password" name="confirm" value="<?php echo $confirm; ?>" />
            <?php if ($error_confirm) { ?>
            <span class="error"><?php echo $error_confirm; ?></span>
            <?php } ?></td>
        </tr>
      </table>
    </div>
    <div class="buttons">
      <div class="left"><a href="<?php echo $back; ?>" class="button"><?php echo strtoupper($button_back); ?></a></div>
      <div class="right"><input type="submit" value="<?php echo strtoupper($button_continue); ?>" class="button" /></div>
    </div>
  </form>
  <?php echo $content_bottom; ?></div>
<?php echo $footer; ?>