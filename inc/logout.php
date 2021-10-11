<?php
$_SESSION['flash']['success'] = "You have logged out successfully, ".$_SESSION["username"]." ...";
unset($_SESSION["valid"]);
unset($_SESSION["username"]);
unset($_SESSION['useruuid']);
?>

<div class="fade-in">
    <h1><?php echo $ospartner; ?> <span class="pull-right">Logout</span></h1>
    <div id="alert" class="alert alert-info alert-anim"></div>

    <script>
    delay = 3;
    function loading()
    {
        if (delay == 0)
        {
            <?php echo "window.location.href='./';"; ?>
        }

        if (delay > 0)
        {
            var text;
            text  = '<i class="glyphicon glyphicon-refresh glyphicon-refresh-animate pull-right"></i>';
            text += '<strong>Logout</strong>, please wait ...';
            document.getElementById("alert").innerHTML=text;
            setTimeout('loading()', 1000);
        }
        delay--;
    }
    loading();
    </script>
</div>
