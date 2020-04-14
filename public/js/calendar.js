var days = document.getElementsByClassName("day");

for (var i=0; i< days.length; i++) {
  days[i].addEventListener("click",function() {
    elementId = this.id.toString();
    child = document.getElementById(elementId).firstElementChild
    if(!child.classList.contains("disabledDays")){
      child.classList.toggle("active");
    }
    
  });
}

var checkbutton = document.getElementById("exampleCheck1");
var fastSearchActivate = document.getElementsByClassName("fastSearchActivate");
checkbutton.addEventListener("click", function(){
  var readOnly = document.getElementsByClassName("readOnly");
  for(var i = 0; i < readOnly.length; i++){
    readOnly[i].toggleAttribute('readonly');
  }

    fastMessages = ['1, 4, 6, ...', 'January, ...', '1', 'January'];

    if(fastSearchActivate[0].getAttribute('placeholder') == fastMessages[0]){
      fastSearchActivate[0].setAttribute('placeholder', fastMessages[2]);
      fastSearchActivate[1].setAttribute('placeholder', fastMessages[3]);
    }else{
      fastSearchActivate[0].setAttribute('placeholder', fastMessages[0]);
      fastSearchActivate[1].setAttribute('placeholder', fastMessages[1]);
    }

})




