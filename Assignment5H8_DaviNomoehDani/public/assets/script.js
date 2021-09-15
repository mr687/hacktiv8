const $ = document

$.addEventListener('DOMContentLoaded', async () => {
  const buttonMenu = $.querySelector('button.menu')
  buttonMenu.addEventListener('click', toggleMenu, false)
})

// ====== UTILITIES =======

function toggleMenu(e){
  const icon = this.firstElementChild
  const nav = $.querySelector('.navbar .nav')
  if (icon.classList.contains('fa-bars')){
    icon.classList.replace('fa-bars', 'fa-times')
    nav.style.display = 'flex'
  }else{
    icon.classList.replace('fa-times', 'fa-bars')
    nav.style.display = 'none'
  }
}

// ====== END UTILITIES =======