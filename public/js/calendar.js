// var fastSearchActivate = document.getElementsByClassName("fastSearchActivate");
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var days = document.getElementsByClassName("day");
var countMonths = 0;

for (var i=0; i< days.length; i++) {
  days[i].addEventListener("click",function() {
    elementId = this.id.toString();
    child = document.getElementById(elementId).firstElementChild
    if(!child.classList.contains("disabledDays")){
      child.classList.toggle("active");
    }
    
  });
}


var nextButton = document.getElementById("next");
var prevButton = document.getElementById("prev");
var userMonth = document.getElementById("userMonth");
var userYear = document.getElementById("userYear");

var date = new Date();
currentYear = date.getFullYear();
currentNumberMonth = date.getMonth() + 1;
userNumberMonth = months.indexOf(userMonth.innerHTML) + 1;
if(currentNumberMonth < 10 ){
  currentNumberMonth = "0" + currentNumberMonth;
}
if(userNumberMonth < 10 ){
  userNumberMonth = "0" + userNumberMonth;
}
currentDate =  currentYear.toString() + currentNumberMonth.toString();
userDate = userYear.innerHTML.toString() + userNumberMonth.toString();

nextButton.addEventListener("click", function(e) {
  this.style.color = "#1abc9c"
  setTimeout(function() {
    nextButton.style.color = "white"
  }, 100);
  countMonths = ++countMonths;
  // alert(countMonths);
});
prevButton.addEventListener("click", function(e) {
  if(currentDate < userDate){
    this.style.color = "#1abc9c"
    setTimeout(function() {    
      prevButton.style.color = "white"
    }, 100);
    countMonths = --countMonths;
  }
});

// var checkbutton = document.getElementById("exampleCheck1");
// checkbutton.addEventListener("click", function(){
//   var readOnly = document.getElementsByClassName("readOnly");
//   for(var i = 0; i < readOnly.length; i++){
//     readOnly[i].toggleAttribute('readonly');
//   }
 
    // fastMessages = ['1, 4, 6, ...', 'January, ...', '1', 'January'];

    // if(fastSearchActivate[0].getAttribute('placeholder') == fastMessages[0]){
    //   fastSearchActivate[0].setAttribute('placeholder', fastMessages[2]);
    //   fastSearchActivate[1].setAttribute('placeholder', fastMessages[3]);
    // }else{
    //   fastSearchActivate[0].setAttribute('placeholder', fastMessages[0]);
    //   fastSearchActivate[1].setAttribute('placeholder', fastMessages[1]);
    // }

// })




