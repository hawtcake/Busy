<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/css/master.css" rel="stylesheet" type="text/css">
    <link href="/css/fonts.css" rel="stylesheet" type="text/css">
    <link href="/css/flag-icon.css" rel="stylesheet" type="text/css">
    <link href="/css/grid.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <aside>
        <div class="diamond-wrapper"><div class="diamond"></div></div>
        <div id="logo"><h1>BUSY</h1></div>
      <nav>
        <ul>
          <a id="dashboard"  href="/dashboard"><li <?php if(URL == 'dashboard')  { echo 'class="active"'; } ?>><i class="icon-dashboard"></i><span>Dashboard</span></li></a>
          <a id="dashboard"  href="/companies"><li <?php if(URL == 'companies')  { echo 'class="active"'; } ?>><i class="icon-work"></i><span>Companies</span></li></a>
          <a id="activities" href="/activities"><li <?php if(URL == 'activities') { echo 'class="active"'; } ?>><i class="icon-assignment"></i><span>Activities</span></li></a>
          <a id="sales"      href="/sales"><li <?php if(URL == 'sales')      { echo 'class="active"'; } ?>><i class="icon-attach_money"></i><span>Sales</span></li></a>
          <a id="settings"   href="/settings"><li <?php if(URL == 'settings')   { echo 'class="active"'; } ?>><i class="icon-tune"></i><span>Settings</span></li></a>
        </ul>
      </nav>
    </aside>
