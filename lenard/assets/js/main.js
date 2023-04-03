window.addEventListener('load', function() {
  //Dashboard Scripts
  if (document.getElementById('dashboard')) {
    activateNavLink('dashboard')
    const timeEl = document.querySelector('#time')
    const dateEl = document.querySelector('#date')

    setInterval(() => {
      const now = new Date()
      const day = now.toLocaleDateString('default', { weekday: 'long' })
      const date = now.getDate()
      const year = now.getFullYear()
      const month = now.toLocaleString('default', { month: 'long' })
      dateEl.innerHTML = `${day}, ${month} ${date}, ${year}`
      timeEl.innerHTML = now.toLocaleTimeString()
    }, 1000)
  }

  //Login Scripts
  if (document.getElementById('login')) {
    const eyeEl = document.querySelector('#password-toggler')
    const passwordEl = document.querySelector('#password')

    eyeEl.addEventListener('click', () => {
      if (passwordEl.type === "password") {
        passwordEl.type="text"
        eyeEl.classList.remove('fa-eye')
        eyeEl.classList.add('fa-eye-slash')
      } else {
        passwordEl.type="password"
        eyeEl.classList.remove('fa-eye-slash')
        eyeEl.classList.add('fa-eye')
      }
    })
  }
})


const activateNavLink = (page) => {
  const pageEl = document.querySelector(`[data-page=${page}]`)
  if (pageEl) {
    pageEl.classList.add('active')
  }
}