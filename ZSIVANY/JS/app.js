/************  SEND MAIL *************/ 

  function sendMail(){
  let name=$("#name");
  let email=$("#email");
  let message=$("#message");

if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(message)){ 

  $.ajax({
    url:"EMAIL/send_mail.php",
    method:'POST',
    dataType:"json",
    data:{
      name:name.val(),
      email:email.val(),
      message:message.val()
    }, success:function(response){

      
      

      if(response.status=="success"){
        // UI elements
        const btnSent = document.createElement('button')
        const cardAction = document.getElementById('main-form')
        const btnOld = document.getElementById('submit')
        //Create UI button
        btnSent.classList.add('btn') 
        btnSent.classList.add('btn-light') 
        btnSent.innerText = "Elkülve "
        btnSent.innerHTML += '<i class="fas fa-check"></i>'
        
        
        //Replace buttons
        cardAction.replaceChild(btnSent,btnOld);

        //setting time out
        setTimeout(originalState,2000)

        function originalState(){
          cardAction.replaceChild(btnOld,btnSent);
        }

        
     
    } else submitBtn.innerHTML='<span>Sikertelen <i class="fas fa-times"></i></span>';
  }
  });
}
}
function isNotEmpty(caller){ 
  if(caller.val()==""){
    caller.css('border','1px solid red');
    return false;
  }else{
    caller.css('border','')
    return true
  }
}
/************** Gallery counter**********/  

let counter = 1;
setInterval(function(){
  document.getElementById('radio'+ counter).checked = true;
  counter++;
  if(counter > 3){
    counter = 1;
  }
},4500);

/************** Burger menu****************/  

// UI elements
let navbar = document.querySelector('.navbar');
let closeMenu = document.querySelector('.closeMenu');
let openMenu = document.querySelector('.openMenu');
let arrowBtn = document.querySelector('.arrow-btn')

// event listeners

closeMenu.addEventListener('click',close);
window.addEventListener('scroll',scrollClose)
arrowBtn.addEventListener('click',close)

//functions
openMenu.onclick = function(){
  navbar.classList.toggle('display');
  if(toggle = true){
    navbar.style.display = 'flex'
  }else {
    navbar.style.display = 'none'
  }
}

function close(){
  navbar.style.top = '-100%';
}

function scrollClose(){
  if(window.scrollY >= 100){
    navbar.style.top = '-100%'
  }
}













