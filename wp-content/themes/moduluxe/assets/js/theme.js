(() => {
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.main-nav');
  if (!toggle || !nav) return;

  const closeMenu = () => {
    nav.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    nav.setAttribute('aria-hidden', 'true');
    toggle.setAttribute('aria-label', moduluxeData.menuLabelOpen);
    toggle.textContent = moduluxeData.menuLabelOpen;
  };

  toggle.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(isOpen));
    nav.setAttribute('aria-hidden', String(!isOpen));
    toggle.setAttribute('aria-label', isOpen ? moduluxeData.menuLabelClose : moduluxeData.menuLabelOpen);
    toggle.textContent = isOpen ? moduluxeData.menuLabelClose : moduluxeData.menuLabelOpen;
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeMenu();
      toggle.focus();
    }
  });

  document.addEventListener('click', (event) => {
    if (!nav.contains(event.target) && !toggle.contains(event.target)) {
      closeMenu();
    }
  });

  nav.setAttribute('aria-hidden', 'true');
})();
