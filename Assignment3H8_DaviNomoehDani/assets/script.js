const $ = document
const pages = [
  'home',
  'blog',
  'gallery',
  'product',
  'inventory',
]
let page = 'home'

const profileData = {
  name: 'Davi Nomoeh Dani',
  role: 'Back End Developer',
  availability: 'Part Time',
  age: 21,
  location: 'Jawa Tengah, Indonesia',
  experience: 3,
  email: 'davinomoehdanino@gmail.com'
}

$.addEventListener('DOMContentLoaded', async () => {
  await loadPage()
  loadData(profileData)

  const profileEdit = $.getElementById('profile-edit')
  profileEdit.addEventListener('submit', saveData, false)

  const buttonMenu = $.querySelector('button.menu')
  buttonMenu.addEventListener('click', toggleMenu, false)

  $.addEventListener('click', router, false)
})

function loadData(data){
  if (!data) return
  const regexp = /(?<=profile-)[\S]*/
  $.querySelectorAll('.profile [class^="profile-"]')
    .forEach(x => {
      const name = regexp.exec(x.classList.value)[0]
      x.innerHTML = data[name] || ''
    })
  
  $.querySelectorAll('#profile-edit input')
    .forEach(x => {
      const name = x.name.trim().toLowerCase()
      x.value = profileData[name]
    })
}

function saveData(e){
  e.preventDefault()
  const target = e.target
  const formData = {}

  $.querySelectorAll('#profile-edit input')
    .forEach(x => {
      const name = x.name.trim().toLowerCase()
      const value = x.value.trim()
      formData[name] = value
    })

  Object.assign(profileData, formData)
  
  loadData(formData)
  alert('Profile updated succesful.')
}

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

async function router(e) {
  const target = e.target
  const expect = target.tagName.toUpperCase() === 'A'
  if (expect &&
    target.hasAttribute('href') &&
    pages.includes(target.getAttribute('href'))
  ){
    e.preventDefault()
    page = target.getAttribute('href')
    loadPage()
  }
}

async function loadPage(){
  const path = './pages/'
  const main = $.querySelector('main')
  main.innerHTML = await fetchHtmlAsText(`${path}${page}`)
  if (page === 'home'){
    loadData(profileData)
  }
}

async function fetchHtmlAsText(url) {
  return await (await fetch(url)).text();
}

// ====== END UTILITIES =======