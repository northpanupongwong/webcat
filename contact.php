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
                        <div class="title  text-center">Web development Pet Tracking</div>
                        <div class="text-center txt-desc" style="color: white;line-height: 1.5rem;">สำหรับผู้เลี้ยงสุนัขและแมวมือใหม่ที่คิดจะเลี้ยงสุนัขและแมว อาจจะไม่สามารถแยกสายพันธุ์ของสุนัขและแมวได้ 
                        ไม่ทราบปัญหาเกี่ยวกับวิธีการเลี้ยงดูของสัตว์เลี้ยง และนิสัยของสุนัขและแมวแต่ละสายพันธุ์ ทำให้เกิดปัญหามากมายเกี่ยวกับสุขภาพของสุนัขและแมว 
                        ทำให้สุนัขและแมวมีอายุที่สั้นลงหรือถูกเลี้ยงแบบผิดวิธี ดังนั้นจึงพัฒนาเว็บแอปพลิเคชันเพื่อรวบรวมข้อมูลการเลี้ยงสุนัขและแมวและการให้คำแนะนำเกี่ยวกับอาการของสุนัขและแมว 
                        และประเมินอาการเบื้องต้นเมื่อสุนัขและแมวมีอาการผิดปกติ เพื่อที่จะได้รับการดูแลที่ถูกวิธีและทำให้สุนัขและแมวมีอายุที่ยืนยาวมากขึ้น รวมทั้งสามารถหาคลินิครักษาสัตว์ ร้านอาหารที่ใกล้บ้าน 
                        และสามารถตามหาสุนัขและแมวในกรณีสูญหายได้</div>
                    </div>
                </div>
                <figure class="cover">
                    <img class="img-cover" src="<?php echo $core_template; ?>assets/img/background/bg-home.png"  alt="bg-home">
                </figure>

            </div>

            <div class="student-page" style="margin: 6rem 0;">
            <div class="information-system">
                    <div class="container-xl">
                        <div class="card-block">
                            <div class="row g-lg-4 g-3">
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="wrapper" style="border-radius:40px">
                                        <a href="" class="link">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img class="img-cover lazy loaded" alt="H-img1" src="assets/img/upload/H-img1.png">
                                                </figure>
                                            </div>
                                            <div class="title-bottom">
                                                <div class="row align-items-center gutters-10">
                                                    <div class="col">
                                                        <div class="card-txt text-limit -x2">ข้อมูลสายพันธุ์ของสุนัขและพฤติกรรมของสุนัข</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="material-symbols-rounded">chevron_right</span>
                                                    </div>
                                                </div>
                                                <div class="desc typo-default fw-normal">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="wrapper" style="border-radius:40px">
                                        <a href="" class="link">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img class="img-cover lazy loaded" alt="H-img2" src="assets/img/upload/H-img2.png">
                                                </figure>
                                            </div>
                                            <div class="title-bottom">
                                                <div class="row align-items-center gutters-10">
                                                    <div class="col">
                                                        <div class="card-txt text-limit -x2">โรคต่างๆที่เกิดในสุนัข</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="material-symbols-rounded">chevron_right</span>
                                                    </div>
                                                </div>
                                                <div class="desc typo-default fw-normal">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="wrapper" style="border-radius:40px">
                                        <a href="" class="link">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img class="img-cover lazy loaded" alt="H-img3" src="assets/img/upload/H-img3.png">
                                                </figure>
                                            </div>
                                            <div class="title-bottom">
                                                <div class="row align-items-center gutters-10">
                                                    <div class="col">
                                                        <div class="card-txt text-limit -x2">ข้อมูลสายพันธุ์ของแมวและพฤติกรรมของแมว</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="material-symbols-rounded">chevron_right</span>
                                                    </div>
                                                </div>
                                                <div class="desc typo-default fw-normal">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="wrapper" style="border-radius:40px">
                                        <a href="" class="link">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img class="img-cover lazy loaded" alt="H-img4" src="assets/img/upload/H-img4.png">
                                                </figure>
                                            </div>
                                            <div class="title-bottom">
                                                <div class="row align-items-center gutters-10">
                                                    <div class="col">
                                                        <div class="card-txt text-limit -x2">โรคต่างๆที่เกิดในแมว</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="material-symbols-rounded">chevron_right</span>
                                                    </div>
                                                </div>
                                                <div class="desc typo-default fw-normal">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="wrapper" style="border-radius:40px">
                                        <a href="" class="link">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img class="img-cover lazy loaded" alt="H-img5" src="assets/img/upload/H-img5.png">
                                                </figure>
                                            </div>
                                            <div class="title-bottom">
                                                <div class="row align-items-center gutters-10">
                                                    <div class="col">
                                                        <div class="card-txt text-limit -x2">คลินิกรักษาสัตว์และร้านขายอาหารสัตว์</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="material-symbols-rounded">chevron_right</span>
                                                    </div>
                                                </div>
                                                <div class="desc typo-default fw-normal">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="wrapper" style="border-radius:40px">
                                        <a href="" class="link">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img class="img-cover lazy loaded" alt="H-img6" src="assets/img/upload/H-img6.png">
                                                </figure>
                                            </div>
                                            <div class="title-bottom">
                                                <div class="row align-items-center gutters-10">
                                                    <div class="col">
                                                        <div class="card-txt text-limit -x2">การคุมกำเนิด</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="material-symbols-rounded">chevron_right</span>
                                                    </div>
                                                </div>
                                                <div class="desc typo-default fw-normal">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        <?php include('inc/footer.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>