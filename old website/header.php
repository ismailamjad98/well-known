<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Drop Down Navigation Menu | CodingLab </title>
    <link rel="stylesheet" href="styles.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#"><img src="logo.jpg" alt="Italian Trulli"></a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Colarus</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="index.php">HOME</a></li>
          <li>
            <a href="#">PRODUCTS</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
             
              
            
              <li class="more">
                <span><a href="#">HVAC</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                <ul class="more-sub-menu sub-menu">
				  <li><a href="brackets.php">Brackets</a></li>
                  <li><a href="heatpump.php">Heat Pump</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  
                </ul>
              </li>
              <li><a href="pulp.php">Pulp & Paper</a></li> 
            </ul>
          </li>
          
          <li><a href="About.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    </div>
  </nav>
  <script src="script.js"></script>

</body>
</html>
