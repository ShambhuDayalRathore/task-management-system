<div class="main-header">
    <div class="logo">
        <h5 style="text-align: center;">TMS</h5>
    </div>

    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>



    <div style="margin: auto"></div>

    <div class="header-part-right">
        <!-- User avatar dropdown -->
        <div class="dropdown">
            <div class="user col align-self-end">
                <?php $session = session();
                echo $session->get('name'); ?>
                <img src="<?php echo base_url(); ?>/assets/images/icon/power-off.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> Timothy Carlson
                    </div>
                    <a class="dropdown-item">Account settings</a>
                    <a class="dropdown-item">Billing history</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>/signout">Sign out</a>
                </div>
            </div>
        </div>
    </div>

</div>