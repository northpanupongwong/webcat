<!DOCTYPE html>
<?php include('lib/connect.php'); ?>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
    <style>
/* [1] The container */
.img-hover-zoom {
  height: 300px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
}

/* [2] Transition property for smooth transformation of images */
.img-hover-zoom img {
  transition: transform .3s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
.img-hover-zoom:hover img {
  transform: scale(1.2);
}
</style>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>


        <section class="layout-container ">

            <div class="default-header">
                <div class="wrapper">
                    <div class="container">
                        <div class="title  text-center">ประกาศต่างๆ</div>
                        <!-- <div class="text-center txt-desc" style="color: white;line-height: 1.5rem;">สำหรับผู้เลี้ยงสุนัขและแมวมือใหม่ที่คิดจะเลี้ยงสุนัขและแมว อาจจะไม่สามารถแยกสายพันธุ์ของสุนัขและแมวได้ 
                        ไม่ทราบปัญหาเกี่ยวกับวิธีการเลี้ยงดูของสัตว์เลี้ยง และนิสัยของสุนัขและแมวแต่ละสายพันธุ์ ทำให้เกิดปัญหามากมายเกี่ยวกับสุขภาพของสุนัขและแมว 
                        ทำให้สุนัขและแมวมีอายุที่สั้นลงหรือถูกเลี้ยงแบบผิดวิธี ดังนั้นจึงพัฒนาเว็บแอปพลิเคชันเพื่อรวบรวมข้อมูลการเลี้ยงสุนัขและแมวและการให้คำแนะนำเกี่ยวกับอาการของสุนัขและแมว 
                        และประเมินอาการเบื้องต้นเมื่อสุนัขและแมวมีอาการผิดปกติ เพื่อที่จะได้รับการดูแลที่ถูกวิธีและทำให้สุนัขและแมวมีอายุที่ยืนยาวมากขึ้น รวมทั้งสามารถหาคลินิครักษาสัตว์ ร้านอาหารที่ใกล้บ้าน 
                        และสามารถตามหาสุนัขและแมวในกรณีสูญหายได้</div> -->
                    </div>
                </div>
                <figure class="cover">
                    <img class="img-cover" src="<?php echo $core_template; ?>assets/img/background/bg-home.png" alt="bg-home">
                </figure>

            </div>

            <div class="student-page" style="margin: 6rem 0;">
                <div class="information-system">
                    <div class="container-xl">
                        <? for($i=0;$i<5;$i++) { ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-5 img-hover-zoom">
                                    <img src="<?php echo $core_template; ?>assets/img/background/bg-home.png" style="min-height: 300px;" class="img-fluid rounded-start object-fit-cover" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>

            </div>

        </section>


        <?php include('inc/footer.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>