<?php
    $menuChilds = [
        ["menu" => "My profile",  "icon" => "icon-user-plus"],
        ["menu" => 'My balance',  "icon" => "icon-coins"],
        ["menu" =>'Messages',  "icon" => "icon-comment-discussion"],
        ["menu" =>'Account settings',  "icon" => "icon-cog5"],
        ["menu" =>'Logout',  "icon" => "icon-user-plus"]
    ];
?>


<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div class="card-body text-center">
							<a href="#">
								<img src="../../../../global_assets/images/placeholders/pCosta.png" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark">pCosta</h6>
							<span class="font-size-sm text-white text-shadow-dark">Nodda, Gulshan-1, Dhaka</span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
						</div>
					</div>

					<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
                            <?php
                            foreach($menuChilds as $menuChild){
                                echo '<li class="nav-item">
								    <a href="#" class="nav-link">
									<i class='.$menuChild['icon'].'></i>
									<span>'.$menuChild['menu'].'</span>
								    </a>
							        </li>';
                                };
                            ?>
						</ul>
					</div>
				</div>