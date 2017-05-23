<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
      <?php if((!empty($loggedUser['profile_pic']))){ ?>
        <img src="<?=IMG_ADMIN.'user/thumb/'.$loggedUser['profile_pic']?>" width="160" height="160" class="img-circle" alt="User Image">
      <?php  }else{ ?>
          <img src="<?=IMG_ADMIN?>user2-160x160.jpg" width="160" height="160" class="img-circle" alt="User Image">
        <?php } ?>
      </div>
      <div class="pull-left info">
        <p><?php echo (!empty($loggedUser))?$loggedUser['first_name'].' '.$loggedUser['last_name']:''; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header"><i class="fa fa-angle-double-right"></i> ADMIN PANEL</li>
      <li class="active treeview">
        <a href="<?=ADMIN_WEBROOT?>home">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-fw fa-gear"></i>
          <span>Manage Sliders</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=ADMIN_WEBROOT?>slides"><i class="fa fa-angle-double-right"></i> List Slides</a></li>
          <li><a href="<?=ADMIN_WEBROOT?>slides/add"><i class="fa fa-angle-double-right"></i> Add Slide</a></li>
          <li><a href="<?=ADMIN_WEBROOT?>slides/services"><i class="fa fa-angle-double-right"></i> Services</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>