<?php 
if (isset($_GET['success'])) {
    $productName = $_GET['success'];
    echo '<script language="javascript">';
echo 'alert("Thêm vào giỏ hàng thành công ! ")';
echo '</script>';
}
?>
<section class="feature_product_area">
    <div class="container">
        <div class="f_p_inner">
            <div class="row">
                <div class="col-lg-3">
                    <!--================top sản phẩm =================-->
                    <div class="f_product_left">
                        <div class="f_product_inner">
                            <div class="s_m_title">
                                <h2>Top sản phẩm</h2>
                            </div>
                            <?php foreach ($topsp as $hanghoa) : ?>
                                <div class="media">
                                    <div class="d-flex">
                                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                                            <img style="width: 80px;" src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                                                    echo $arr[0];
                                                                                    ?>" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                                        <h5><?php echo number_format($hanghoa['gia']) ?>đ</h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!--================kết thúc top sản phẩm =================-->
                </div>
                <div class="col-lg-9">
                            <div class="loc-sanpham">
                                <p style="font-size: 18px; font-weight: 500;">Bộ lọc sản phẩm</p>
                                <form action="index.php?act=timkiemsanpham" method="POST">
                                    <select style="font-size: 12px; font-weight: 500;" name="danhmuc" id="">
                                        <option value="0">Tất cả danh mục</option>
                                        <?php
                                            foreach($kq as $row){
                                        ?>
                                        <option value="<?php echo $row['maLoai']?>"><?php echo $row['tenLoai']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <div class="gia">
                                        <p>
                                            <label for="amount">Khoảng giá:</label>
                                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold; width: 250px;">
                                        </p>
                                        <div id="slider-range"></div>
                                    </div>
                                    <input type="hidden" class="price_from" name="from" value="">
                                    <input type="hidden" class="price_to" name="to" value="">
                                    <button type="submit" name="btn_loc">Lọc</button>
                                </form>
                            </div>
                    <div class="s_m_title">
                        <h2>Tất cả sản phẩm</h2>
                    </div>
                    <div class="sanpham-flex">
                        <?php foreach ($product as $hanghoa) : ?>
                            <div class="sanphamdanhmuc">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                                            <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                                echo $arr[0]; ?>" alt=""></a>
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li><a class="add_cart_btn" href="../customer/add_cart.php?id=<?php echo $hanghoa['maHH'] ?>">Thêm Vào Giỏ Hàng</a></li>

                                        </ul>
                                        <h4><?php echo $hanghoa['tenHH'] ?></h4>
                                        <h5><?php echo number_format($hanghoa['gia']) ?>đ</h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>