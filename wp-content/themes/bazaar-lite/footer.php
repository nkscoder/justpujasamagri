    <footer id="footer">
        
		<?php do_action('bazaarlite_footer_sidebar'); ?>
                
        <section id="footer-copyright">
                
            <div class="container">
        
                <div class="row" >
                    
                    <div class="col-md-5" style="text-align:justify;">
                        
                        <div>  <h3> ABOUT US </h3> <hr> 

                            Justpujasamagri brings to you an extensive range of puja items kit online which you can purchase at discounted/reasonable rates, that too from the comfort of your home. All the puja items at one place , where you can buy at one go.<br><br>

                             <a href="mailto:nitesh@scaledesk.com?Subject=Contact us" target="_top">     <u>contact At justpujasamagri</u></a><br>
<a href="mailto:nitesh@scaledesk.com?Subject=Contact us" target="_top"><u>rinajha At justpujasamagri</u></a><br><br><br>
                            
                            
                            +91-9650693431, +91-9971856240
                        </div>


                        
                    
                    </div>
                    <div class="col-md-4" >
                      <h3> TERMS AND CONDITIONS</h3><hr>

                       Read our Terms and Conditions, Refund Policy and Exchange Policy. <a href="http://puja.scaledesk.com/terms-conditions/">Click Here</a>
                     </br>
                     <a href="http://puja.scaledesk.com/faqs/">FAQ's</a>
                       
                     
                    </div>
                
                    <div class="col-md-3" >
                         
                         <h3>SOCIAL MEDIA</h3> <hr>
                        <div class="social-buttons">
                        
                            <?php do_action( 'bazaarlite_socials' ); ?>
                        
                        </div>
                        
                    </div>
                
                </div>
           <div class="row">
            <div class=" text-center">
        
                           
                            <p>
                                
                <?php if (bazaarlite_setting('wip_copyright_text')): ?>
                                   <?php echo wp_filter_post_kses(bazaarlite_setting('wip_copyright_text')); ?>
                                <?php else: ?>
                                  <?php _e('',''); ?> <?php echo get_bloginfo("name"); ?> Copyright © <?php echo date_i18n("Y"); ?> 
                                <?php endif; ?> 
                                | <?php _e('',''); ?>   <a href="<?php echo esc_url('http://puja.scaledesk.com/'); ?>" target="_blank"></br> Justpujasamagri.com. All rights reserved.</a> |
                                <a href="<?php echo esc_url( __( '', '' ) ); ?>" title="<?php esc_attr_e( '', '' ); ?>" rel="generator"><?php printf( __( '', '' ), '' ); ?></a>
                            
                            </p>

                        </div>

           </div>


                
            </div>
    
        </section>

    </footer>

	<div id="back-to-top"> <i class="fa fa-chevron-up"></i> </div>

</div>

<?php wp_footer() ?>  
 
</body>

</html>