<?
    include_once("./session.php");
    include_once("./common.php");
    include_once("./header.php");
?>

<div class="product-detail">
    <div class="product-short-info">
        <div class="product-img-box">
            <div class="product-img-main">
                <img src="https://shop-phinf.pstatic.net/20210303_216/1614770824949IDYpE_JPEG/15906608660821469_5663354.jpg?type=m510" class="main-img"/>
            </div>
            <div class="product-img-sub">
                <div class="sub-thumb-box">
                    <img src="https://shop-phinf.pstatic.net/20210303_216/1614770824949IDYpE_JPEG/15906608660821469_5663354.jpg?type=m510" class="thumb-img">
                </div>
                <div class="sub-thumb-box">
                    <img src="https://shop-phinf.pstatic.net/20210303_216/1614770824949IDYpE_JPEG/15906608660821469_5663354.jpg?type=m510" class="thumb-img">
                </div>
                <div class="sub-thumb-box">
                    <img src="https://shop-phinf.pstatic.net/20210303_216/1614770824949IDYpE_JPEG/15906608660821469_5663354.jpg?type=m510" class="thumb-img">
                </div>
                <div class="sub-thumb-box">
                    <img src="https://shop-phinf.pstatic.net/20210303_216/1614770824949IDYpE_JPEG/15906608660821469_5663354.jpg?type=m510" class="thumb-img">
                </div>
            </div>
        </div>
        <div class="product-info-box">
            <div class="product-info-context">
                <div class="product-name-area">
                    <p>Product_name</p>
                </div>
                <hr class="line-st"/>
                <div class="product-info-area">
                    <ul class="style-none">
                        <li>
                            pdt_price : <span>1,234,567 won</span> 
                        </li>
                        <li>
                            pdt_transport : <span>anythig else</span>
                        </li>
                        <li>
                            pdt_transport_fee : <span>3,000 won</span> 
                        </li>
                        <li>
                            etc. : <span>anythig else</span>
                        </li>
                    </ul>
                </div>
                <hr class="line-st"/>
                <div class="product-option-area">
                    <p>color/size : 
                        <select class="product-select-option">
                            <option value="">choose one</option>
                            <option value="">option 1 / color1</option>
                            <option value="">option 1 / color2</option>
                            <option value="">option 2 / color1</option>
                            <option value="">option 2 / color2</option>
                            <option value="">option 3 / color1</option>
                        </select>
                    </p>
                    <p>quentity : 
                        <input type="number" class="quentity-input right" min="1"/>
                    </p>
                </div>
            </div>
            <div class="product-button-group">
                <a href="javaScrip:void(0);" class="btn">Buy Now</a>
                <a href="javaScrip:void(0);" class="btn">Cart</a>
            </div>
        </div>
    </div>
    <div>
        <hr class="line-st"/>
    </div>
    <div class="product-detail-info test-box3">
    </div>
    <div>
        <hr class="line-st"/>
    </div>
    <div class="product-tab-box">
        <ul class="tabs">
            <li class="tab-item current" data-tab="div_tab_1">Comment</li>
            <li class="tab-item" data-tab="div_tab_2">QnA</li>
        </ul>
        <div id="div_tab_1" class="product-comment-box tab-content current">
            여기에는 후기 작성
        </div>
        <div id="div_tab_2" class="product-qna-box tab-content">
            이쪽에는 제품문의
        </div>
    </div>
</div>
<script type="text/javascript" src="./js/productDetail.js"></script>

