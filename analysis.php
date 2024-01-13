<!DOCTYPE html>
<?php include('lib/connect.php'); ?>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>


        <section class="layout-container ">

            <div class="default-header">
                <div class="wrapper">
                    <div class="container">
                        <div class="title  text-center">วิเเคราะห์โรค</div>
                        <div class="text-center txt-desc" style="color: white;line-height: 1.5rem;"></div>
                    </div>
                </div>
                <figure class="cover">
                    <img class="img-cover" src="<?php echo $core_template; ?>assets/img/background/bg-home.png"  alt="bg-home">
                </figure>

            </div>

            <div class="student-page" style="margin: 6rem 0;">
            <div class="information-system">
                    <div class="container-xl">
                        
                    </div>
                </div>

            </div>

        </section>


        <?php include('inc/footer.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>