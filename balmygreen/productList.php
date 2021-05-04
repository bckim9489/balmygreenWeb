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
                echo ('
                    <div class="box">
                        <div class="img-box">
                            <img src="" alt="">
                        </div>
                        <div class="comment-box">
                            <p class="product-name">이름이름이름</p>
                            <p class="product-price">9,999,999원</p>
                            <p class="product-explanation">이것은 설명하는 곳입니다. 설명을 뭐라적든 다보여야 겠죠?</p>
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