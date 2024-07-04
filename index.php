<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5673603 Software Construction & Evolution</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- <h6>ส่วนที่ 1 : ธนากร</h6> -->
    <div class="section1">
        <div class="main">
            <img src="img/logo.png">
            <div class="title">
                SE-Store System
            </div>
        </div>
        <ul class="menubar">
            <li>
                <a href="index.php">หน้าหลัก</a>
            </li>
            <li> | </li>
            <li><a href="#">เข้าสู่ระบบ</a></li>
        </ul>
    </div>
    <div class="container">
        <!-- <h6>ส่วนที่ 2 : กันติศา & อธิศ</h6> -->
        <div id="demo" class="carousel slide section2" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/l1.jfif" class="rounded-4" alt="" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/l2.jfif" class="rounded-4" alt="" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/l3.jfif" class="rounded-4" alt="" class="d-block" style="width:100%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- <h6>ส่วนที่ 3 : คุณาวุฒิ</h6> -->
        <div class="section3">
            <h6>สินค้าขายดี / สินค้าแนะนำ</h6>
            <table>
                <tr>
                    <?php for ($x = 1; $x <= 5; $x++) {
                    ?>
                        <td>
                            <img src="img/image2.jpg">
                            <p>100 บาท</p>
                        </td>
                    <?php } ?>
                </tr>
            </table>
        </div>
        <h5 style="margin-top:10px; font-weight:bold;">ส่วนที่ 4 : สุทธิดา ********* ยังขาด</h5>
        <!-- <h6>ส่วนที่ 5 : พุฒินาท</h6> -->
        <div class="secction5">
            <div class="product">
                <?php
                for ($x = 0; $x <= 30; $x++) {
                    if ($x == 3) continue;
                ?>
                    <div class="productBox boxSize_M">
                        <img class="productImg" src="img/7.png">
                        <div class=" productTxt">
                            <h6><b>รหัสสินค้า </b>S0x</b></h6>
                            <p><b>Type : </b>สำเร็จรูป</b></p>
                            <p><b>Name : </b>ชื่อสินค้า</b></p>
                            <p><b>Price : </b>199</b> บาท/ <b>Stock : </b>100</b> ea.</p>
                            <button>เลือกซื้อ</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div><!-- container -->
</body>

</html>