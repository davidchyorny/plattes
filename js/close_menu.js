const toggleMenu = document.getElementById('toggle-menu');
const closeMenu = document.getElementById('close-menu');
const menu = document.getElementById('menu');

toggleMenu.addEventListener('change', function() {
  if (toggleMenu.checked) {
    menu.style.display = 'block'; // Показываем меню, когда чекбокс выбран
  } else {
    menu.style.display = 'none'; // Скрываем меню, когда чекбокс снят
  }
});

closeMenu.addEventListener('click', function() {
  toggleMenu.checked = false; // Снимаем выбор с чекбокса
  menu.style.display = 'none'; // Скрываем меню
});