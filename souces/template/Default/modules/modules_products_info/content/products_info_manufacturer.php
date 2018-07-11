<?php
  use ClicShopping\OM\CLICSHOPPING;
?>
<div class="<?php echo $text_position; ?> col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
  <div style="float: <?php echo MODULE_PRODUCTS_INFO_MANUFACTURER_POSITION; ?>;">
    <div class="moduleProductsInfoInfoManufacturer">
      <span class="moduleProductsInfoInfoManufacturer"><h3><?php echo CLICSHOPPING::getDef('module_products_info_manufacturer_title'); ?> : </h3></span>
      <span itemprop="manufacturer" itemscope itemtype="https://schema.org/Organization" class="ProductsInfoManufacturer"><meta itemprop="name" content="<?php echo $manufacturer; ?>" /><h3><?php echo $manufacturer; ?></h3></span>
    </div>
  </div>
</div>