<?php
/**
 * The template used for generating ending markup for framework
 *
 * @package WordPress
 * @subpackage Titan Themes
 * @since Hades Framework V5
 */

// == ~~ To use native variables global is required ================================
global $super_options,$helper;

?>

 <?php  if( $super_options[SN."_footer_menu"]=="Yes") : ?>
<div id="footer-menu">
    <div  class=" clearfix  skeleton auto_align "  itemscope itemtype='http://schema.org/SiteNavigationElement'>

             <p class="footer-text">  <?php echo $helper->format($super_options[SN."_footer_text"],false,false,false); ?> </p>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="color: #fff; float: right; font-size: 12px; line-height: initial; font-family: 'Open Sans', sans-serif;">
                  <p><strong style="color: #fff;">FAKULTAS Vokasi</strong></p>
                  <p>Kampus B UNAIR - Jl. Dharmawangsa Dalam No. 28-30, Surabaya – 60286&nbsp;<br>Telp. (031) 5033869, 5014460<br> Fax. 99005114<br>Email : info@vokasi.unair.ac.id</p>
              </div>
      </div>
   </div>
  <?php endif; ?>

