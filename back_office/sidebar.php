     <?php 
    $query =
    '
        SELECT
            COUNT(*) as nbrre
        FROM
            Booking
        WHERE
           State= 0
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute();
    $nbr = $resultSet->fetch();


     $query = 
  '
    SELECT
      COUNT(*) as evntnbr
    FROM
      Event
    WHERE
      State=1
  ';
  $resultSet = $pdo->query($query);
  $evnt = $resultSet->fetch();

  $query = 
  '
    SELECT
      COUNT(*) as evntarch
    FROM
      Event
    WHERE
      State=0
  ';
  $resultSet = $pdo->query($query);
  $arch = $resultSet->fetch();

 $query = 
 '
   SELECT
     COUNT(*) as apost
   FROM
     Post
   WHERE
     PostState=1
 ';
  $resultSet = $pdo->query($query);
  $aposts = $resultSet->fetch();
        
     ?>
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar" style="padding: 21px;">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>           
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-clock-o"></i>Réservations <?php if($nbr['nbrre']>0){echo '<span class="badge badge-warning">'.$nbr['nbrre'].'</span>';} ?></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="res0.php">
                                    <i class="fas fa-clock-o"></i>En attente
                                    <?php if($nbr['nbrre']>0){echo '<span class="badge badge-primary">'.$nbr['nbrre'].'</span>';} ?></a>
                                </li>
                                <li>
                                <a href="res1.php">
                                <i class="fas fa-check"></i>Validées</a>
                            </li>                                
                            </ul>           
                        </li>
                        
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar"></i>Evénements <span class="badge badge-success"><?= $evnt['evntnbr'] ?> </span></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="event1.php">
                                <i class="fas fa-clock"></i>Evénements en cours <?php if($nbr['nbrre']>0){echo '<span class="badge badge-primary">'.$evnt['evntnbr'].'</span>';} ?></a>
                                </li>
                                <li>
                                <a href="event0.php">
                                <i class="fas fa-archive"></i>Evénements archivés <span class="badge badge-secondary"><?= $arch['evntarch'] ?> </span></a>
                                </li>
                                <li>
                                <a href="add_event.php">
                                <i class="fas fa-plus"></i>Nouvel événement</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar"></i>Articles <span class="badge badge-primary"><?= $aposts['apost'] ?> </span></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="postdb1.php">
                                <i class="fas fa-edit"></i>Articles publiés</a>
                                </li>
                                <li>
                                    <a href="postdb0.php">
                                <i class="fas fa-folder"></i>Articles archivés</a>
                                </li>                                
                                <li>
                                <a href="add_post.php">
                                <i class="fas fa-plus"></i>Nouvel article</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
