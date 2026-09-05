<?php include 'header.php'; ?>

<!-- Tambahkan CSS untuk animasi dan peningkatan tampilan -->
<style>
    /* Animasi untuk breadcrumb dan judul */
    .breadcome-list {
        animation: fadeIn 0.8s ease-in-out;
    }
    
    /* Animasi untuk box statistik */
    .white-box {
        transition: all 0.3s ease;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    
    .white-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }
    
    /* Animasi counter angka */
    .counter {
        display: inline-block;
        animation: countUp 2s ease-out forwards;
    }
    
    /* Peningkatan tampilan user card */
    .single-cards-item {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
    }
    
    .single-cards-item:hover {
        transform: scale(1.02);
        box-shadow: 0 12px 20px rgba(0,0,0,0.2);
    }
    
    .img-user {
        border: 3px solid #fff;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
    }
    
    .img-user:hover {
        transform: scale(1.05);
    }
    
    /* Animasi welcome message */
    .welcome-message {
        position: relative;
        overflow: hidden;
        padding: 30px;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    .welcome-message h3, .welcome-message h4 {
        position: relative;
        animation: slideInUp 0.8s ease forwards;
    }
    
    .welcome-message h4 {
        animation-delay: 0.3s;
    }
    
    .welcome-message:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #3498db, #2ecc71, #f1c40f, #e74c3c);
        background-size: 400% 400%;
        animation: gradientAnimation 3s ease infinite;
    }
    
    /* Define animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideInUp {
        from { 
            opacity: 0;
            transform: translateY(30px);
        }
        to { 
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes countUp {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    /* Improve box title */
    .box-title {
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .box-title:after {
        content: '';
        position: absolute;
        width: 50px;
        height: 3px;
        bottom: 0;
        left: 0;
        background: #1ab394;
        transition: width 0.3s ease;
    }
    
    .white-box:hover .box-title:after {
        width: 100px;
    }
    
    /* Improve breadcrumb */
    .breadcome-menu li a {
        position: relative;
    }
    
    .breadcome-menu li a:after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #1ab394;
        transition: width 0.3s ease;
    }
    
    .breadcome-menu li a:hover:after {
        width: 100%;
    }
</style>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Total Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn">
                                    <i class="fa fa-level-up" aria-hidden="true"></i> 
                                    <span class="counter text-info">
                                        <?php 
                                        $jumlah_arsip = mysqli_query($koneksi,"select * from arsip");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Kategori Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right graph-four-ctn">
                                    <i class="fa fa-level-down" aria-hidden="true"></i> 
                                    <span class="text-danger">
                                        <?php 
                                        $jumlah_kategori = mysqli_query($koneksi,"select * from kategori");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_kategori); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>

                <div class="product-sales-chart">
                    <div class="welcome-message">
                        <br>
                        <center>
                            <h3>Selamat Datang</h3>
                            <h4>Sistem Informasi Arsip Digital</h4>
                        </center>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">
                            <img src="../assets/img/product/profile-bg.jpg" alt="">
                        </a>
                    </div>

                    <div class="single-product-text">
                        <?php 
                        if($s['user_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/user/<?php echo $s['user_foto']; ?>">
                            <?php
                        }
                        ?>

                        <h4><a class="cards-hd-dn" href="#"><?php echo $s['user_nama']; ?></a></h4>
                        <h5>user</h5>
                        <p class="ctn-cards">Pengelolaan arsip jadi lebih mudah dengan sistem informasi arsip digital.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Tambahkan script untuk animasi counter dan sparkline -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate counters
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.innerText);
        let count = 0;
        const speed = 2000 / target; // Adjust speed based on target number
        
        function updateCount() {
            if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCount, speed);
            } else {
                counter.innerText = target;
            }
        }
        
        updateCount();
    });
    
    // Add subtle animation to white-box elements on scroll
    const boxes = document.querySelectorAll('.white-box, .single-cards-item, .welcome-message');
    
    // Check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    // Add animation class when element comes into view
    function checkBoxes() {
        boxes.forEach(box => {
            if (isInViewport(box)) {
                box.style.opacity = "1";
                box.style.transform = "translateY(0)";
            }
        });
    }
    
    // Set initial state
    boxes.forEach(box => {
        box.style.opacity = "0";
        box.style.transform = "translateY(20px)";
        box.style.transition = "opacity 0.5s ease, transform 0.5s ease";
    });
    
    // Run on load
    checkBoxes();
    
    // Run on scroll
    window.addEventListener('scroll', checkBoxes);
});
</script>

<?php include 'footer.php'; ?>