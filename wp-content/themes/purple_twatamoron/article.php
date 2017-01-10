  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 box pull-right">
    <div class="article">
      <?php $cat = get_the_category()[0];
            if($cat->category_parent!=0) :
              $catpar = get_category($cat->category_parent);
            endif;
      ?>
        <h2><?php echo 
            '<a href="'.get_category_link($cat->cat_ID).'">'.$cat->cat_name.'</a>'.
            (($cat->category_parent != 0)?
            ', <a href="'.get_category_link($catpar->cat_ID).'">'.$catpar->cat_name.'</a>':
            ''); ?>
      </h2>
      <h4><?php the_time('F jS, Y') ?></h4>
      <p><?php the_content(__('(more...)')); ?></p>
    </div>
  </div>
