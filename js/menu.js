addEventListener('DOMContentLoaded', () => {
  const icon_menu = document.querySelector('.icon_menu');
  if (icon_menu) {
    btn_menu.addEventListener('click', () => {
      const menu_items = document.querySelector('.menu_items')
      menu_items.classList.toggle('show');
    });
  }
})