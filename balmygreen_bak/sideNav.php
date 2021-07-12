    <nav class="home_nav side">
        <ul class= "firstDept">
            <li>
                <a href="#">ABOUT US</a>                
            </li>
            <li>
                <a href="#" onclick="">PROJECT</a>
                <ul class="secondDept">
                    <li><a href="#">HOUSING</a></li>
                    <li><a href="#">INTERIOR</a></li>
                </ul>
            </li>
            <li>
                <a href="./productList.php" onclick="">SHOP</a>
                <ul class="secondDept">
                    <li><a href="#" onclick="redirectPage('ct-frame', './productList.php', 'vase');">VASE</a></li>
                    <li><a href="#" onclick="redirectPage('ct-frame', './productList.php', 'poster');">POSTER</a></li>
                    <li><a href="#" onclick="redirectPage('ct-frame', './productList.php', 'furniture');">FURNITURE</a></li>
                </ul>
            </li>
            <li style="margin-bottom:0;">
                <a href="#" >BOARD</a>
            </li>
            <li>
                <a href="#" onClick="deptOpen(this);">Q&A</a>
            </li>
        </ul>
    </nav>