<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Telkom</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>../assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>../assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>../assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>../assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>../assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>../assets/js/jquery.min.js"></script>

  <?php if (isset($css)):
        foreach ($css as $key) {?>
            <link href="<?php echo base_url(); ?>..assets/css/<?php echo $key;?>" rel="stylesheet">
        <?php }
    endif; ?>

    <?php if (isset($icss)) {
        foreach ($icss as $key) {?>
            <link href="<?php echo base_url(); ?>..assets/css/<?php echo $key;?>" rel="stylesheet">
        <?php }
    } ?>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
