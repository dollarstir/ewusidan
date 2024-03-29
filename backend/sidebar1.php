

<ul id="sidebar_menu">
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Users</span>
        </a>
        <ul>
            <!-- <li><a class="active" href="index.php">Add users</a></li> -->
            <li><a href="myusers">view Users</a></li>
            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>
    <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/dashboard.svg" alt="">
            </div>
            <span>Orders</span>
        </a>
        <ul>
            <li><a class="active" href="neworders">New Orders <span class="badge badge-danger" style="border-radius:100px;background-color:red;margin-left:100px;text-align:center;"><?php echo customcount('activity', [['status', '=', 'pending']]); ?></span></a></li>
            <li><a href="recievedorders">Recieved orders</a></li>
            <li><a href="completedorders">Processed orders</a></li>
            <li><a href="orders">All orders</a></li>

            <!-- <li><a href="index_3.php">Dark Menu</a></li> -->
        </ul>
    </li>


    
    
    
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/2.svg" alt="">
            </div>
            <span>Apps</span>
        </a>
        <ul>
            <li><a href="editor.php">editor</a></li>
            <li><a href="mail_box.php">Mail Box</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </li> -->
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/3.svg" alt="">
            </div>
            <span>UI Kits</span>
        </a>
        <ul>
            <li><a href="colors.php">colors</a></li>
            <li><a href="Alerts.php">Alerts</a></li>
            <li><a href="buttons.php">Buttons</a></li>
            <li><a href="modal.php">modal</a></li>
            <li><a href="dropdown.php">Droopdowns</a></li>
            <li><a href="Badges.php">Badges</a></li>
            <li><a href="Loading_Indicators.php">Loading Indicators</a></li>
            <li><a href="State_color.php">State color</a></li>
            <li><a href="typography.php">Typography</a></li>
            <li><a href="datepicker.php">Date Picker</a></li>
        </ul>
    </li> -->
    
    <!--
    <li class="">
        <a href="Board.php" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/5.svg" alt="">
            </div>
            <span>Board</span>
        </a>
    </li>
    <li class="">
        <a href="invoice.php" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/6.svg" alt="">
            </div>
            <span>Invoice</span>
        </a>
    </li>
    <li class="">
        <a href="calender.php" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/7.svg" alt="">
            </div>
            <span>Calander</span>
        </a>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/8.svg" alt="">
            </div>
            <span>Products</span>
        </a>
        <ul>
            <li><a href="Products.php">Products</a></li>
            <li><a href="Product_Details.php">Product Details</a></li>
            <li><a href="Cart.php">Cart</a></li>
            <li><a href="Checkout.php">Checkout</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/8.svg" alt="">
            </div>
            <span>Icons</span>
        </a>
        <ul>
            <li><a href="Fontawesome_Icon.php">Fontawesome Icon</a></li>
            <li><a href="themefy_icon.php">themefy icon</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/9.svg" alt="">
            </div>
            <span>Animations</span>
        </a>
        <ul>
            <li><a href="wow_animation.php">Animate</a></li>
            <li><a href="Scroll_Reveal.php">Scroll Reveal</a></li>
            <li><a href="tilt.php">Tilt Animation</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/10.svg" alt="">
            </div>
            <span>Components</span>
        </a>
        <ul>
            <li><a href="accordion.php">Accordions</a></li>
            <li><a href="Scrollable.php">Scrollable</a></li>
            <li><a href="notification.php">Notifications</a></li>
            <li><a href="carousel.php">Carousel</a></li>
            <li><a href="Pagination.php">Pagination</a></li>
        </ul>
    </li> -->
    
    <!-- <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/12.svg" alt="">
            </div>
            <span>Cards</span>
        </a>
        <ul>
            <li><a href="basic_card.php">Basic Card</a></li>
            <li><a href="theme_card.php">Theme Card</a></li>
            <li><a href="dargable_card.php">Draggable Card</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/13.svg" alt="">
            </div>
            <span>Charts</span>
        </a>
        <ul>
            <li><a href="chartjs.php">ChartJS</a></li>
            <li><a href="apex_chart.php">Apex Charts</a></li>
            <li><a href="chart_sparkline.php">Chart sparkline</a></li>
            <li><a href="am_chart.php">am-charts</a></li>
            <li><a href="nvd3_charts.php">nvd3 charts.</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/14.svg" alt="">
            </div>
            <span>Widgets</span>
        </a>
        <ul>
            <li><a href="chart_box_1.php">Chart Boxes 1</a></li>
            <li><a href="profilebox.php">Profile Box</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/15.svg" alt="">
            </div>
            <span>Maps</span>
        </a>
        <ul>
            <li><a href="mapjs.php">Maps JS</a></li>
            <li><a href="vector_map.php">Vector Maps</a></li>
        </ul>
    </li>
    <li class="">
        <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="img/menu-icon/16.svg" alt="">
            </div>
            <span>Pages</span>
        </a>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="resister.php">Register</a></li>
            <li><a href="error_400.php">Error 404</a></li>
            <li><a href="error_500.php">Error 500</a></li>
            <li><a href="forgot_pass.php">Forgot Password</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </li> -->
</ul>