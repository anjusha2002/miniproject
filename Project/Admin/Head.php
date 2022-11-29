
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Admin</title>

        <!-- <link rel="icon" href="../Template/Admin/img/favicon.png" type="image/png"> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../Template/Admin/css/bootstrap.min.css" />
        <!-- themefy CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/themefy_icon/themify-icons.css" />
        <!-- swiper slider CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/swiper_slider/css/swiper.min.css" />
        <!-- select2 CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/select2/css/select2.min.css" />
        <!-- select2 CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/niceselect/css/nice-select.css" />
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/owl_carousel/css/owl.carousel.css" />
        <!-- gijgo css -->
        <link rel="stylesheet" href="../Template/Admin/vendors/gijgo/gijgo.min.css" />
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/font_awesome/css/all.min.css" />
        <link rel="stylesheet" href="../Template/Admin/vendors/tagsinput/tagsinput.css" />
        <!-- datatable CSS -->
        <link rel="stylesheet" href="../Template/Admin/vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="../Template/Admin/vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="../Template/Admin/vendors/datatable/css/buttons.dataTables.min.css" />
        <!-- text editor css -->
        <link rel="stylesheet" href="../Template/Admin/vendors/text_editor/summernote-bs4.css" />
        <!-- morris css -->
        <link rel="stylesheet" href="../Template/Admin/vendors/morris/morris.css">
        <!-- metarial icon css -->
        <link rel="stylesheet" href="../Template/Admin/vendors/material_icon/material-icons.css" />

        <!-- menu css  -->
        <link rel="stylesheet" href="../Template/Admin/css/metisMenu.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="../Template/Admin/css/style.css" />
        <link rel="stylesheet" href="../Template/Admin/css/colors/default.css" id="colorSkinCSS">
    </head>
    <body class="crm_body_bg" style="background:white">



        <!-- main content part here -->

        <!-- sidebar  -->
        <!-- sidebar part here -->
        <nav class="sidebar">
            <div class="logo d-flex justify-content-between">
                <a href="HomePage.php"><h2 align="center">Welcome<br><?php echo $_SESSION["adminname"]?></h2></a>
                <div class="sidebar_close_icon d-lg-none">
                    <i class="ti-close"></i>
                </div>
            </div>
            <ul id="sidebar_menu">
                <li class="side_menu_title">
                    <span>Dashboard</span>
                </li>
                <li class="mm-active">
                    <a  href="HomePage.php"  aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/1.svg" alt="">
                        <span>Dashboard</span>
                    </a>
                   
                </li>
                <li class="side_menu_title">
                    <span></span>
                </li>
             



					<li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>Location</span>
                    </a>
                    <ul>
                        <li><a href="District.php">Disrict</a></li>
                        <li><a href="Place.php">Place</a></li>
                        
                    </ul>
                </li>
                
                
                
                
					<li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>User</span>
                    </a>
                    <ul>
                        <li><a href="Userlist.php">List</a></li>
                        <li><a href="Acceptedlist.php">Accepted</a></li>
                        <li><a href="Rejectedlist.php">Rejected</a></li>
                                              
                        
                    </ul>
                </li>
                
                
                
                		<li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>Shop</span>
                    </a>
                    <ul>
                    
                    <li><a href="Shoplist.php">List</a></li>
                        <li><a href="ShopAcceptedlist.php">Accepted</a></li>
                        <li><a href="ShopRejectedlist.php">Rejected</a></li>
                       
                       
                        
                        
                    </ul>
                </li>
                
                
                
                		<li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>Product</span>
                    </a>
                    <ul>
                        <li><a href="ProductDetails.php">Registration</a></li>
                        <li><a href="Productlist.php">List</a></li>
                        
                        
                        
                    </ul>
                </li>
                
                
                
                <li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>SaleList</span>
                    </a>
                    <ul>
                        <li><a href="ShopBuyList.php">ShopBuyList</a></li>
                        <li><a href="UserBuyList.php">UserBuyList</a></li>
                      
                       
                        
                    </ul>
                </li>
                
                
                <li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>SaleReports</span>
                    </a>
                    <ul>
                        <li><a href="ShopProductSalesReport.php">ShopSaleReport</a></li>
                        <li><a href="UserProductSalesReport.php">UserSaleReport</a></li>
                      
                       
                        
                    </ul>
                </li>
                
                <li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>Graphs</span>
                    </a>
                    <ul>
                        <li><a href="ShopOrderPie.php">ShopPieChart</a></li>
                        <li><a href="UserOrderPie.php">UserPieChart</a></li>
                         <li><a href="AllOrderPie.php">OverollPieChart</a></li>
                      
                       
                        
                    </ul>
                </li>
                
                
                
                
                
                
                
                
                
                
                 		<li class="">
                    <a   class="has-arrow" href="#" aria-expanded="false">
                        <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                        <span>View</span>
                    </a>
                    <ul>
                        <li><a href="ShopComplaint.php">ShopComplaint</a></li>
                        <li><a href="ShopFeedback.php">ShopFeedback</a></li>
                        <li><a href="UserComplaint.php">UserComplaint</a></li>
                        <li><a href="UserFeedback.php">UserFeedback</a></li>
                       
                        
                    </ul>
                </li>
                
                
                
                  		
                
                
                
                  		
                
                
                
                
                
                
         
                   <li class="">
                        <a   class="has-arrow" href="../Guest/Login.php" aria-expanded="false">
                            <img src="../Template/Admin/img/menu-icon/2.svg" alt="">
                            <span>Logout</span>
                        </a>	
                   </li>
            </ul>

        </nav>
        <!-- sidebar part end -->
        <!--/ sidebar  -->