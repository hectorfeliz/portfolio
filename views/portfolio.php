<section class="portfolio">
    
<?php $portfolio = [
    "SRC Vinyl" => 
    [
    "image" => "srcvinyl",
    "title" => "SRC Vinyl",
    "description" => "Fully custom eCommerce Website with Magento for a <b>high traffic</b> worldwide online vinyl store.",
    "link" => "http://srcvinyl.com/",
    "disclaimer" => "In-house project for SRC Vinyl",
    "gallery" => [
      "srcvinyl_1.png",
      "srcvinyl_2.png",
      "srcvinyl_3.png",
      "srcvinyl_4.png",
      "srcvinyl_5.png"
    ]
    ],
  
    "Vinyl Collective Blog and Boards" => 
    [
    "image" => "boards",
    "title" => "Vinyl Collective",
    "description" => "Wordpress blog, community and trading site with over <b>25,000 members</b>.",
    "link" => "http://boards.vinylcollective.com/",
    "disclaimer" => "In-house project for SRC Vinyl",
    "gallery" => [
      "boards_1.png",
      "boards_2.png",
      "boards_3.png",
    ]
    ],
    "Real Self" => 
    [

    "image" => "realself",
    "title" => "Real Self Works",
    "description" => "Shopify store with <b>fully custom</b> template and content pages.",
    "link" => "https://www.realselfworks.com/",
    "disclaimer" => "",
    "gallery" => [
      "rsw_1.png",
      "rsw_2.png",
      "rsw_3.png",
      "rsw_4.png"
    ]
    ],
    "Mosaic Theme" => 
    [
    "image" => "mosaic",
    "description" => "<p>Purchased by over <b>40 clients</b> this innovative theme includes advanced apartment search features.</p>",
    "title" => "Mosaic Theme",
    "link" => "https://demo-mosaic.lws1.com/",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "mosaic_1.png",
      "mosaic_2.png",
      "mosaic_3.png",
      "mosaic_4.png"
    ]
    ],
    "Neighbourhood Explorer" => 
    [
    "image" => "neighbourhoodexplorer",
    "description" => "<p>SaaS widget using various Google Maps APIs to to categorize and display businesses and amenities near listings for <b>over 300 clients</b></p>",
    "title" => "Neighbourhood Explorer widget",
    "link" => "http://neighbourhoodexplorer.com/",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "neighbourhood_explorer_1.png",
      "neighbourhood_explorer_2.png"
    ]
    ],
    "YourNextPlaceToLive" => 
    [
    "image" => "mvg",
    "title" => "Miller-Valentine Group",
    "description" => "<p>American real estate porfolio of <b>14,000 multifamily units</b></p>",
    "link" => "https://yournextplacetolive.com/",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "mvg_1.png",
      "mvg_2.png",
      "mvg_3.png",
      "mvg_4.png"
    ]
    ],
    "Oben" => 
    [
    "image" => "oben",
    "title" => "Oben Property Management",
    "description" => "<p>Toronto premium real estate management company focused on <b>luxury lifestyle destinations</b></p>",
    "link" => "https://www.obenpm.com/",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "oben_1.png",
      "oben_2.png",
      "oben_3.png"
    ]
    ],
    "Minto Apartments" => 
    [
    "image" => "minto",
    "title" => "Minto Apartment REIT",
    "link" => "https://www.mintoapartments.com/",
    "description" => "<p>Canadian real estate Investment Trust with <b>$900 Million</b> Market Cap on the Toronto Stock Schange (TSX).</p>",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "minto_1.png",
      "minto_2.png",
      "minto_3.png"
    ]
    ],
    "Centurion Property" => 
    [
    "image" => "centurion",
    "title" => "Centurion Property",
    "description" => "<p>Leading provider of premium multi-residential and off-campus student residences.</p>",
    "link" => "https://www.cpliving.com/",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "minto_1.png",
      "minto_2.png",
      "minto_3.png"
    ]
    ],
    "One Wall Management" => 
    [
    "image" => "onewall",
    "title" => "One Wall Management",
    "description" => "<p>American housing apartment management company with <b>4,000 multifamily units</b></p>",
    "link" => "https://www.onewallmanagement.com/",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "onewall_1.png",
      "onewall_2.png"
    ]
    ],
    "BentallGreenOak" => 
    [
    "image" => "bentall",
    "title" => "BentallGreenOak",
    "link" => "https://www.bentallgreenoakresidential.com/",
    "description" => "BGO Residential is one of the largest real estate investment companies in North America.",
    "disclaimer" => "In-house project for Landlord Web Solutions",
    "gallery" => [
      "bentall_1.png",
      "bentall_2.png",
      "bentall_3.png"
    ]
    ],
    "Falls Barbershop Niagara" => 
    [
    "image" => "barbershop",
    "title" => "Falls Barber Shop",
    "description" => "Wordpress site with customized text message booking system and SEO
     package getting <b>top Result on Google</b> for local Niagara Falls barbershop.",
    "link" => "https://fallsbarbershop.ca/",
    "disclaimer" => "",
    "gallery" => [
      "barbershop_1.png",
      "barbershop_2.png"
    ]
    ],
  
    
];?>

<div class="container">
    <div class="content centered">
    <h1>A selection of my work</h1>
    </div>
    
</div>
<div class="portfolio-container" data-gallery-path="<?php echo BASE_PATH;?>/assets/img/portfolio/gallery/">
<div class="row">
        
        <?php foreach($portfolio as $piece) {
            
            
            $key = $piece['image'];
            $title = $piece['title'];
            $description = isset($piece['description']) ? $piece['description'] : '';
            $link = $piece['link'];
            $screenshots = $piece['gallery'];
            $disclaimer = $piece['disclaimer'];
        
            
            ?>
        
        <div class="col-lg-4 col-md-12 mb-4 piece">
    
        <span title="<?php echo $disclaimer; ?>"  
        lightbox="<?php echo BASE_PATH.'assets/img/portfolio/'.$key.'.png';?>" 
         class="portfolio-opener open-lightbox" >
         
         <img class="img-fluid z-depth-1" src="../assets/img/portfolio/<?php echo $key.'.png';?>" alt="<?php echo $title;?>">
         
        </span>
        
        <?php foreach($screenshots as $image) { ?>
          <span class="hidden open-lightbox" lightbox="<?php echo BASE_PATH.'assets/img/portfolio/gallery/'.$image;  ?>"></span> 
        <?php } ?>
        
          <div class="portfolio-content">
            
          <h2><?php echo $title;?></h2>
          
          <h3><?php echo $description;?></h3>
          
          <a target="_blank" rel="nofollow" aria-label="Visit <?php echo $title;?>" 
          class="link btn" href="<?php echo $link;?>"><i class="fas fa-link"></i>Website</a>
          
          </div>         
          
          
          
          
          
        
        
       </div>
        <?php } ?>
        
    </div>
</div>




    
</section>