<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="StyleAdmin1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    
      <span class="logo_name">fouziya shopping zone</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="products.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="userlisting.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">user list</span>
          </a>
        </li>
        <li>
          <a href="orders.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Current Orders</span>
          </a>
        </li>
        <li>
          <a href="Delivery.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Delivery</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Payments</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Refund</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="Main.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
       
        <span class="admin_name">Fouziya</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
             
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">fouziya</a></li>
            <li><a href="#">sonu</a></li>
            <li><a href="#">Roe </a></li>
            <li><a href="#">Diana</a></li>
            <li><a href="#">farida</a></li>
           
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Delivered</a></li>
           
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">Rs.204.98</a></li>
            <li><a href="#">Rs.24.55</a></li>
            <li><a href="#">Rs.25.88</a></li>
            <li><a href="#">Rs.170.66</a></li>
            <li><a href="#">Rs.56.56</a></li>
         
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Seling Product</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
            
              <span class="product">gown</span>
            </a>
            <span class="price">Rs.300</span>
          </li>
          <li>
            <a href="#">
            <span class="product">skirt</span>
            </a>
            <span class="price">Rs.350</span>
          </li>
          <li>
            <a href="#">
                         <span class="product">t shirt</span>
            </a>
            <span class="price">Rs.400</span>
          </li>
          <li>
            <a href="#">
              
              <span class="product">lehenga</span>
            </a>
            <span class="price">Rs.450</span>
          </li>
          
           <li>
            <a href="#">
              <span class="product">sarees</span>
            </a>
            <span class="price">Rs.600</span>
          </li>
          <li>
            <a href="#">
              
              <span class="product">kurtis</span>
            </a>
            <span class="price">Rs.450</span>
          </li>
          <li>
            <a href="#">
              
              <span class="product">jeans</span>
            </a>
            <span class="price">Rs.300</span>
          </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>