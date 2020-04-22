<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="demo-layout-page-about mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-color--grey-200">
    <header class="mdl-layout__header mdl-layout__header--waterfall mdl-color--white">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo asset_url('images/logotype.svg'); ?>" height=25 alt="Rime">
                </a>
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="<?php echo base_url('about'); ?>">
                    Our Company
                </a>
                <a class="mdl-navigation__link" href="<?php echo base_url('about/us'); ?>">
                    Our Story
                </a>
            </nav>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <?php
                if (!empty($logged_in_user))
                {
                    ?>
                    <a class="mdl-navigation__link" href="<?php echo base_url('@'.$logged_in_user['username']); ?>">
                        <img class="bg-cover img-circle"
                            style="background-image: url(<?php echo $logged_in_user['profile_image_url']; ?>)"
                            height="39px"
                            src="<?php echo asset_url('images/blank.png'); ?>"
                            alt="<?php echo $logged_in_user['username']; ?>">
                    </a>
                    <?php
                }
                else
                {
                    ?>
                    <a class="mdl-navigation__link" href="<?php echo base_url('auth/sign-in'); ?>">
                        <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Sign in
                        </span>
                    </a>
                    <?php
                }
                ?>
                
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer mdl-color--white mdl-layout--small-screen-only">
        <!-- <span class="mdl-layout-title">Rime</span> -->
        <span class="mdl-layout-title">
            <!-- Rime -->
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo asset_url('images/logotype.svg'); ?>" height=25 alt="Rime">
            </a>
        </span>

        <nav class="mdl-navigation">

            <a class="mdl-navigation__link" href="http://weblog.rime.co">
                Our Company
            </a>
            <a class="mdl-navigation__link" href="https://medium.com/rimeofficial/features-ef457d77122f">
                Our Story
            </a>
            
        </nav>
    </div>
    
    <main class="mdl-layout__content">
        <div class="page-content">

            <!-- Your content goes here -->
            <?php echo $main_content; ?>
        </div>

        <?php $this->view('footer'); ?>
    </main>
</div>