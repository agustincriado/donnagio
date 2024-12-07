document.addEventListener('DOMContentLoaded', () => {
  const setTheme = theme => document.documentElement.className = theme;
  document.getElementById('menu-btn').addEventListener('click', ({ target }) => {
    target.classList.toggle('active')
    document.querySelector('.link-container').classList.toggle('active')
  })
  document.querySelectorAll('.picker-btn').forEach(btn => btn.addEventListener('click', ({ target }) => {
    document.querySelector('.picker-btn.active').classList.remove('active')
    target.classList.add('active')
    console.log(target)
    setTheme(target.dataset.value)
  }))
})