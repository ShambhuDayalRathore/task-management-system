<?php
// $controllerName = $this->request->uri->getSegment(1);
?>
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item <?php if ($controllerName == "dashboard") {
                                    echo "active";
                                } else {
                                } ?>" data-item="dashboard">
                <a class="nav-item-hold" href="<?php echo base_url(); ?>/dashboard">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item <?php if ($controllerName == "taskboard" || $controllerName == "addTask") {
                                    echo "active";
                                } else {
                                } ?>" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Task</span>
                </a>
                <div class="triangle"></div>
            </li>
            <!-- <li class="nav-item " data-item="charts">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <div class="triangle"></div>
            </li> -->


            <li class="nav-item " data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">User Details</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item ">
                <a class="" href="<?php echo base_url(); ?>/dashboard">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="apps">
            <li class="nav-item dropdown-sidemenu">
                <a>
                    <i class="nav-icon i-Receipt"></i>
                    <span class="item-name">Task Board</span>
                    <i class="dd-arrow i-Arrow-Down"></i>
                </a>
                <ul class="submenu">
                    <?php
                    $session = session();
                    if ($session->get('userRoleId') == 1 || $session->get('userRoleId') == 2) {
                    ?>
                        <li>
                            <a class="" href="<?php echo base_url(); ?>/taskboard">
                                <i class="nav-icon i-Receipt"></i>
                                <span class="item-name">Task board</span>
                            </a>
                        </li>
                    <?php } ?>
                    <li>
                        <a class="" href="<?php echo base_url(); ?>/assigntask">
                            <i class="nav-icon i-Receipt"></i>
                            <span class="item-name">Assign to me</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url(); ?>/addTask">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">Add Task</span>
                        </a>
                    </li>
                    <li></li>
                </ul>
            </li>
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="<?php echo base_url(); ?>/UserList">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">User List</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<?php if (session()->has('success')) : ?>
    <div id="toast-container" class="toast-bottom-right">
        <div class="toast toast-success" aria-live="polite" style="">
            <div class="toast-title">Success</div>
            <div class="toast-message"><?php echo session('success') ?></div>
        </div>
    </div>
<?php endif ?>
<?php if (session()->has('error')) : ?>
    <div id="toast-container" class="toast-bottom-right">
        <div class="toast toast-Danger" aria-live="polite" style="">
            <div class="toast-title">Error</div>
            <div class="toast-message"><?php echo session('error') ?></div>
        </div>
    </div>
<?php endif ?>