<?php 
echo '<div class="user">';
foreach($userDashboardItems as $userDashboardItem){
  echo '
  <a href="'.$userDashboardItem['link'].'">'.$userDashboardItem['item'].'</a>
';
}
echo '</div>
</header>';