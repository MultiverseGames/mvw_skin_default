


<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie9"><![endif]-->
<head>

        <title>MVW - Multiverse Warriors</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="google-translate-customization"
        content="e4a50736d4b53e73-a10d9daa6c1919de-ge4db53a51070ea1f-1a"/>
    <meta name="description"
        content="Free Online MMORPG Game - Turn Based game where Universe's have collided into one Multiverse and now Warriors fight for domination. Will you join them?">
    <meta name="keywords"
        content="Multiverse Warriors, MVW, Stargate,Star Trek,Star Wars, Battlestar, free, online, space, game, mmorpg, free online space game mmorpg">


    <!-- loaded in the page <head> -->
<link href="../default/css/production.css" rel="stylesheet">
<script type="text/javascript" src="../default/js/countDown.js"></script>

<style>
    /* Temorary Styles to be copied to skin repository */
</style>

    <style>
        .user-side-info th {
            text-align: center;
        }

    </style>

</head>
<!-- This is the background controller-->
<body>
<div class="main-wrapper">
    <header id="header" class="tile-dark" role="navigation">
    <a href="" id="menu-toggle" class="fa fa-bars fa-2x"></a>

    <a class="logo pull-left" href="base.php">
        <img height="8px"
            src="../default/img/logo/MVWARSLOGOsm.png">
        Multiverse Warriors
    </a>

    <div class="">
        <div class="" id="top-menu">
            <div class="pull-left tm-icon">
                <a data-drawer="messages" class="drawer-toggle" href="mailbox.php">
                    <i class="fa top fa-envelope-o fa-2x"></i>
                                        <span>Messages</span>
                </a>
            </div>
            <div class="pull-left tm-icon">
                <a data-drawer="notifications" class="drawer-toggle" href="#">
                    <i class="fa top fa-exclamation fa-2x"></i>
                                        <span>Notifications</span>
                </a>
            </div>
            <div class="pull-left tm-icon">
                <a data-drawer="mvpoints" class="drawer-toggle" href="MVpoints.php">
                    <i class="fa top fa-diamond fa-2x"></i>
                    <i class="n-count animated">9,914</i>
                    <span>MV Points</span>
                </a>
            </div>

            <div class="pull-left tm-icon">
                <a title="Attempt to deposit all resources of your current attack preference type (metal)" data-toggle="tooltip" data-placement="right" href="bank2.php?deposit=true&all=true&type=metal">
                    <i class="fa top fa-money fa-2x"></i>
                </a>
            </div>

            <div id="turntime" class="pull-right">
                <span>
                    <script type="text/javascript">
                        var futuredate = new cdtime("turntime", 1432150202, 1432149664);  //future timestamp, current timestamp
                        futuredate.displaycountdown("minutes", formatresults);
                    </script>
                </span>
            </div>
            <div id="" class="time pull-right hidden-xs hidden-sm">Next Turn:
            </div>
            <div id="" class="time pull-right hidden-lg hidden-md">Turn:</div>

        </div>
    </div>
</header>
    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="user-side-info" id="usergameinfo">

    <div class="tile list-group">
        <!--        <div class="col-xs-12 tile-title ">User Stats</div>-->
        <div class="list-group-item row">
            <div class="col-xs-6">Credits</div>
            <div class="col-xs-6">1,018,649</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Metal</div>
            <div class="col-xs-6">10,174</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Food</div>
            <div class="col-xs-6">926,617</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Research</div>
            <div class="col-xs-6">724,749,697</div>
        </div>

    </div>

    <div class="tile list-group">
        <div class="list-group-item row">
            <div class="col-xs-6">Attack Turns</div>
            <div class="col-xs-6">3,050</div>
        </div>
    </div>

    <div class="tile list-group">
        <div class="list-group-item row">
            <div class="col-xs-6">Attack Power</div>
            <div class="col-xs-6">128</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Hull Power</div>
            <div class="col-xs-6">6,272</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Covert Power</div>
            <div class="col-xs-6">265,749</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Game Rank</div>
            <div class="col-xs-6">26</div>
        </div>
    </div>

    <div class="tile list-group hidden-xs hidden-sm">
        <div class="list-group-item row">
            <div class="col-xs-6">Players Active</div>
            <div class="col-xs-6">275</div>
        </div>
        <div class="list-group-item row">
            <div class="col-xs-6">Players Online</div>
            <div class="col-xs-6">1</div>
        </div>
    </div>

    </div><ul class="list-unstyled side-menu tile">
    <li class="dropdown">
        <a class="" href="base.php">
            <i class="fa fa-2x fa-home"></i>
            <span class="menu-item">Main</span>
        </a>
        <ul class="list-unstyled menu-item">
            <li>
                <a href="base.php">
                    <i class="fa fa-home"></i>
                    Command Center
                </a>
            </li>
            <li>
                <a href="logsAttack.php">
                    <i class="fa fa-crosshairs"></i>
                    Attack History
                </a>
            </li>

            <li>
                <a href="messageBoard.php">
                    <i class="fa fa-comment"></i>
                    Message Board
                </a>
            </li>
            <li>
                <a href="officers.php">
                    <i class="fa fa-bullseye"></i>
                    <span>Officers</span>
                </a>
            </li>
            <li>
                <a href="operations.php">
                    <i class="fa fa-eye"></i>
                    <span>Covert Operations</span>
                </a>
            </li>
        </ul>
    </li>


    <li class="dropdown">
        <a class="" href="account.php">
            <i class="fa fa-2x fa-cog"></i>
            <span class="menu-item">Preferences</span>
        </a>
        <ul class="list-unstyled menu-item">
            <li>
                <a href="account.php">
                    <i class="fa fa-gears"></i>
                    Account Settings
                </a>
            </li>
            <li>
                <a href="recruitment.php">
                    <i class="fa fa-chain"></i>
                    Recruitment
                </a>
            </li>
            <li>
                <a href="news.php">
                    <i class="fa fa-th-list"></i>
                    News
                </a>
            </li>
        </ul>
    </li>

    <li class="dropdown">
        <a class="" href="help.php">
            <i class="fa fa-2x fa-question fa-inverse"></i>
            <span class="menu-item">Help</span>
        </a>
        <ul class="list-unstyled menu-item">
            <li>
                <a href="help.php" target="_blank">
                    <i class="fa fa-question-circle"></i>
                    Player Guide
                </a>
            </li>
            <li>
                <a href="./forums" target="_blank">
                    <i class="fa fa-meh-o"></i>
                    Forums
                </a>
            </li>
            <li>
                <a href="team.php" target="_blank">
                    <i class="fa fa-puzzle-piece"></i>
                    Team
                </a>
            </li>
            <li>
                <a href="updates.php" target="_blank">
                    <i class="fa fa-rocket"></i>
                    Updates
                </a>
            </li>
            <li class="hidden-xs hidden-sm ">
                <a href="http://www.multiversewarriors.com/forums/chat/"
                    target="_blank">
                    <i class="fa fa-comment"></i>
                    Chat
                </a>
            </li>
            <li></li>
        </ul>
    </li>

    <li>
        <a class="" href="index.php">
            <i class="fa fa-2x fa-sign-out"></i>
            <span class="menu-item">
                <i class="fa fa-sign-out"></i>
                Sign Out
            </span>
        </a>
    </li>
</ul>
    </aside>

    <!-- Content -->
    <section id="content" class="container-fluid main-content row no-gutter">
        <div class="col-xs-12">
            <div id="messages" class="tile drawer">
    <div class="listview narrow">
        <div class="overflow" style="height: 254px">
            <div class="media">
                <div class="media-body">
                    <table class="table table-bordered table-hover tile">
                        <thead>
                            <tr>
                                <th>Opened</th>
                                <th>Subject</th>
                                <th>From</th>
                                <th class="hidden-sm hidden-xs">To</th>
                                <th class="hidden-sm hidden-xs">Time Received</th>
                            </tr>
                        </thead>
                                                    <tr>
                                <td><i class="fa fa-envelope-o"></i> </td>
                                <td>
                                    <a href="mailview.php?id=2281">War has been declared!</a>
                                </td>
                                <td>
                                    <a href="player.php?id=285">Bawnie</a>
                                </td>
                                <td class="hidden-sm hidden-xs">
                                    <a
                                        href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">5/5 2:53 am</td>
                            </tr>
                                                    <tr>
                                <td><i class="fa fa-envelope-o"></i> </td>
                                <td>
                                    <a href="mailview.php?id=2278">War has been declared!</a>
                                </td>
                                <td>
                                    <a href="player.php?id=39">Game Admin</a>
                                </td>
                                <td class="hidden-sm hidden-xs">
                                    <a
                                        href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">5/5 2:48 am</td>
                            </tr>
                                                    <tr>
                                <td><i class="fa fa-envelope-o"></i> </td>
                                <td>
                                    <a href="mailview.php?id=2203">Peace has been declared!</a>
                                </td>
                                <td>
                                    <a href="player.php?id=355">Demalco</a>
                                </td>
                                <td class="hidden-sm hidden-xs">
                                    <a
                                        href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">4/23 7:18 am</td>
                            </tr>
                                                    <tr>
                                <td><i class="fa fa-envelope-o"></i> </td>
                                <td>
                                    <a href="mailview.php?id=1763">Welcome and Thanks for Joining!</a>
                                </td>
                                <td>
                                    <a href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">
                                    <a
                                        href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">3/22 5:52 pm</td>
                            </tr>
                                                    <tr>
                                <td><i class="fa fa-envelope-o"></i> </td>
                                <td>
                                    <a href="mailview.php?id=1695">Welcome and Thanks for Joining!</a>
                                </td>
                                <td>
                                    <a href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">
                                    <a
                                        href="player.php?id=323">Rather Long Username</a>
                                </td>
                                <td class="hidden-sm hidden-xs">3/17 12:21 pm</td>
                            </tr>
                                                
                    </table>
                </div>
            </div>

        </div>
        <div class="media text-center whiter l-100">
            <div class="btn-group btn-group-justified" id="viewallmail">
                <a href="mailbox.php" class="btn btn-sm btn-alt">
                    <small>VIEW ALL MAIL</small>
                </a>
            </div>
        </div>
    </div>
</div><div id="notifications" class="tile drawer">
    <div>
        <a href="notifications.php?action=allviewed" class="btn btn-block btn-alt">
            <small>Mark All As Viewed</small>
        </a>
    </div>
    <div class="overflow list-group" style="height: 254px">
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/17 11:15 pm</span>
                <a href="notifications.php?id=1564&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>Your espionage operation against Thrans has been <strong>deceived</strong>. You have lost 9190 intel points
                </p>
            </div>
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/17 11:15 pm</span>
                <a href="notifications.php?id=1563&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>Your espionage operation against Thrans has been <strong>expelled.</strong> 1870 of your spies have returned home
                </p>
            </div>
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/17 10:17 am</span>
                <a href="notifications.php?id=1530&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>Your espionage operation against Game Admin has been <strong>expelled.</strong> 525 of your spies have returned home
                </p>
            </div>
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/15 4:00 am</span>
                <a href="notifications.php?id=1397&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>Your espionage operation against Game Admin has been <strong>deceived</strong>. You have lost 2800 intel points
                </p>
            </div>
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/14 8:12 am</span>
                <a href="notifications.php?id=1225&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>Your espionage operation against Game Admin has been <strong>expelled.</strong> 0 of your spies have returned home
                </p>
            </div>
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/14 12:10 am</span>
                <a href="notifications.php?id=911&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>You have been attacked by Thrans!
                </p>
            </div>
                    <div class="list-group-item ">
                <span class="badge badge-trp">5/13 7:51 am</span>
                <a href="notifications.php?id=884&action=viewed" class="badge tooltips" data-toggle="tooltip" data-placement="auto" title="Mark as viewed">
                    <i class="fa fa-circle"></i>
                </a>

                <p>Your espionage operation against Game Admin has been <strong>expelled.</strong> 1000 of your spies have returned home
                </p>
            </div>
            </div>
</div><div id="mvpoints" class="tile drawer">
    <div class="listview narrow">
        <div class="overflow" style="height: 254px">
            <div class="media">
                <div class="media-body">
                    <p>You currently have 60                       Multiverse Points available to you. MV points are earned daily by logging into the game
                       or
                       large amounts are awarded to donators, and can be used for a number of different
                       functions. </p>

                    <p>You can earn protection, boost income, boost Attack power, Hull and shields.</p>

                    <p>Multiverse Points can also be claimed by completing the Tutorial, and by actively
                        <a
                            href="recruitment.php">recruiting players
                        </a>
                       to join the game.
                    </p>

                </div>
            </div>
        </div>
        <div class="media text-center whiter l-100">
            <div class="btn-group btn-group-justified" id="viewallmvpoints">
                <a href="MVbuy.php" class="btn btn-sm btn-alt">
                    <small>PURCHASE POINTS</small>
                </a>
                <a href="MVpoints.php" class="btn btn-sm btn-alt">
                    <small>VIEW ALL UPGRADES</small>
                </a>
            </div>
        </div>
    </div>
</div>        </div>

        <div class="col-xs-12 row no-gutter">
            <div class="col-lg-offset-1 col-lg-8">
                <nav class="btn-group-justified btn-group btn-group-sm tile" role="group"><!-- btn-group-justified-->
            <a class="btn btn-alt" href="tutorial.php">
            <i class="fa fa-book"></i>
            <span>Tutorial</span>
        </a>
        <a class="btn btn-alt" href="base.php">
        <i class="fa fa-home"></i>
        <span>Base</span>
    </a>
    <a class="btn btn-alt" href="universe.php">
        <i class="fa fa-crosshairs"></i>
        <span>Universe</span>
    </a>

    <a class="btn btn-alt" href="population.php">
        <i class="fa fa-users"></i>
        <span>Population</span>
    </a>
    <a class="btn btn-alt" href="weapons.php">
        <i class="fa fa-fighter-jet"></i>
        <span>Ships</span>
    </a>
    <a class="btn btn-alt" href="research.php">
        <i class="fa fa-lightbulb-o"></i>
        <span>Research</span>
    </a>
    <a class="btn btn-alt" href="bank.php">
        <i class="fa fa-money"></i>
        <span>Bank</span>
    </a>
</nav>            </div>
        </div>

        <!--        <div class="row">-->
        <div class="col-xs-12 row no-gutter">
            
            <div class="col-lg-10 col-lg-offset-1">

    <div class="" role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="operations.php">
                    Operations
                </a>
            </li>
            <li role="presentation">
                <a href="detected.php">
                    Detected
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active row" id="operations">
                <h2 class="page-title">Your Current Operations
                    <em>
                        (15 / 20                        )
                    </em>
                    <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right"
                        title="Operations with no units deployed will degrade quickly and do not count towards your limit."></i>
                </h2>
                <div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">100                %
            </i>
            <a href="player.php?id=285">
                Bawnie            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">698,929                    / 35,535                    <em>
                        (&nbsp;1,675&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="59" type="hidden"/>
                <input name="target" value="285" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="59_spies">
                        Spies (
                        <strong>1,050</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="59_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=285">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">100                %
            </i>
            <a href="player.php?id=111">
                JellehFish            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">1,403,600                    / 570,701                    <em>
                        (&nbsp;1,595&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="45" type="hidden"/>
                <input name="target" value="111" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="45_spies">
                        Spies (
                        <strong>1,000</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="45_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=111">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">53                %
            </i>
            <a href="player.php?id=206">
                Galebrie Arrow            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">70,180                    / 132,547                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="47" type="hidden"/>
                <input name="target" value="206" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="47_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="47_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width: 53%">
                        <span class="sr-only">53                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=206">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-md visible-lg"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">20                %
            </i>
            <a href="player.php?id=3">
                CJL            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 73,165                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="72" type="hidden"/>
                <input name="target" value="3" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="72_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="72_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=3">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">76                %
            </i>
            <a href="player.php?id=4">
                Torvon            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">29,508                    / 38,955                    <em>
                        (&nbsp;160&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="73" type="hidden"/>
                <input name="target" value="4" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="73_spies">
                        Spies (
                        <strong>100</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="73_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                        <span class="sr-only">76                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=4">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">38                %
            </i>
            <a href="player.php?id=48">
                stefy2069            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 38,851                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="75" type="hidden"/>
                <input name="target" value="48" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="75_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="75_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        <span class="sr-only">38                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=48">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="clearfix visible-md visible-lg"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">36                %
            </i>
            <a href="player.php?id=66">
                Jazzy            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 41,158                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="76" type="hidden"/>
                <input name="target" value="66" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="76_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="76_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%">
                        <span class="sr-only">36                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=66">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">38                %
            </i>
            <a href="player.php?id=23">
                AmazingMonkey0            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 38,784                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="77" type="hidden"/>
                <input name="target" value="23" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="77_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="77_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        <span class="sr-only">38                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=23">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">33                %
            </i>
            <a href="player.php?id=29">
                oridude            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 44,045                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="79" type="hidden"/>
                <input name="target" value="29" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="79_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="79_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                        <span class="sr-only">33                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=29">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-md visible-lg"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">38                %
            </i>
            <a href="player.php?id=7">
                Gala0111            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 38,349                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="81" type="hidden"/>
                <input name="target" value="7" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="81_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="81_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        <span class="sr-only">38                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=7">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">38                %
            </i>
            <a href="player.php?id=15">
                lucifer1101            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 38,344                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="83" type="hidden"/>
                <input name="target" value="15" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="83_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="83_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        <span class="sr-only">38                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=15">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">12                %
            </i>
            <a href="player.php?id=149">
                Darksiider            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 124,767                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="84" type="hidden"/>
                <input name="target" value="149" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="84_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="84_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                        <span class="sr-only">12                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=149">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="clearfix visible-md visible-lg"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">38                %
            </i>
            <a href="player.php?id=82">
                Rifle            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 38,641                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="85" type="hidden"/>
                <input name="target" value="82" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="85_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="85_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                        <span class="sr-only">38                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=82">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">9                %
            </i>
            <a href="player.php?id=173">
                BloodyLttleVampire            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">14,754                    / 167,055                    <em>
                        (&nbsp;80&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="86" type="hidden"/>
                <input name="target" value="173" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="86_spies">
                        Spies (
                        <strong>50</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="86_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%">
                        <span class="sr-only">9                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=173">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-sm"></div><div class="col-sm-6 col-md-4">
<div class="panel panel-default tile covert-operation-panel">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="badge pull-right">hidden</span>
            <i class="badge pull-right tooltips" data-toggle="tooltip" data-placement="right"
                title="The completeness of your knowledge on this empire.">100                %
            </i>
            <a href="player.php?id=80">
                Thrans            </a>
        </h3>
    </div>
    <div class="panel-body row">
        <div class="col-lg-12">
            <div>
                <div class="col-lg-3">
                    <strong>Points</strong>
                </div>
                <div class="col-lg-9">609,944                    / 229,962                    <em>
                        (&nbsp;4,785&nbsp;)                    </em>
                    <i class="fa fa-question-circle tooltips"
                        data-toggle="tooltip" data-placement="auto"
                        title="How many intel points you have / amount needed for 100% (the expected gain next turn)">
                    </i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h6 class="block-title">Manage Spies</h6>

            <form class="" action="operations.php" method="POST">
                <input name="id" value="88" type="hidden"/>
                <input name="target" value="80" type="hidden"/>
                <div class="form-group">
                    <i class="fa fa-question-circle tooltips pull-right"
                        data-toggle="tooltip" data-placement="auto"
                        title="Deploying agents costs 10 food per spy"></i>
                    <label for="88_spies">
                        Spies (
                        <strong>3,000</strong>
                        Deployed &
                        <strong>10,225</strong>
                        Available)
                    </label>
                    <input class="form-control" id="88_spies" name="spies" type="text" value=""/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="recall">
                                Recall
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-block" name="action" value="deploy">
                                Deploy
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="p-relative">
                <div class="progress progress-underlay progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100                            % Complete
                        </span>
                    </div>
                </div>
                <a class="btn btn-block btn-alt" href="report.php?target=80">
                    View Intel
                </a>
            </div>
        </div>

    </div>
</div>

</div><div class="clearfix visible-md visible-lg"></div>            </div>
        </div>
    </div>
</div></div>
</section>
<footer class="page-footer" id="outsidelinks">
    <strong>
        <a href="stats.php">Game Statistics</a>
        |
        <a href="help.php">Guide</a>
        |
        <a href="/forums">Forums</a>
        |
        <a href="updates.php">Updates</a>
        |
        <a href="team.php">The Team &amp; Contact</a>
        |
        <a href="tos.php">Terms of Service &amp; Privacy</a>
        |
        <a class="fa fa-facebook-square"
            href="https://www.facebook.com/multiversewarriors"></a>
        |
        <a class="fa fa-twitter-square"
            href="https://www.twitter.com/multiversegames"></a>
    </strong>
    <br>

    <sup>Brought to you by
        <img height="8px"
            src="../default/img/logo/MVWARSLOGOsm.png">
        MultiVerse Games Ltd. Version 3.5.4        <br>
        <strong>Server Time</strong>
        : 20th of May 2015 12:21:04 PM<!--        Generated in: --><!-- seconds-->
    </sup>
<!--    <br>-->
<!--    <sup>A quick note on cookies, our site uses them to determine if you are-->
<!--        logged in or not, and to track usage within-->
<!--        our game. For these purposes only. We respect your privacy-->
<!--        <br>-->
<!---->
<!--    </sup>-->

</footer>
</div> <!-- closing container -->
</body>
</html>
<!-- loaded at the end of the page -->
<script src="../default/js/production.js"></script>

<script>
    $(function () {
        var settings = {
            startup: 'launcher',
            debug: true
        };

        dmf.activate(settings);

        $("#header").sticky({topSpacing: 0});
    });
</script>
