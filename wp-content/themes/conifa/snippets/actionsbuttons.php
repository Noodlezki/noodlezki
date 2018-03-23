<? use Roots\Sage\User; ?>

<?  if ( ! is_user_logged_in() ): ?>
  <div class="action-buttons hidden-xs">
    <a class="text-muted menu-register" href="/wp-login.php?action=register">Register an Account</a>
    <a href="/wp-login.php" class="menu-login m-left btn btn-default">&nbsp;Login &nbsp;<i class="icon-user"></i></a>
  </div>
<? else: ?>
  <? global $current_user; ?>

  <div class="action-buttons hidden-xs">
    <span class="text-muted menu-logged-in">
      Logged in as <a href="/user"><?= $current_user->display_name ?></a>
    </span>
    <div class="m-left dropdown btn-group">
      <button class="dropdown-toggle btn btn-primary" type="button" id="dropdownActions" data-toggle="dropdown" aria-haspopup="true">
        <i class="icon-user"></i>&nbsp; Actions <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownActions">

        <? if ( ! empty(User\link_edit_this_page()) ): ?>
          <? $link = User\link_edit_this_page(); ?>
          <li class="menu-edit-this">
            <a href="<?= $link['url'] ?>">
              <div class="dashicons dashicons-welcome-write-blog"></div>&nbsp; <?= $link['text'] ?>
            </a>
          </li>
        <? endif; ?>

        <? if (current_user_can('manage_options')): ?>
          <li class="dropdown-header">WordPress Admin</li>
          <li class="menu-wp-admin"><a href="/wp-admin/index.php"><div class="dashicons dashicons-admin-site"></div>&nbsp; Manage Site</a></li>
          <li class="menu-wp-users"><a href="/wp-admin/users.php"><div class="dashicons dashicons-admin-users"></div>&nbsp; Manage Users</a></li>
        <? endif; ?>

        <? if ( current_user_can('edit_posts') || current_user_can('edit_pages') ): ?>
          <li class="dropdown-header">Content Management</li>

          <? if ( ! current_user_can('manage_options') ): ?>
            <? /* Editors didn't get this option in the above category, so here it is. */ ?>
            <li class="menu-wp-admin"><a href="/wp-admin/index.php"><div class="dashicons dashicons-admin-site"></div>&nbsp; Manage Site</a></li>
          <? endif; ?>
          <? foreach (User\create_new_links() as $link): ?>
            <li class="menu-wp-post-new">
              <a href="/wp-admin/post-new.php?post_type=<?= $link['name'] ?>">
                <div class="dashicons <?= $link['icon'] ?>"></div>&nbsp; <?= $link['text'] ?>
              </a>
            </li>
          <? endforeach ?>

        <? endif; ?>

        <li class="dropdown-header">My Account</li>
        <li class="menu-dashboard"><a href="<?= site_url('/user') ?>"><div class="dashicons dashicons-dashboard"></div>&nbsp; My Dashboard</a></li>
        <!-- <li class="menu&#45;wp&#45;profile"><a href="<? // site_url('/wp&#45;admin/profile.php') ?>"><div class="dashicons dashicons&#45;id&#45;alt"></div>&#38;nbsp; Edit My Profile</a></li> -->
        <li class="menu-logout"><a href=<?= wp_logout_url() ?>><div class="dashicons dashicons-download"></div>&nbsp; Logout</a></li>

      </ul>
    </div>
  </div>

<? endif; ?>
