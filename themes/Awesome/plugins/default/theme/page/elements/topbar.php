<?php
	if(ossn_isLoggedin()){		
		$hide_loggedin = "hidden-xs hidden-sm";
	}
?>
<?php if(ossn_isLoggedin()){ ?>
<nav class="topbar-parent navbar navbar-toggleable-md navbar-light <?php echo oa_theme_get_settings('topbarparent_nav');?>">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    	<i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      	<?php 
		if(ossn_isLoggedin()){
				echo  ossn_view_sections_menu('newsfeed');
		}
		?>
    </ul>
    <ul class="navbar-nav ml-auto">
             <li class="nav-item oa-topbar-user-metadata hidden-xs">
                		<img src="<?php echo ossn_loggedin_user()->iconURL()->smaller; ?>" width="" height="" />
                        <span class="username-full"><a href="<?php echo ossn_loggedin_user()->profileURL(); ?>"><?php echo ossn_loggedin_user()->first_name; ?></a></span>
             </li>
             <li class="nav-item dropdown ossn-topbar-dropdown-menu oa-topbar-user-metadata">
			<?php
			if(ossn_isLoggedin()){						
				echo ossn_plugin_view('output/url', array(
									'class' => 'nav-link dropdown-toggle',
									'data-toggle' => 'dropdown',
									'aria-haspopup' => "true",
									'aria-expanded' => "false",
									'id' => 'topbar-user-menu-dropdown',
				));									
				echo ossn_view_menu('topbar_dropdown'); 
			}
			?>        
      </li>         
    </ul>
  </div>
</nav>
<?php } ?>
<!-- ossn topbar -->
<div class="topbar">
			<div class="container">
            	<div class="topbar-inner">
				<div class="row">
					<div class="col-md-4">
						<div class="site-name"><?php echo ossn_site_settings('site_name');?></div>
					</div>
					<div class="col-md-8 text-right">
                    <?php
						if(ossn_isLoggedin()){ 
							echo ossn_view_form('search', array(
								'component' => 'OssnSearch',
								'class' => 'ossn-search',
								'autocomplete' => 'off',
								'method' => 'get',
								'security_tokens' => false,
								'action' => ossn_site_url("search"),
							), false);
					}
					?>
                        	<?php
								if(!ossn_isLoggedIn()){ 
									echo ossn_view_form('login_topbar', array(
            							'id' => 'ossn-login',
										'class' => 'ossn-login-form text-right',
										'format' => true,
           								'action' => ossn_site_url('action/user/login'),
    	    						));
								} else { ?>
                                
					<div class="topbar-menu-right">             
					<?php
						if(ossn_isLoggedin()){
							echo ossn_plugin_view('notifications/page/topbar');
						}
						?>
				</div>                                
								
							<?php	}
							 ?>
					</div>
				</div>
                </div>
			</div>
</div>
<!-- ./ ossn topbar -->