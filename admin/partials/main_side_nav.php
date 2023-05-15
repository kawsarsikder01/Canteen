  <?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/'.'collage_canteen'.'/'.'config.php');
	$navItemJson = file_get_contents($adminSources.'sidebar.json');
	$navItems = json_decode($navItemJson);
    // $menuChilds = [
    //     ["menu" => "Dashboard",  "icon" => "icon-home4", 'link'=>'index.php'],
    //     ["menu" => "POS",  "icon" => "icon-printer4", 'link'=>'pos_index.html'],
    //     ["menu" =>"Customers",  "icon" => "icon-users2",  
	// 	"subMenu"=>["Add Customer",  "Customers"], 
	// 	"subLink" =>["add_customer.html", "customers.html"]
	// 	],
    //     ["menu" =>"Category",  "icon" => "icon-list", 
	// 	"subMenu"=>["Add Category","Categories"], 
	// 	"subLink" =>["add_category.html", "categories.html"]
	// 	],
    //     ["menu" =>"Outdoor Place",  "icon" => "icon-exit3",
	// 	"subMenu"=>["Add Outdoor Place", "Outdoors"],
	// 	"subLink" =>["add_outdoor_place.html", "outdoor_places.html"]
	// 	],
    //     ["menu" =>"Orders",  "icon" => "icon-compose", 
	// 	"subMenu"=>["Add Order","Orders"], 
	// 	"subLink" =>["add_order.html", "orders.html"]
	// 	],
    //     ["menu" =>"Settings",  "icon" => "icon-cogs", 
	// 	"subMenu"=>["Add User","Users","User Roles","Permitions"], 
	// 	"subLink" =>["add_user.html", "users.html", "user_roles.html", "premishions.html"]
	// 	],
    //     ["menu" =>"App configuration",  "icon" => "icon-android", 
	// 	"subMenu"=>["App Config","Banner Images","Privecy And Policy Page","About Page"], 
	// 	"subLink" =>["app_config.html","banner_images.html","privecy_policy_page_setup.html","index.php"]
	// 	],
    // ];
?>

<div class="card card-sidebar-mobile">
	<ul class="nav nav-sidebar" data-nav-type="accordion">
    <?php

	foreach($navItems as $navItem){
		echo "<li class='nav-item".(isset($navItem->subnav)? 'nav-item-submenu':'')."'>";
		if(isset($navItem->link)){
			echo "<a href='{$navItem->link}'class='nav-link'><i class='{$navItem->icon}'></i>
			<span>{$navItem->name}</span></a>";
		}
		else{
			echo "<a class='nav-link'><i class='{$navItem->icon}'></i>
			<span>{$navItem->name}</span></a>";
		};
		if(isset($navItem->subnav)){
			echo "<ul class='nav nav-group-sub'data-submenu-title='{$navItem->name}'>";
			foreach($navItem->subnav as $subMenu){
				echo "<li class='nav-item'><a href='{$subMenu->link}' class='nav-link active'>{$subMenu->name}</a></li>";
			}
			echo "</ul>";
		}
		echo "</li>";
		
	}
        // foreach($menuChilds as $menuChild){
        // echo ' <li class="nav-item">
        //              <a href=';
		// 			  if(array_key_exists('link', $menuChild)){
		// 				echo $menuChild['link'].' class="nav-link active">';
		// 				}else{
		// 					echo '#'.' class="nav-link">';
		// 				};
		// 			  ;
		// 			  echo '
        //                 <i class='.$menuChild['icon'].'></i>
		// 				<span>
		// 				'.$menuChild['menu'].'
		// 				</span>
        //             </a>';
					
		// 			if(array_key_exists('subMenu', $menuChild)){
		// 				echo '<ul class="nav nav-group-sub" data-submenu-title="Layouts">';
		// 				foreach($menuChild['subMenu'] as $key => $subMenu){
		// 					echo '<li class="nav-item"><a href="'.$menuChild['subLink'][$key].'" class="nav-link active">'.$subMenu.'</a></li>';
		// 				}
		// 			echo '</ul>';
        //         	};	
        //     echo '</li>';
        // };
    ?>
					
                   

                        <!-- <li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="pos_index.html" class="nav-link active">
								<i class="icon-printer4"></i>
								<span>
									POS
								</span>
							</a>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users2 mr-3"></i> <span>Customers</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_customer.html" class="nav-link active">Add Castomer</a></li>
								<li class="nav-item"><a href="customers.html" class="nav-link active">Castomers</a></li>
							</ul>
						</li> -->

					
						<!-- <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-list mr-3"></i> <span>Category</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_category.html" class="nav-link active">Add Category</a></li>
								<li class="nav-item"><a href="categories.html" class="nav-link active">Categories</a></li>
							</ul>
						</li> -->

<!-- 						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-basket mr-3"></i> <span>Product</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_product.html" class="nav-link active">Add Product</a></li>
								<li class="nav-item"><a href="products.html" class="nav-link active">Products</a></li>
							</ul>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-exit3 mr-3"></i> <span>Outdoor Place</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_outdoor_place.html" class="nav-link active">Add Outdoor Place</a></li>
								<li class="nav-item"><a href="outdoor_places.html" class="nav-link active">Outdoor Places</a></li>
							</ul>
						</li>

					
						<li class="nav-item">
							<a href="orders.html" class="nav-link active">
								<i class="icon-compose"></i>
								<span>
									Orders
								</span>
							</a>
						</li>

						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cogs mr-3"></i> <span>Settings</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_user.html" class="nav-link active">Add User</a></li>
								<li class="nav-item"><a href="users.html" class="nav-link active">Users</a></li>
								<li class="nav-item"><a href="user_roles.html" class="nav-link active">User Roles</a></li>
								<li class="nav-item"><a href="#" class="nav-link active">Permishions</a></li>
							</ul>
						</li>

					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-android mr-3"></i> <span>App configuration</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="app_config.html" class="nav-link active">App Config</a></li>
								<li class="nav-item"><a href="banner_images.html" class="nav-link active">Banner Images</a></li>
								<li class="nav-item"><a href="privecy_policy_page_setup.html" class="nav-link active">Privecy And Policy Page</a></li>
								<li class="nav-item"><a href="about_page_setup.html" class="nav-link active">About Page</a></li>
							</ul>
						</li>  -->
					</ul>
				</div>