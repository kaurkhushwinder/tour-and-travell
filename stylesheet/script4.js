// Login form colling up to down
function showModal(){
    document.querySelector('.overlay').classList.add('showoverlay');
    document.querySelector('.wrapper').classList.add('showloginform');

  }
  function closeModal(){
    document.querySelector('.overlay').classList.remove('showoverlay');
    document.querySelector('.wrapper').classList.remove('showloginform');

  }
  var btnlogin=document.querySelector(".nav ");
  btnlogin.addEventListener("click",showModal)
  var btnlogin=document.querySelector(".nav1 ");
  btnlogin.addEventListener("click",showModal)

var c=document.querySelector("span");
c.addEventListener("click",closeModal);
