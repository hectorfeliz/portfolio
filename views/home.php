<section class="home">
<div class="container flex-wrap">

<div class="into-text  ">
    <h1 class="intro hover-bounce">
      Hector Feliz Recio </h1>
    <h2> Web Development, <span>eCommerce</span> & <span>WordPress</span></h2>
    
    <h3>
    Toronto
    </h3>
    
</div>

<div class=" folders-container">
<?php 


$skills = [
    "Key Skills" => 
    [
    "Website Development" => "web",
    "eCommerce Development" => "ecommerce",
    "Object-Oriented Programming" => "oop",
    "Search Engine Optimization" => "seo",
    "Email & Social Marketing" => "email",
    "Hosting & Maintenance" => "hosting"
    ],
    "Frontend" =>
    [
    "HTML"=> "html",
    "CSS" => "css",
    "LESS" => "less",
    "SASS" => "sass",
    "Bootstrap" => "bootstrap",
    "JavaScript" => "javascript",
    "jQuery" => "jquery",
    "Node.js" => "node",
    "Vue.js" => "vue",
    ],
    "Backend & CMS" =>
    [
    "PHP" => "php",
    "Wordpress" => "wordpress",
    "MySQL" => "sql",
    "cPanel" => "hosting"
    ],
    "eCommerce" =>
    [
    "Shopify" => "shopify",
    "Magento" => "magento",
    "WooCommerce" => "woo",
    "Payment Gateways" => "bill"
    ],
    "Email & Marketing" =>
    [
    "Mailchimp" => "mailchimp",
    "Drip" => "drip",
    "Social APIs" => "social",
    "Analytics" => "analytics"
    ],
    "OS & Other Tools" =>
    [
    "Windows" => "window",
    "Mac" => "apple",
    "Linux" => "linux",
    "Version Control" => "github",
    "PHPStorm" => "phpstorm",
    "VSCode" => "visual"
    ],
];

?>
    <div class="folders-wrap">
        
    <?php foreach($skills as $k => $sk) {?>
        <div class="folder" data-toggle="modal" data-category="<?php echo $k;?>" data-target="#skillsModal">
        <span class="folder-icon"></span>
        <span class="title">
        <?php echo $k;?>
        </span>
        </div>
    
    <?php } ?>
    
    <a class="folder resume" href="https://drive.google.com/file/d/15MMPs4tmDB11FMzJQODtc_VFmd8-WVcX/view?usp=sharing" target="_blank">
        <span class="resume-icon"></span>
        <span class="title">
        Resume
        </span>
    </a>
    
    
    
    </a>
</div>


</div>

<!-- Modal -->
<div class="modal skills fade" id="skillsModal" tabindex="-1" role="dialog" aria-labelledby="skillsModalLabel" aria-hidden="true">
  <div class="container modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"  id="skillsModalLabel">
        <h5 class="modal-title">My Skills</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="skills-wrap">
          
      <ul class="sidebar">
          
      </ul>
      
      <div class="skills-display" >
            <?php foreach($skills as $k => $group) { ?>
                <div class="skills-group" style="display:none;" data-category="<?php echo $k;?>">
                <?php foreach( $group as $skill => $svg) {
                    $svg_file = file_get_contents('assets/svg/skills/'.$svg.'.svg'); ?>
                    <div class="skill-container">
                        <div class="skill">
                        <?php echo $svg_file;?>
                            <span><?php echo $skill; ?></span>
                        </div>  
                    </div>
                <?php  } ?>
                </div>
        <?php  } ?>
   </div>
    
      
      </div>
      
      
      
      </div>
    
    </div>
  </div>
</div>

</section>