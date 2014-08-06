<?php echo $header; ?>

<?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php echo $content_top; ?>
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <h1 class="page-heading"><strong><?php echo $heading_title; ?></strong></h1>
  <?php if ($success) { ?>
  <div class="success"><?php echo $success; ?><img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>
  <?php } ?>
  <?php if ($products) { ?>
  <div class="wishlist-info">
    <table>
      <thead>
        <tr>
          <td class="image"><strong><?php echo strtoupper($column_name); ?></strong></td>
          <td><strong></strong></td>
          <td class="stock"><strong><?php echo strtoupper($column_stock); ?></strong></td>
          <td class="price"><strong><?php echo strtoupper($column_price); ?></strong></td>
          <td class="action"><strong><?php echo strtoupper($column_action); ?></strong></td>
        </tr>
      </thead>
      <?php foreach ($products as $product) { ?>
      <tbody id="wishlist-row<?php echo $product['product_id']; ?>">
        <tr>
          <td class="image"><?php if ($product['thumb']) { ?>
            <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
            <?php } ?></td>
          <td class="name">
            <a href="<?php echo $product['href']; ?>"><strong><?php echo strtoupper($product['name']); ?></strong></a><br/>
            <strong><?php echo $column_model; ?></strong><?php echo " ";echo $product['model']; ?>
          </td>
          <td class="stock"><?php echo $product['stock']; ?></td>
          <td class="price"><?php if ($product['price']) { ?>
            <div class="price">
              <?php if (!$product['special']) { ?>
              <?php echo $product['price']; ?>
              <?php } else { ?>
              <s><?php echo $product['price']; ?></s> <br/>
              <b><?php echo $product['special']; ?></b>
              <?php } ?>
            </div>
            <?php } ?></td>
          <td class="action">
            <a onclick="addToCart('<?php echo $product['product_id']; ?>');" title="<?php echo $button_cart; ?>" class="cart-bt"><?php echo $button_cart; ?></a>
            <br>
            <a href="<?php echo $product['remove']; ?>"><?php echo $button_remove; ?></a>
            <!---img src="catalog/view/theme/default/image/cart-add.png" alt="<?php echo $button_cart; ?>" title="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" />&nbsp;&nbsp;<a href="<?php echo $product['remove']; ?>"><img src="catalog/view/theme/default/image/remove.png" alt="<?php echo $button_remove; ?>" title="<?php echo $button_remove; ?>" /></a-->
          </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>
  <div class="buttons">
    <div class="right"><a href="<?php echo $continue; ?>" class="button"><?php echo strtoupper($button_continue); ?></a></div>
  </div>
  <?php } else { ?>
  <div class="content"><?php echo $text_empty; ?></div>
  <div class="buttons">
    <div class="right"><a href="<?php echo $continue; ?>" class="button"><?php echo strtoupper($button_continue); ?></a></div>
  </div>
  <?php } ?>
  <?php echo $content_bottom; ?></div>
<?php echo $footer; ?>