<?
NameSpace Roots\Sage\User;

function content_types() {
  $out = [];
  foreach ( get_post_types(["show_ui"=>true], "objects") as $post_type ) {
    if ($post_type->name=="media") { continue; }
    if ($post_type->name=="attachment") { continue; }
    if ($post_type->name=="acf") { continue; }

    $out[] = $post_type;
  }
  return $out;
}

function create_new_links() {
  $out = [];
  foreach ( content_types() as $post_type ) {
    $icon = $post_type->menu_icon;
    if ($post_type->name=="post") { $icon = "dashicons-admin-post"; }
    if ($post_type->name=="page") { $icon = "dashicons-admin-page"; }

    $text = str_replace("Add New","Add a",$post_type->labels->add_new_item);
    // Oh jeez; "Add a Event"...
    if ( preg_match("/^Add a [aeiouAEIOU]/", $text) ) {
      $text = str_replace("Add a ","Add an ",$text);
    }

    $out[] = [
      "name" => $post_type->name,
      "text" => $text,
      "icon" => $icon,
    ];
  }
  return $out;
}

/*
 * If you can edit the current page, returns:
 * [ 
 *   "text" => "Edit this App" (or page, blog etc)
 *   "url" => ... link to the editor
 * ]
 */
function link_edit_this_page() {
  global $wp_the_query;
  $current_object = $wp_the_query->get_queried_object();
  if ( ! empty($current_object)
    //&& $current_object->post_type==$post_type->name
    && current_user_can( 'edit_post', $current_object->ID )
    && ( $post_type_object = get_post_type_object( $current_object->post_type ) )
    && $post_type_object->show_ui 
    && $post_type_object->show_in_admin_bar)
  {
    return [
      "url" => get_edit_post_link( $current_object->ID ),
      "text" => str_replace("Edit ","Edit This ",$post_type_object->labels->edit_item),
    ];
  } 
}

function li_header($text){
  return "<li class=\"dropdown-header\">$text</li>";
}

function li($class, $href, $text, $icon="",$dropdown=""){
  if ($icon) {
    if ( substr($icon,0,8)=="dashicon" ) {
      $icon = "<div class=\"dashicons $icon\"></div>&nbsp; ";
    }
    else {
      $icon = "<i class=\"$icon\"></i>&nbsp; ";
    }
  }
  $link_attributes = "";
 if ($dropdown) {
    $class .= " dropdown";
    $text  .= " <b class=\"caret\"></b>";
    $link_attributes = "class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\"";
    $dropdown = "<ul class=\"dropdown-menu\">$dropdown</ul>";
  }
  return "<li class=\"$class\"><a $link_attributes href=\"$href\">$icon$text</a>$dropdown</li>";
}
