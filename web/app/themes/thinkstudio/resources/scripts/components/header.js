const header = () => {
  const toggleMenuButtons = document.querySelectorAll('.toggle-menu');
  const mainMenu = document.querySelector('.main-menu');
  const submenuToggles = document.querySelectorAll('.submenu-toggle');

  if ((!toggleMenuButtons) || (!mainMenu)) return;

  const isTouchDevice = window.matchMedia('(hover: none)').matches;

  toggleMenuButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const isOpen = mainMenu.classList.contains('translate-y-0');

      if (isOpen) {
        document.querySelectorAll('.submenu-open').forEach(submenu => {
          submenu.classList.remove('submenu-open');
          submenu.closest('li').querySelector('a').classList.remove('bg-red');
        });
      }

      mainMenu.classList.toggle('translate-y-0');
      mainMenu.classList.toggle('-translate-y-full');
    });
  });

  document.addEventListener('click', (event) => {
    if (!mainMenu.contains(event.target) && !event.target.closest('.toggle-menu')) {
      mainMenu.classList.add('-translate-y-full');
      mainMenu.classList.remove('translate-y-0');

      document.querySelectorAll('.submenu-open').forEach(submenu => {
        submenu.classList.remove('submenu-open');
        submenu.closest('li').querySelector('a').classList.remove('bg-red');
      });
    }
  });

  if (isTouchDevice) {
    submenuToggles.forEach(button => {
      button.addEventListener('click', (event) => {
        event.stopPropagation();

        const parentLi = button.closest('li');
        const subMenu = parentLi.querySelector('.sub-menu');
        const link = parentLi.querySelector('a');

        document.querySelectorAll('.submenu-open').forEach(openSubmenu => {
          if (openSubmenu !== subMenu) {
            openSubmenu.classList.remove('submenu-open');
            openSubmenu.closest('li').querySelector('a').classList.remove('bg-red');
            openSubmenu.style.maxHeight = '0px';
          }
        });

        const isOpen = subMenu.classList.contains('submenu-open');

        if (isOpen) {
          subMenu.classList.remove('submenu-open');
          subMenu.style.maxHeight = '0px';
          link.classList.remove('bg-red');
        } else {
          subMenu.classList.add('submenu-open');
          subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
          link.classList.add('bg-red');
        }
      });
    });
  }
}

export default header;
