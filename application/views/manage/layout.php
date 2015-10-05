<!DOCTYPE html>
<html lang="en" class="app">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>

    <!-- Bootstrap Core CSS -->
    <link href="<? echo base_url();?>/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<? echo base_url();?>/public/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<? echo base_url();?>/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <? foreach ($_cssArr as $css) : ?>
    <link rel="stylesheet" href="<?=$css?>" type="text/css" />
    <? endforeach; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<? echo base_url();?>public/js/bootstrap.min.js"></script>

    <? foreach ($_jsArr as $js) : ?>
    <script src="<?=$js?>"></script>
    <? endforeach; ?>

<script type="text/javascript">
$(document).ready(function() {
    initGrowls();
});
function addGrowlMessage(type, message) {
    var str = '<div class="growl growl-large growl-';
    if (type == 0) {
        str += 'notice">';
    } else {
        str += 'error">';
    }

    str += '<div class="growl-close">x</div><div class="growl-title">';
    if (type == 0) {
        str += 'Success';
    } else {
        str += 'Error';
    }
    str += '</div>';

    str += '<div class="growl-message">' + message + '</div></div>';

    $('.growl').each(function() { $(this).remove(); });
    $('body').prepend(str);
    initGrowls();
}

function initGrowls() {
    $('.growl').fadeIn('slow');
    setTimeout(function() { $('.growl').fadeOut('slow', function() { $(this).remove(); }); }, 6000)

    $('.growl-close').click(function() {
        $('.growl').fadeOut('slow', function() { $(this).remove(); });
    });
}

addGrowlMessage(0, "teset");
</script>
</head>

<body>

    <div id="wrapper">

		<?php $this->load->view('manage/partials/nav')?>

        <div id="page-wrapper">

            <div class="container-fluid">

            <?php $this->load->view('manage/partials/page-heading')?>

            <section class="wrapper scrollable">
                <?=@$_body?>
            </section>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {

    $('.phone').keyup(function(e)
    {
        if ((e.keyCode > 47 && e.keyCode <58) || (e.keyCode < 106 && e.keyCode > 95))
        {
            this.value = this.value
                .match(/\d*/g).join('')
                .match(/(\d{0,3})(\d{0,3})(\d{0,4})/).slice(1).join('-')
                .replace(/-*$/g, '');
            //this.value = this.value.replace(/(\d{3})\-?/g,'$1-');
            return true;
        }
        this.value = this.value.replace(/[^\-0-9]/g,'');
        //remove all chars, except dash and digits
    });

});
</script>
