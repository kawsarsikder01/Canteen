<?php 
include_once($_SERVER['DOCUMENT_ROOT']).DIRECTORY_SEPARATOR.'config.php';
$userJson = file_get_contents($frontEndSources.'user_dashboard.json');
$userDashboardItems = json_decode($userJson);
echo '<div class="user">';
foreach($userDashboardItems as $userDashboardItem){
  echo '
  <a href="'.$userDashboardItem->link.'">'.$userDashboardItem->item.'</a>
';
}
echo '</div>
</header>';