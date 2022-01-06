const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach((item) => {
  item.addEventListener('click', function () {
    switchers.forEach((item) =>
      item.parentElement.classList.remove('is-active'),
    )
    this.parentElement.classList.add('is-active')
  })
})
//////////get elemant/////////////////////////////////
//Input Fields
let firstName = document.querySelector('#first-name')
let signUpEmail = document.querySelector('#signup-email')
let signUpPassword = document.querySelector('#signup-password')
let loginEmail = document.querySelector('#login-email')
let loginPassword = document.querySelector('#login-password')

//Error spans in signup
let FirstREQ = document.querySelector('#FirstREQ')
let emailREQ = document.querySelector('#emailREQ')
let passwordREQ = document.querySelector('#passwordREQ')
let buttonSignUP = document.querySelector('.btn-login')
let buttonLogin = document.querySelector('.btn-signup')
let regexEmail = /^[A-z0-9._-]+@(gmail|yahoo).com$/
let regexPass = /^[A-z0-9!@#\$%&*.-_]{6,18}$/
//Error spans in login
let errMsg = document.querySelector('.errMsg')

//signup button
buttonSignUP.onclick = function(e){
  $state = true // true [signup success]
  if (firstName.value === '') {
    FirstREQ.innerHTML = `/ Please enter your name`
    $state = false;
  } else if (firstName.value.length < 3) {
    FirstREQ.innerHTML = `/ Your name must be at least 3 charcters`
    $state = false;
  } else {
    FirstREQ.innerHTML = ``
  }
  if (signUpEmail.value === '') {
    emailREQ.innerHTML = `/ Please enter your email`
    $state = false;
  }
  else if (regexEmail.test(signUpEmail.value)) {
      emailREQ.innerText = ''
  }
     else {
        emailREQ.innerText = '/ The email should be like Eg/example@gmail.com '
        $state = false;
  }
  if (signUpPassword.value === '') {
    passwordREQ.innerHTML = `/ Please enter your password`
    $state = false;
  } else {
    if (regexPass.test(signUpPassword.value)) {
      passwordREQ.innerHTML = ''
    } else {
      passwordREQ.innerText = `/ The password must have 6-18 character`
      $state = false;
    }
  }
  if ($state != true) {
      e.preventDefault();
  }
}

//login button
buttonLogin.onclick = function (e) {
      $state = true;
      if (loginEmail.value.trim() === '' || loginPassword.value.trim() === '') {
        errMsg.innerText = 'Please enter your email and password '
        $state = false;
      } 
      if($state != true) {
          e.preventDefault();
      }
}
