<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *  @Info : https://www.clicshopping.org/forum/trademark/
 *
 */

use ClicShopping\OM\CLICSHOPPING;
?>
<div class="<?php echo $text_position; ?> col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
  <div style="float: <?php echo MODULE_PRODUCTS_INFO_MANUFACTURER_POSITION; ?>;">
    <div class="moduleProductsInfoInfoManufacturer">
      <span class="moduleProductsInfoInfoManufacturer"><h3><?php echo CLICSHOPPING::getDef('module_products_info_manufacturer_title'); ?> : </h3></span>
      <span class="ProductsInfoManufacturer"><h3><?php echo $manufacturer; ?></h3></span>
    </div>
  </div>
</div>