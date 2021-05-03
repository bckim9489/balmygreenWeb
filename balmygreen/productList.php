<?
    header("Content-Type: application/json");
    $pageValue = $_POST["pageValue"];
    
    //$flag = $pageValue == "vase"? "TRUE":"FALSE";

    //Top contents
    if($pageValue == "all"){
        $htmlImg = '<img src=".\image\common\logo.png" alt="">';
    } else if($pageValue == "vase"){
        $htmlImg = '';
    } else if($pageValue == "poster"){
        $htmlImg = '';
    } else if($pageValue == "furniture"){
        $htmlImg = '';
    }

    $htmlResult = '<div class = "product-contents"><div class="top-contents"><div class="banner">'.$htmlImg.'</div></div></div>';

    $sql = 'select * from product_list where kind = '.$pageValue;

    $result = json_encode(array("html" => $htmlResult, "sql" => $sql, "flag" => $flag));
    
    echo($result);
?>