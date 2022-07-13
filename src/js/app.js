// Navbar jquery mobile resoponsive

if(document.querySelector('.navbar')){

  const menuButton = document.querySelector('#menuButton')
  const navbarContainer = document.querySelector('.navbar-nav')

  menuButton.addEventListener('click', function(){
    navbarContainer.classList.toggle('showNav')
  })

  // Sticky menu
  window.onscroll = function(){stickyMenu()}

  const navbar = document.querySelector('.navbar')
  const sticky = navbar.offsetTop
  const nextSection = document.querySelector('.about-container')
  
  function stickyMenu(){
    if(window.pageYOffset >= sticky){
      navbar.classList.add('sticky')
      nextSection.style.paddingTop = `${navbar.offsetHeight}px`;
    }else{
      navbar.classList.remove('sticky')
      nextSection.style.paddingTop = "initial";
    }
  }

}