<?php
//comment functions


function twisty_meta()
{

  ?>
  <div class="entry-meta clearfix " >
      <?php 
        if ( is_sticky() && is_home() && ! is_paged() ) {
          printf( '<span class="sticky">%s</span>', __( 'STICKY', 'twisty' ) );
        }

      ?>
          <?php 
            echo '<p class="text-white"> '.esc_html(the_category(' | ','')).'</p>';
            echo '<p class="text-gray-dark"> '.esc_html(the_tags(' ','|')).'</p>';
          ?>
          <ul >
            <li ><a  href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_comments_number());?> <?php esc_html_e('Comments','twisty');?></a></li>
            <li><a href="<?php echo esc_url( get_permalink() );?>"><?php echo get_the_date(get_option('date_format'));?></a></li>
            <li ><a  href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>

          </ul>
          
        </div>
        <?php
}


function twisty_social()
{

  ?>
  <?php if(get_theme_mod('facebook_url', 'http://facebook.com') != '') : ?>
    <div class="col-12 pt-3" >
      <a class="btn btn-default btn-lg" href="<?php echo esc_url(get_theme_mod('facebook_url','http://facebook.com')); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> <?php esc_html_e( 'Facebook', 'twisty' ); ?>
      </a>
    </div>
  <?php endif; ?>
  
  <?php if(get_theme_mod('twitter_url', 'http://twitter.com') != '') : ?>
    <div class="col-12 pt-3">            
        <a class="btn btn-default btn-lg" href="<?php echo esc_url(get_theme_mod('twitter_url','http://twitter.com')); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> <?php esc_html_e( 'Twitter', 'twisty' ); ?>
        </a>
    </div>            
    <?php endif; ?>

    <?php if(get_theme_mod('linkedin_url', 'http://linkedin.com') != '') : ?>
      <div class="col-12 pt-3">
        <a class="btn btn-default btn-lg" href="<?php echo esc_url(get_theme_mod('facebook_url','http://linkedin.com')); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i><?php esc_html_e( 'Linkedin', 'twisty' ); ?> 
        </a>
      </div>    
    <?php endif; ?>
<?php
  }