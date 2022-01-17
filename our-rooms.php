


<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> HOTELS IN SULAYMANI </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/typography.css" rel="stylesheet">   
        <link href="js/dl-menu/component.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/widget.css" rel="stylesheet">
        <link href="css/shortcode.css" rel="stylesheet">
    
        <link href="style.css" rel="stylesheet">
      
        <link href="css/color.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
	</head>
	<body>
		<div class="iqoniq_wrapper" id='app'>
              
				<div class="mg_nav_wrapper">
                
					<div class="mg_logo">
                        <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
                    </div>
                 
                    <div class="mg_nav">
                        <ul class="mg_navigation">
                            <li><a href="index.html">home</a></li>
                         
                           
                            <li>
                                <a href="top-destinations.html">destinations</a>
                            </li>
                          
                            <li>
                                <a href="about-us.html">contact us</a>
                               
                            </li>
                        </ul>
                       
                     
                    </div>
				</div>
			</header>
           
            <div class="mg_sub_banner">
                <div class="container">
                    <h2>HOTELS IN SULAIMANI</h2>
                    
                </div>
            </div>
           
            <div class="iqoniq_contant_wrapper">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                            <?php

                                if ($_SERVER["REQUEST_METHOD"] == "GET") {

                                    $conn = new mysqli('localhost','root','','ktg');
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    
                                    $sql = "SELECT * FROM hotels";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $hname = $row['name'];
                                            $hprice = $row['price'];
                                            $hbed = $row['bed_num'];
                                            $himglink = $row['img_link'];
                                            #echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["bed"]. "<br>";
                                            echo  
                                                
                                                '<div class="mg_blog_listing our-room fancy-overlay">
                                                    <div class="thumb">
                                                        <a href="#"><img src="'.$himglink.'" alt=""></a>
                                                        <a class="mg_zoom_icon" href="room-detail-grandd.html"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h5 class="blog_title"><a href="room-detail-grandd.html">'.$hname.'</a></h5>
                                                        <ul class="blog-meta-list">
                                                        
                                                        </ul>
                                                        <div class="clear"></div>
                                                        <ul class="room-feature">
                                                            <li><span class="pull-left">beds</span><span class="pull-right">'.$hbed.'</span></li>
                                                            <li><span class="pull-left">Rates from</span><span class="pull-right">'.$hprice.'</span></li>
                                                        </ul>
                                                        <a class="mg_btn1 bg_transparent" href="room-detail-grandd.html">Read more</a>
                                                    </div>
                                            </div>'
                                            
                                            ;
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    }
                                ?>
                                <div class="mg_blog_listing our-room fancy-overlay">
                                    <div class="thumb">
                                        <a href="#"><img src="extra-images/granddd.jpg" alt=""></a>
                                        <a class="mg_zoom_icon" href="room-detail-grandd.html"></a>
                                    </div>
                                    <div class="text">
                                        <h5 class="blog_title"><a href="room-detail-grandd.html">GRAND MILLINUM</a></h5>
                                        <ul class="blog-meta-list">
                                         
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="room-feature">
                                            <li><span class="pull-left">beds</span><span class="pull-right">2</span></li>
                                            <li><span class="pull-left">Rates from</span><span class="pull-right">150</span></li>
                                        </ul>
                                        <a class="mg_btn1 bg_transparent" href="room-detail-grandd.html">Read more</a>
                                    </div>
                                </div>
                             



                                
                                <div class="mg_pagination text-center">
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="page-numbers" href="#">3</a>
                               
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="mg_sidebar">
                                    <div class="widget widget_search">
                                           
                                        </div>
                                    </div>
                                   
                                    <div class="widget widget_contant">
                                        <div class="border-bottom">
                                            <h5 class="widget_default_title"> Hotels in the cities </h5>
                                            <p>You can find the best hotels in Sulaimani city with their details.</p>
                                        </div>
                                    </div>
                                   
                                           
                                   
                                   
            
                    
                    <div class="col-md-3 col-sm-6">
                        
                    </div>
                   
                </div>
            </footer>
          
            <div class="mg_copyright">
                <p><a target="_blank"> KURDISTAN TOURISM GUID </a></p>
            </div>
           
        
       
        <script src="js/jquery.js"></script>
   
        <script src="js/bootstrap.js"></script>

        <script src="js/dl-menu/modernizr.custom.js"></script>
        <script src="js/dl-menu/jquery.dlmenu.js"></script>
   
        <script src="js/custom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

	</body>


</html>
