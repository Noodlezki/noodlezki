<div id="sidebar" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 box">
  <div class="article">
    <h3>Moron in Space&nbsp;&&nbsp;Time</h3>
    <ul>
      <?php if (is_category()) :
        $cat = get_query_var('cat');
        wp_list_categories("sort_column=name&optioncount=0&hierarchical=1&child_of=$cat&depth=2");
      else :
        wp_list_categories('sort_column=name&optioncount=0&hierarchical=1&depth=2');
      endif; ?>
    </ul>
    <div id="dividing-line"></div>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>
</div>
