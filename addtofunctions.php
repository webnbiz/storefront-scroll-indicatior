/**
 * Adds a top bar to Storefront, before the header. copy and paste to functions.php file in storefront
 */
function storefront_add_topbar() {
    ?>
    <div class="pbar">
  <div class="well">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>

    <?php
}
add_action( 'storefront_before_header', 'storefront_add_topbar' );
