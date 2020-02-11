/**
 * Created by hectorfeliz on 2020-01-25.
 */

const FileSystem = {
    "Documents": {
      
    },
    "Downloads": {
      
    },
    "Photos": {
      
    }
  }
 
 
 $(document).ready(function(){

    
    $(".hover-bounce").each(function(){
        
      
        $(this).blast({
            delimiter: "character",
            tag: "span"
        });
            
        
    });
    
    
    if($('.folders-container').length){
        
        var cats = [];
        
        $('.folders-container .folder:not(.resume)').each(function(){
            $('#skillsModal .skills-wrap ul').append("<li>"+$(this).data('category')+"</li>")
    
        });
        
        
        
        $('.folders-container .folders-wrap .folder').click(function(){
            var category =  $(this).data('category');
            showCategory(category);
        });
        
        
        
        $('.skills-wrap .sidebar li').click(function(){
            var category =  $(this).text().trim();
            showCategory(category);
        });
        

        
    }
    
    
   
    
    
 });
 
 function showCategory(category){
    $('.skills-display .skills-group').each(function(){      
        if($(this).data('category')  == category){
            $(this).show(300);
        }else{
            $(this).hide(300);
        }
    });
    
    $('.skills-wrap .sidebar li').each(function(){
        if($(this).text().trim() == category){
            $(this).addClass('active'); 
        }else{
            $(this).removeClass('active');
        }
    });
    
    
    $('.modal-content .modal-header .modal-title').text(category);
    
    
 }
 
