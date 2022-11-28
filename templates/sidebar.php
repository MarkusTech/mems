<?php // function to get the current page name
function PageName() {
  return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
}

$current_page = PageName();
?>
<?php include 'server/server.php' ?>
<?php
    error_reporting(0);
    $query = "SELECT * FROM tblreg WHERE confirmation = 'Confirmed'";
    $result = $conn->query($query);
    
    $sort_barangay = $_GET['sort_barangay'];

    if($sort_barangay=='All'){
        $query2 = "SELECT * FROM tblreg WHERE confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='apopong'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Apopong' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='baluan'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Baluan' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='batomelong'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Batomelong' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='buayan'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Buayan' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='bula'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Bula' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='calumpang'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Calumpang' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='cityheights'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='City Heights' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='conel'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Conel' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='dadeast'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Dadiangas East' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='dadnorth'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Dadiangas North' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='dadsouth'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Dadiangas South' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='dadwest'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Dadiangas West' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='fatima'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Fatima' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='katangawan'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Katangawan' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='labangal'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Labangal' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='lagao'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Lagao' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='ligaya'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Ligaya' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='mabuhay'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Mabuhay' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='olympog'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Olympog' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='sanisidro'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='San Isidro' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='sanjose'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='San Jose' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='siguel'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Siguel' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='sinawal'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Sinawal' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='tambler'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Tambler' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='tinagacan'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Tinagacan' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='upperlabay'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Upper Labay' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }else{
        $query2 = "SELECT * FROM tblreg";
        $result2 = $conn->query($query2);
    }
    
    $brg = array();
    while($row = $result2->fetch_assoc()){
        $brg[] = $row;
    }

    $query3 = "SELECT * FROM tblevacuee";
    $result3 = $conn->query($query3);
    
    $sort_barangays = $_GET['sort_barangays'];

    if($sort_barangays=='All'){
        $query4 = "SELECT * FROM tblevacuee";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='apopong'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Apopong'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='baluan'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Baluan'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='batomelong'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Batomelong'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='buayan'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Buayan'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='bula'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Bula'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='calumpang'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Calumpang'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='cityheights'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='City Heights'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='conel'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Conel'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='dadeast'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Dadiangas East'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='dadnorth'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Dadiangas North'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='dadsouth'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Dadiangas South'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='dadwest'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Dadiangas West'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='fatima'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Fatima'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='katangawan'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Katangawan'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='labangal'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Labangal'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='lagao'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Lagao'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='ligaya'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Ligaya'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='mabuhay'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Mabuhay'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='olympog'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Olympog'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='sanisidro'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='San Isidro'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='sanjose'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='San Jose'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='siguel'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Siguel'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='sinawal'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Sinawal'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='tambler'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Tambler'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='tinagacan'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Tinagacan'";
        $result4 = $conn->query($query4);
    }elseif($sort_barangays=='upperlabay'){
        $query4 = "SELECT * FROM tblevacuee WHERE barangay='Upper Labay'";
        $result4 = $conn->query($query4);
    }else{
        $query4 = "SELECT * FROM tblevacuee";
        $result4 = $conn->query($query4);
    }
    
    $brgys = array();
    while($row = $result4->fetch_assoc()){
        $brgys[] = $row;
    }

    $query5 = "SELECT * FROM tblreg WHERE";
    $result5 = $conn->query($query5);
    
    $sort_confirmation = $_GET['sort_confirmation'];

    if($sort_confirmation=='all'){
        $query5 = "SELECT * FROM tblreg";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='confirmed'){
        $query5 = "SELECT * FROM tblreg WHERE confirmation = 'Confirmed'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='notconfirmed'){
        $query5 = "SELECT * FROM tblreg WHERE confirmation = 'Not Confirmed'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='apopong'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Apopong'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='baluan'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Baluan'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='batomelong'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Batomelong'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='buayan'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Buayan'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='bula'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Bula'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='calumpang'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Calumpang'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='cityheights'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'City Heights'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='conel'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Conel'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='dadeast'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Dadiangas East'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='dadnorth'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Dadiangas North'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='dadsouth'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Dadiangas South'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='dadwest'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Dadiangas West'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='fatima'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Fatima'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='katangawan'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Katangawan'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='labangal'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Labangal'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='lagao'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Lagao'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='ligaya'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Ligaya'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='mabuhay'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Mabuhay'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='olympog'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Olympog'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='sanisidro'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'San Isidro'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='sanjose'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'San Jose'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='siguel'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Siguel'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='sinawal'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Sinawal'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='tambler'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Tambler'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='tinagacan'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Tinagacan'";
        $result5 = $conn->query($query5);
    }elseif($sort_confirmation=='upperlabay'){
        $query5 = "SELECT * FROM tblreg WHERE barangay = 'Upper Labay'";
        $result5 = $conn->query($query5);
    }else{
        $query5 = "SELECT * FROM tblreg";
        $result5 = $conn->query($query5);
    }
    
    $cnfm = array();
    while($row = $result5->fetch_assoc()){
        $cnfm[] = $row;
    }
?>
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <?php if(!empty($_SESSION['avatar'])): ?>
                        <img src="<?= preg_match('/data:image/i', $_SESSION['avatar']) ? $_SESSION['avatar'] : 'assets/uploads/avatar/'.$_SESSION['avatar'] ?>" alt="..." class="avatar-img rounded-circle">
                    <?php else: ?>
                        <img src="assets/img/person.png" alt="..." class="avatar-img rounded-circle">
                    <?php endif ?>
                   
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="<?= isset($_SESSION['username']) && $_SESSION['role']=='administrator' ? '#collapseExample' : 'javascript:void(0)' ?>" aria-expanded="true">
                        <span>
                        <?= isset($_SESSION['username']) ? ucfirst($_SESSION['username']) : 'Guest User' ?>
                            <span class="user-level"><?= isset($_SESSION['role']) ? ucfirst($_SESSION['role']) : 'Guest' ?></span>
                        <?= isset($_SESSION['username']) && $_SESSION['role']=='administrator' ? '<span class="caret"></span>' : null ?> 
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#edit_profile" data-toggle="modal">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                                <a href="#changepass" data-toggle="modal">
                                    <span class="link-collapse">Change Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?= $current_page=='dashboard.php' ? 'active' : null ?>">
                    <a href="dashboard.php" >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Module</h4>
                </li>

                    
                <!--------------INCIDENT REPORT CASE-------------->
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Apopong'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=apopong">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Baluan'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=baluan">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Batomelong'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=batomelong">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Buayan'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=buayan">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Bula'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=bula">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Calumpang'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=calumpang">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='City Heights'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=cityHeights">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Conel'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=conel">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas East'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=dadeast">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas North'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=dadnorth">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas South'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=dadsouth">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas West'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=dadwest">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Fatima'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=fatima">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Katangawan'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=katangawan">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Labangal'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=labangal">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Lagao'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=lagao">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Ligaya'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=ligaya">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Mabuhay'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=mabuhay">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Olympog'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=olympog">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Isidro'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=sanisidro">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Jose'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=sanjose">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Siguel'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=siguel">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Sinawal'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=sinawal">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tambler'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=tambler">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tinagacan'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=tinagacan">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Upper Labay'): ?>
                <li class="nav-item <?= $current_page=='evacuee_info.php' ? 'active' : null ?>">
                    <a href="evacuee_info.php?sort_barangays=upperlabay">
                        <i class="fa fa-file"></i>
                        <p>Incidents Reports</p>
                    </a>
                </li>
                <?php endif ?>


                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Apopong'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=apopong">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Baluan'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=baluan">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Batomelong'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=batomelong">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Buayan'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=buayan">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Bula'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=bula">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Calumpang'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=calumpang">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='City Heights'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=cityheights">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Conel'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=conel">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas East'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=dadeast">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas North'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=dadnorth">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas South'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=dadsouth">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas West'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=dadwest">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Fatima'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=fatima">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Katangawan'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=katangawan">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Labangal'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=labangal">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Lagao'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=lagao">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Ligaya'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=ligaya">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Mabuhay'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=mabuhay">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Olympog'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=olympog">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Isidro'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=sanisidro">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Jose'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=sanjose">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Siguel'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=siguel">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Sinawal'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=sinawal">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tambler'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=tambler">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tinagacan'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=tinagacan">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Upper Labay'): ?>
                <li class="nav-item <?= $current_page=='vapplication.php' ? 'active' : null ?>">
                    <a href="vapplication.php?sort_confirmation=upperlabay">
                        <i class="icon-people"></i>
                        <p>Volunteers</p>
                    </a>
                </li>
                <?php endif ?>

                <!-------------------INCIDENT AREA-------------------->

                <li class="nav-item <?= $current_page=='incidents.php' ? 'active' : null ?>">
                    <a href="incidents.php">
                        <i class="fa fa-ambulance"></i>
                        <p>Incidents</p>
                    </a>
                </li>

                <!-- asdasd -->
                <li class="nav-item <?= $current_page=='evacuee_infos.php' ? 'active' : null ?>">
                    <a href="evacuee_infos.php">
                        <i class="fa fa-list"></i>
                        <p>List of Evacuees</p>
                    </a>
                </li>
                
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">System</h4>
                </li>
                <li class="nav-item <?= $current_page=='purok.php' || $current_page=='position.php' || $current_page=='chairmanship.php' || $current_page=='precinct.php' ||$current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'active' : null ?>">
                    <a href="#settings" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="icon-wrench"></i>
                            <p>Settings</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= $current_page=='purok.php' || $current_page=='position.php'  || $current_page=='precinct.php' || $current_page=='chairmanship.php' || $current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'show' : null ?>" id="settings">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#systeminfo" data-toggle="modal">
                                    <span class="sub-item">System Info</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='barangay.php' ? 'active' : null ?>">
                                <a href="barangay.php">
                                    <span class="sub-item">Barangay</span>
                                </a>
                            </li>
                                <li class="<?= $current_page=='users.php' ? 'active' : null ?>">
                                    <a href="users.php">
                                        <span class="sub-item">Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="backup/backup.php">
                                        <span class="sub-item">Backup</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#restore" data-toggle="modal">
                                        <span class="sub-item">Restore</span>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>