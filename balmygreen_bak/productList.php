<?
    include_once("./session.php");
    include_once("./common.php");
    include_once("./header.php");
?>
    <div class="product-contents">
        <div class="top-contents">
            <div class="banner">
                <? $htmlIm ?>
            </div>
        </div>
        <div class="middle-contents">
        <?php
            for($i= 0; $i<12; $i++){
                //                            
                echo ('
                    <div class="box">
                        <div class="img-box">
                            <img src="https://shop-phinf.pstatic.net/20210303_216/1614770824949IDYpE_JPEG/15906608660821469_5663354.jpg?type=m510" alt="">
                            <!--<img src="" alt="">-->
                        </div>
                        <div class="comment-box">
                            <p class="product-name">이름이름</p>
                            <p class="product-price">1,234,567원</p>
                        </div>
                    </div>
                ');
            }
        ?>    
        </div>
    </div>

<?
    include_once("./header.php");
?>