function apareceForm(){
    
    var $text = document.getElementsByClassName('btn-primary')[0];
    
    $text.style.left = "0px";
    $text.style.margin = "auto auto";
    $text.style.display = "flex";


      if(typeof $text == "string" ){
        apareceForm();
      } 
}