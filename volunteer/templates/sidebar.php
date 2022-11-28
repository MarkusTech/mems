<?php // function to get the current page name
function PageName() {
  return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
}

$current_page = PageName();
?>
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            
            <ul class="nav nav-primary">
                <li class="nav-item <?= $current_page=='dashboard.php' || $current_page=='resident_info.php' || $current_page=='purok_info.php'  ? 'active' : null ?>">
                    <a href="dashboard.php" >
                        <i class="fas fa-home"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='registration.php' ? 'active' : null ?>">
                    <a href="registration.php">
                        <i class="fas fa-users"></i>
                        <p>Volunteer Registration</p>
                    </a>
                </li>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>