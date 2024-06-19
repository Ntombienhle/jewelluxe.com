<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
     <div class="flex">
        <a href="home.php" class="logo">
            <img src="logo.png" alt="logo" class="logo-img">
        </a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                
                
                    
                </li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="about.php">About</a></li>
                 <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php if(isset($user_id)): ?>
                <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
                <div class="account-box">
                    <p>Username: <span><?php echo $_SESSION['user_name']; ?></span></p>
                    <p>Email: <span><?php echo $_SESSION['user_email']; ?></span></p>
                    <a href="logout.php" class="delete-btn">Logout</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
