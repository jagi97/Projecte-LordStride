function apareceForm(){
    
    var $text = document.getElementsByClassName('btn-primary')[0];
    
    $text.style.left = "0px";
      if(typeof $text == "string" ){
        apareceForm();
      } 
}