<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">

        <title>TurnKey Community - Request Tracker 4.0</title>
        
        <link rel="stylesheet" href="css/ui.tabs.css" type="text/css" media="print, projection, screen">
        <link rel="stylesheet" href="css/base.css" type="text/css">

        <script src="js/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="js/ui.core.js" type="text/javascript"></script>
        <script src="js/ui.tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#container-1 > ul').tabs({ fx: { opacity: 'toggle'} });
            });
        </script>
    </head>

    <body>
        <h1>TurnKey Request Tracker 4.0</h1>
        
        <div id="container-1">
            <ul>
                <li><a href="#cp"><span>Control Panel</span></a></li>
            </ul>

            <div id="cp">
                <div class="fragment-content">
                    <div>
                        <a href="http://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>/rt"><img
                        src="images/shell.png"/>Request Tracker 4.0</a>
                    </div>                    
                    <div>
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12320"><img
                        src="images/shell.png"/>Web Shell</a>
                    </div>
                    <div>
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12321"><img
                        src="images/webmin.png"/>Webmin</a>
                    </div>
                    <div>
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12322"><img
                        src="images/phppgadmin.png"/>PHPPgAdmin</a>
                    </div>
                    <div></div>

                    <h2>Resources and references</h2>
                    <ul>
                        <li>
                          <a href="https://github.com/DocCyblade/TKL-RT40/wiki/TKL_RT40_Release_Notes">
                           Turn Key Community - Request Tracker 4.0 Release Notes
                          </a>
                        </li>
 
                        <li>
                          <a href="http://bestpractical.com/docs/rt/4.0/">
                            RT: Request Tracker 4.0 Docs 
                          </a>
                        </li>

                       <li>
                          <a href="/phpinfo.php">Apache PHP information</a>
                          (to disable: rm /var/www/phpinfo.php)
                        </li>
                        <li>
                          <a href="/server-status">Apache server status</a>
                          (to disable: a2dismod status)
                        </li>
 
                   </ul>

                </div>
            </div>

        </div>
    </body>
</html>
