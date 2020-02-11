<section class="portfolio">
    
<?php $portfolio = [
    "Mosaic Theme" => 
    [
    "image" => "mosaic",
    "description" => "<p>This theme features advanced apartment search features, city search, multi-language support and compatible with all modules of the platform.</p>",
    "title" => "Multi function rental website theme",
    "link" => "https://demo-mosaic.lws1.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "Neighbourhood Explorer" => 
    [
    "image" => "neighbourhoodexplorer",
    "description" => "<p>SaaS widget using various Google Maps APIs to to categorize and display businesses and amenities near listings for hundreds of clients </p>",
    "title" => "Custom map widget",
    "link" => "http://neighbourhoodexplorer.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "YourNextPlaceToLive" => 
    [
    "image" => "mvg",
    "title" => "Custom rental website",
    "link" => "https://yournextplacetolive.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "Oben" => 
    [
    "image" => "oben",
    "title" => "Custom rental website",
    "link" => "https://www.obenpm.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "Minto Apartments" => 
    [
    "image" => "minto",
    "title" => "Custom corporate website",
    "link" => "https://www.mintoapartments.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "Centurion Property" => 
    [
    "image" => "centurion",
    "title" => "Custom corporate and rental website",
    "link" => "https://www.cpliving.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "One Wall Management" => 
    [
    "image" => "onewall",
    "title" => "Custom corporate and rental website",
    "link" => "https://www.onewallmanagement.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "BentallGreenOak" => 
    [
    "image" => "bentall",
    "title" => "Custom corporate and rental website",
    "link" => "https://www.bentallgreenoakresidential.com/",
    "disclaimer" => "<p>This work was done while working for Landlord Web Solutions</p>"
    ],
    "SRC Vinyl" => 
    [
    "image" => "srcvinyl",
    "title" => "Fully custom eCommerce Website with Magento",
    "link" => "http://srcvinyl.com/",
    "disclaimer" => "<p>This work was done while working for SRC Vinyl</p>"
    ],
    "Vinyl Collective" => 
    [
    "image" => "vinylcollective",
    "title" => "Custom wordpress blog",
    "link" => "https://www.vinylcollective.com/",
    "disclaimer" => "<p>This work was done while working for SRC Vinyl</p>"
    ],
    "Vinyl Collective Boards" => 
    [
    "image" => "boards",
    "title" => "Forum & community site with Invision Community CMS",
    "link" => "http://boards.vinylcollective.com/",
    "disclaimer" => "<p>This work was done while working for SRC Vinyl</p>"
    ],
    "Falls Barbershop Niagara" => 
    [
    "image" => "barbershop",
    "title" => "Barbershop wordpress site with customized booking plugin, text and email notifications",
    "link" => "https://fallsbarbershop.ca/",
    "disclaimer" => "<p>This work was done for my own client</p>"
    ],
    
];?>

<div class="container">
    <div class="content centered">
    <h1>A selection of my work</h1>
    </div>
    
</div>
<div class="portfolio-container">
<div class="row">
        
        <?php foreach($portfolio as $name => $piece) {
            
            
            $key = $piece['image'];
            $title = $piece['title'];
            $description = isset($piece['description']) ? $piece['description'] : '';
            $link = $piece['link'];
            $disclaimer = $piece['disclaimer'];
        
            
            ?>
        
        <div class="col-lg-4 col-md-12 mb-4">
    
        <div class="modal portfolio fade" id="<?php echo $key;?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
    
        
            <div class="modal-content">
                
            <div class="modal-header">
            <h5 class="modal-title"><?php echo $name;?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            
              <div class="modal-body mb-0 p-0">
                
              <img class="moda-image image-responsive" src="../assets/img/portfolio/<?php echo $key.'.png';?>">
            
              </div>
    
              <div class="modal-footer justify-content-center">
                
                
                
                <div class="title-bar">
                <h3 class="mr-4"><?php echo $title;?></h3>
                <a target="_blank" rel="nofollow" class="link" href="<?php echo $link;?>"><i class="fas fa-link"></i>Visit</a>
                </div>
    
                <?php if(!empty($description)) echo $description; ?>
                
                <small><?php echo $disclaimer; ?></small>
            
               
              </div>
    
            </div>
    
    
          </div>
        </div>
    
        <a class="portfolio-opener" ><img class="img-fluid z-depth-1" src="../assets/img/portfolio/<?php echo $key.'.png';?>" alt="<?php echo $title;?>"
            data-toggle="modal" data-target="<?php echo '#'.$key;?>"></a>
        
        
       </div>
        <?php } ?>
        
    </div>
</div>




    
</section>