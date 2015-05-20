<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie9"><![endif]-->

<head>
    <title>MVW - Multiverse Test Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="google-translate-customization" content="e4a50736d4b53e73-a10d9daa6c1919de-ge4db53a51070ea1f-1a" />
    <meta name="description" content="Free Online MMORPG Game - Turn Based game where Universe's have collided into one Multiverse and now Warriors fight for domination. Will you join them?">
    <meta name="keywords" content="Multiverse Warriors, MVW, Stargate,Star Trek,Star Wars, Battlestar, free, online, space, game, mmorpg, free online space game mmorpg">
    <!-- loaded in the page <head> -->
    <link href="../default/css/production.css" rel="stylesheet">
    <script type="text/javascript" src="../default/js/countDown.js"></script>
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
                <img height="8px" src="..//default/img/logo/MVWARSLOGOsm.png"> Multiverse Test Page
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
                            <i class="n-count animated">9,913</i>
                            <span>MV Points</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a title="Attempt to deposit all resources of your current attack preference type (all)" data-toggle="tooltip" data-placement="right" href="bank2.php?deposit=true&all=true&type=all">
                            <i class="fa top fa-money fa-2x"></i>
                        </a>
                    </div>
                    <div id="turntime" class="pull-right">
                        <span>
                    <script type="text/javascript">
                        var futuredate = new cdtime("turntime", 1432071001, 1432069619);  //future timestamp, current timestamp
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
                        <div class="col-xs-6">434,448</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Metal</div>
                        <div class="col-xs-6">39,203</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Food</div>
                        <div class="col-xs-6">427,326</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Research</div>
                        <div class="col-xs-6">1,461,147,457</div>
                    </div>
                </div>
                <div class="tile list-group">
                    <div class="list-group-item row">
                        <div class="col-xs-6">Attack Turns</div>
                        <div class="col-xs-6">2,976</div>
                    </div>
                </div>
                <div class="tile list-group">
                    <div class="list-group-item row">
                        <div class="col-xs-6">Attack Power</div>
                        <div class="col-xs-6">0</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Hull Power</div>
                        <div class="col-xs-6">0</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Covert Power</div>
                        <div class="col-xs-6">0</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Game Rank</div>
                        <div class="col-xs-6">268</div>
                    </div>
                </div>
                <div class="tile list-group hidden-xs hidden-sm">
                    <div class="list-group-item row">
                        <div class="col-xs-6">Players Active</div>
                        <div class="col-xs-6">277</div>
                    </div>
                    <div class="list-group-item row">
                        <div class="col-xs-6">Players Online</div>
                        <div class="col-xs-6">4</div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled side-menu tile">
                <li class="dropdown">
                    <a class="" href="base.php">
                        <i class="fa fa-2x fa-home"></i>
                        <span class="menu-item">Main</span>
                    </a>
                    <ul class="list-unstyled menu-item">
                        <li>
                            <a href="base.php">
                                <i class="fa fa-home"></i> Command Center
                            </a>
                        </li>
                        <li>
                            <a href="logsAttack.php">
                                <i class="fa fa-crosshairs"></i> Attack History
                            </a>
                        </li>
                        <li>
                            <a href="messageBoard.php">
                                <i class="fa fa-comment"></i> Message Board
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
                                <i class="fa fa-gears"></i> Account Settings
                            </a>
                        </li>
                        <li>
                            <a href="recruitment.php">
                                <i class="fa fa-chain"></i> Recruitment
                            </a>
                        </li>
                        <li>
                            <a href="news.php">
                                <i class="fa fa-th-list"></i> News
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
                                <i class="fa fa-question-circle"></i> Player Guide
                            </a>
                        </li>
                        <li>
                            <a href="./forums" target="_blank">
                                <i class="fa fa-meh-o"></i> Forums
                            </a>
                        </li>
                        <li>
                            <a href="team.php" target="_blank">
                                <i class="fa fa-puzzle-piece"></i> Team
                            </a>
                        </li>
                        <li>
                            <a href="updates.php" target="_blank">
                                <i class="fa fa-rocket"></i> Updates
                            </a>
                        </li>
                        <li class="hidden-xs hidden-sm ">
                            <a href="http://www.multiversewarriors.com/forums/chat/" target="_blank">
                                <i class="fa fa-comment"></i> Chat
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
                                                <a href="mailview.php?id=1763">Welcome and Thanks for Joining!</a>
                                            </td>
                                            <td>
                                                <a href="player.php?id=0">Rather Long Username</a>
                                            </td>
                                            <td class="hidden-sm hidden-xs">
                                                <a href="player.php?id=0">Rather Long Username</a>
                                            </td>
                                            <td class="hidden-sm hidden-xs">3/22 5:52 pm</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-envelope-o"></i> </td>
                                            <td>
                                                <a href="mailview.php?id=1695">Welcome and Thanks for Joining!</a>
                                            </td>
                                            <td>
                                                <a href="player.php?id=0">Rather Long Username</a>
                                            </td>
                                            <td class="hidden-sm hidden-xs">
                                                <a href="player.php?id=0">Rather Long Username</a>
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
                </div>
                <div id="notifications" class="tile drawer">
                    <div>
                        <a href="notifications.php?action=allviewed" class="btn btn-block btn-alt">
                            <small>Mark All As Viewed</small>
                        </a>
                    </div>
                    <div class="overflow list-group" style="height: 254px">
                    </div>
                </div>
                <div id="mvpoints" class="tile drawer">
                    <div class="listview narrow">
                        <div class="overflow" style="height: 254px">
                            <div class="media">
                                <div class="media-body">
                                    <p>You currently have 59 Multiverse Points available to you. MV points are earned daily by logging into the game or large amounts are awarded to donators, and can be used for a number of different functions. </p>
                                    <p>You can earn protection, boost income, boost Attack power, Hull and shields.</p>
                                    <p>Multiverse Points can also be claimed by completing the Tutorial, and by actively
                                        <a href="recruitment.php">recruiting players
                        </a> to join the game.
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
                </div>
            </div>
            <div class="col-xs-12 row no-gutter">
                <div class="col-lg-offset-1 col-lg-8">
                    <nav class="btn-group-justified btn-group btn-group-sm tile" role="group">
                        <!-- btn-group-justified-->
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
                    </nav>
                </div>
            </div>
            <!--        <div class="row">-->
            <div class="col-xs-12 row no-gutter">
                <!-- Left + Middle Column - 3 columns will collapse into 2 columns before dropping to 1-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <!-- Left Column -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="panel panel-default tile" id="resources">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>Resources</strong>
        </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered ">
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th>On Hand</th>
                                            <th>Bank</th>
                                            <th>Income</th>
                                        </tr>
                                        <tr>
                                            <th>Research</th>
                                            <td>1,461,147,457</td>
                                            <td>- -</td>
                                            <td>868,896</td>
                                        </tr>
                                        <tr>
                                            <th>Metal</th>
                                            <td>39,203</td>
                                            <td>12,000</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>Food</th>
                                            <td>427,326</td>
                                            <td>512,000</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>Credits</th>
                                            <td>434,448</td>
                                            <td>197,961,499</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default tile" id="upkeep">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>Upkeep</strong>
            <span class="fa fa-question-circle tooltips"
                data-toggle="tooltip"
                data-placement="right"
                title="Always make sure you can afford your upkeep, or else ships may start to disappear! You require
                    0 less                  Farmers to maintain the current upkeep"></span>

            <i class="fa fa-check pull-right success"></i>        </h3>
                            </div>
                            <div class="panel-body">
                                <p>Your empire is producing
                                    <strong>0 </strong> food
                                </p>
                                <p>Your fleet is consuming
                                    <strong>
                0            </strong> food
                                </p>
                                <hr/>
                                <p>
                                    You are losing <strong class="danger">0</strong> food per turn. Your supply will be depleted in <strong>0</strong> turns
                                    <p><small class="pull-right">Once depleted, food will be consumed from your bank at <strong>5.00x</strong> the rate</small></p>
                                </p>
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="panel panel-default tile">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>Additional Protection</strong>
        </h3>
                            </div>
                            <div class="panel-body">
                                <form action="base2.php" method="post">
                                    <div class="form-group">
                                        <label for="level">Alert Level <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="Modifying your alert level reduces your income, protects you from enemy spies, and improves your efficiency when consuming food from the bank."></i></label>
                                        <select class="form-control input-group" id="level" name="level">
                                            <option value="0" selected>None
                                            </option>
                                            <option value="10">Low
                                            </option>
                                            <option value="20">Medium
                                            </option>
                                            <option value="40">High
                                            </option>
                                            <option value="70">Critical
                                            </option>
                                        </select>
                                    </div>
                                    <button class="btn btn-block" type="submit" name="updateAlertLevel" value="Update">Update
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-default tile" id="officersbase">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>
                <a href="officers.php">Officer Overview</a>
            </strong>
        </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="|Can players can make you their commander"></i> Accepting Officers
                                            </td>
                                            <td><strong class="success">Yes</strong> <a href="officers.php">(change)</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="The number of officers you currently have. (Does not include yourself)"></i> Officer Count
                                            </td>
                                            <td>0 / 10 slots
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Middle Column -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="panel panel-default tile">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>User Info</strong>
        </h3>
                            </div>
                            <div class="panel-body">
                                <div class="alert alert-info" id="protection">Protection Time:
                                    <div id="protectiontime"></div>
                                    <script type="text/javascript">
                                    var futuredate = new cdtime("protectiontime", 1927066046, 1432069619) //future timestamp, current timestamp
                                    futuredate.displaycountdown("days", formatresults)
                                    </script>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>
                                                <a href="player.php?id=0">Rather Long Username</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Commander</td>
                                            <td>None</td>
                                        </tr>
                                        <tr>
                                            <td>Race</td>
                                            <td>Wraith</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="Each level increases income by 1% for credits, food, metal, and research production."></i> Superpower Level
                                            </td>
                                            <td>5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="Each level doubles your covert power."></i> Covert Level
                                            </td>
                                            <td>3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="Each level increases your research by 20%."></i> Research Level
                                            </td>
                                            <td>0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="Popuation Growth (PG) - Base PG + Bonus PG from officers.
                                0 + 0 = 0"></i> Population Growth
                                            </td>
                                            <td>0 / day </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default tile">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <a href="messageBoard.php"><strong>Latest Discussion</strong></a>
        </h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group" id="thread-list">
                                    <a class="list-group-item " href="messageBoard.php?action=view&thread=23">
                                        <span class="badge badge-trp">1</span>
                                        <span>New Covert System Questions
                        <br/>
                        <small>Last post
                            by Rather Long Username                            at 12:51 pm                        </small>

                    </span>
                                        <!--                                        <a href="http://multiversecreation.com/player.php?id=-->
                                        <!--                    -->
                                        <!--">-->
                                        <!--                                            -->
                                        <!--                                        </a>-->
                                    </a>
                                    <a class="list-group-item " href="messageBoard.php?action=view&thread=22">
                                        <span class="badge badge-trp">2</span>
                                        <span>Development Server is open again
                        <br/>
                        <small>Last post
                            by Thrans                            on 5/1 5:53 am                        </small>

                    </span>
                                        <!--                                        <a href="http://multiversecreation.com/player.php?id=-->
                                        <!--                    -->
                                        <!--">-->
                                        <!--                                            -->
                                        <!--                                        </a>-->
                                    </a>
                                    <a class="list-group-item " href="messageBoard.php?action=view&thread=19">
                                        <span class="badge badge-trp">19</span>
                                        <span>Happens. Every. Time.
                        <br/>
                        <small>Last post
                            by Thrans                            on 4/21 3:31 am                        </small>

                    </span>
                                        <!--                                        <a href="http://multiversecreation.com/player.php?id=-->
                                        <!--                    -->
                                        <!--">-->
                                        <!--                                            -->
                                        <!--                                        </a>-->
                                    </a>
                                    <a class="list-group-item " href="messageBoard.php?action=view&thread=20">
                                        <span class="badge badge-trp">6</span>
                                        <span>Daisy Chain with me!
                        <br/>
                        <small>Last post
                            by Thrans                            on 4/17 1:12 am                        </small>

                    </span>
                                        <!--                                        <a href="http://multiversecreation.com/player.php?id=-->
                                        <!--                    -->
                                        <!--">-->
                                        <!--                                            -->
                                        <!--                                        </a>-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default tile" id="basepopulation">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>Population Summary</strong>
        </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="This unit produces Research each turn"></i> Scientists
                                            </td>
                                            <td>20,688</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="This unit produces Metal each turn"></i> Miners
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="This unit produces Food each turn"></i> Farmers
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="This unit relates to your Covert Power"></i> Covert Operatives
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="This unit produces Credits each turn"></i> Banker
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="right" title="This unit can be trained into any other unit and also produces limited credits each turn"></i> Untrained Units
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Total Population</td>
                                            <td>20,688</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <div id="baserealmpower">
                        <h3 class="block-title">Realm Power & Rank</h3>
                        <table class="table tile">
                            <tbody>
                                <tr>
                                    <td>Offensive Power</td>
                                    <td>0</td>
                                    <td>Rank: 249</td>
                                </tr>
                                <tr>
                                    <td>Hull Power</td>
                                    <td>0</td>
                                    <td>Rank: 249</td>
                                </tr>
                                <tr>
                                    <td>Covert Power</td>
                                    <td>0</td>
                                    <td>Rank: 277</td>
                                </tr>
                                <tr>
                                    <td>Overall</td>
                                    <td>---</td>
                                    <td>Rank: 268</td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="text-center">Experimental Ratings
                                        <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="auto" title="These ratings are in development for a future update. They are visible only to gather feedback and can otherwise be ignored."> </i>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="auto" title="Combined credit cost of owned ships / cost of cheapest ship"></i> Fleet Rating
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="auto" title="((miners+bankers+farmers)*2 +untrained)/10"></i> Economic Rating
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="auto" title="Sum of research levels * 100."></i> Technology Rating
                                    </td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-question-circle tooltips" data-toggle="tooltip" data-placement="auto" title="(fleet rating + economic rating + tech rating)^0.35"></i> Player Level
                                    </td>
                                    <td>7.36</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="baseships">
                        <h3 class="block-title">Ships</h3>
                        <div class="panel panel-default tile-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                            <strong>Ship Exploration</strong>
                        </h3>
                            </div>
                            <div class="panel-body">
                                <div class="btn-group btn-group-justified" id="weaponexploration">
                                    <a href="weaponsMission.php" class="btn btn-sm btn-alt">
                                        <strong>Launch Exploration Mission</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default tile">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                        <strong>Current Fleet</strong>
                    </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table tile-light">
                                    <tbody>
                                        <tr>
                                            <th>Tier</th>
                                            <th>Class</th>
                                            <th>Quantity</th>
                                        </tr>
                                        <tr>
                                            <td>No ships</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="panel panel-default tile" id="repairshop">
                            <div class="panel-heading">
                                <h3 class="panel-title">
            <strong>Repair Shop</strong>
            <i class="fa fa-question-circle tooltips"
                data-toggle="tooltip"
                data-placement="right"
                title="Some ships that are destroyed in battle make it back to your repair shop. Once here you are able to repair them yourself with just bits metal. After repaired they are put back into active service!"></i>
        </h3>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table tile-light">
                                    <thead>
                                        <tr>
                                            <td>Your repair shop is empty, that's good!</td>
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            src="..//default/img/logo/MVWARSLOGOsm.png">
        MultiVerse Games Ltd. Version 3.6.0        <br>
        <strong>Server Time</strong>
        : 19th of May 2015 02:06:59 PM<!--        Generated in: --><!-- seconds-->
    </sup>
            <!--    <br>-->
            <!--    <sup>A quick note on cookies, our site uses them to determine if you are-->
            <!--        logged in or not, and to track usage within-->
            <!--        our game. For these purposes only. We respect your privacy-->
            <!--        <br>-->
            <!---->
            <!--    </sup>-->
        </footer>
    </div>
    <!-- closing container -->
</body>

</html>
<!-- loaded at the end of the page -->
<script src="../default/js/production.js"></script>
<script>
$(function() {
    var settings = {
        startup: 'launcher',
        debug: true
    };

    dmf.activate(settings);

    $("#header").sticky({
        topSpacing: 0
    });
});
</script>
