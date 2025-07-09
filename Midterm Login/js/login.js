const wrapper = document.querySelector('.wrapper');
const signin = document.querySelector('.signin-link');
const signup = document.querySelector('.signup-link');
const login = document.querySelector('.btnlogin')
const close = document.querySelector('.close')

close.addEventListener('click',()=>{
  wrapper.classList.remove('active-pop');
})

signup.addEventListener('click' ,()=> {
  wrapper.classList.add('active');
})

signin.addEventListener('click' ,()=> {
  wrapper.classList.remove('active');
})

login.addEventListener('click',() =>{
  wrapper.classList.add('active-pop');
})

const password = document.getElementById('password')
const toggle = document.getElementById('toggle')

// eyes from sighin

toggle.addEventListener('click' ,function(){
  if(password.type == 'password'){
    password.setAttribute('type','text');
    toggle.classList.add('fa-eye')
    toggle.classList.remove('fa-eye-slash')
  }else{
    password.setAttribute('type','password');
    toggle.classList.add('fa-eye-slash')
    toggle.classList.remove('fa-eye')
  }
})

// eyes from sighup

const jk= document.getElementById('jk')
const kj= document.getElementById('kj')

jk.addEventListener('click' ,function(){
  if(kj.type == 'password'){
    kj.setAttribute('type','text');
    jk.classList.add('fa-eye')
    jk.classList.remove('fa-eye-slash')
  }else{
    kj.setAttribute('type','password');
    jk.classList.add('fa-eye-slash')
    jk.classList.remove('fa-eye')
  }
})





