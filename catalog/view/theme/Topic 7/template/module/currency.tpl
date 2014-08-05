<?php if (count($currencies) > 1) { ?>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
  <div class="btn-group" id="currency">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <?php echo $text_currency; ?>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
    <?php foreach ($currencies as $currency) { ?>
    <?php if ($currency['code'] == $currency_code) { ?>
    <?php if ($currency['symbol_left']) { ?>
    <li><a title="<?php echo $currency['title']; ?>"><b><?php echo $currency['symbol_left']; ?></b></a></li>
    <?php } else { ?>
    <li><a title="<?php echo $currency['title']; ?>"><b><?php echo $currency['symbol_right']; ?></b></a></li>
    <?php } ?>
    <?php } else { ?>
    <?php if ($currency['symbol_left']) { ?>
    <li><a title="<?php echo $currency['title']; ?>" onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $(this).parent().parent().submit();"><?php echo $currency['symbol_left']; ?></a></li>
    <?php } else { ?>
    <li><a title="<?php echo $currency['title']; ?>" onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $(this).parent().parent().submit();"><?php echo $currency['symbol_right']; ?></a></li>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    </ul>
    <input type="hidden" name="currency_code" value="" />
    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />

  </div>
</form>
<?php } ?>
