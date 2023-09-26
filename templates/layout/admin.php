<?php
$cakeDescription = 'Superior Fitness Admin';
echo $this->Html->script("/js/scripts.js",['block'=>true]);
echo $this->Html->script("https://use.fontawesome.com/releases/v6.3.0/js/all.js" ,['block'=>true]);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <!-- Favicon-->
        <?= $this->Html->meta(
                'favicon-admin.png',
                '/webroot/assets/favicon-admin.png',
                ['type' => 'icon']
            );
        ?>

    
        <?= $this->Html->css(['styles1']) ?>
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">SF Admin</a>
            <!-- Navbar-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <a href=<?= $this->Url->build(['controller' => 'Customers','action' => 'index'])?> class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                    Logout <i class="fa-solid fa-person-walking-arrow-right"></i></i></a>
                </ul>
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Tabs</div>
                            <a class="nav-link" href=<?= $this->Url->build(['controller' => 'Users','action' => 'index']);?>>
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Users
                            </a>
                            <a class="nav-link" href=<?= $this->Url->build(['controller' => 'Orders','action' => 'index']);?>>
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-rectangle-list"></i></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href=<?= $this->Url->build(['controller' => 'Products','action' => 'index']);?>>
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-dumbbell"></i></div>
                                Products
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Superior Fitness Admin
                    </div>
                </nav>
            </div>
            <main class="main">
                <div class="container">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
        <?= $this->fetch('script') ?>
    </body>
</html>
