document.addEventListener('DOMContentLoaded', function() {
  const sidebar = document.getElementById('sidebar');
  const menuToggle = document.getElementById('menu-toggle');
  const overlay = document.getElementById('overlay');
  const collapseBtn = document.getElementById('collapse');
  const sidebarToggle = document.querySelector('.sidebar-toggle');

  // ===== DESKTOP SIDEBAR FUNCTIONALITY =====
  [collapseBtn, sidebarToggle].forEach(btn =>
    btn?.addEventListener('click', () => {
      sidebar?.classList.toggle('expanded');
      document.body.classList.toggle('sidebar-expanded');
    })
  );

  document.addEventListener('click', (e) => {
    if (window.innerWidth >= 768 && sidebar) {
      if (!sidebar.contains(e.target) && !e.target.closest('.sidebar-toggle')) {
        sidebar.classList.remove('expanded');
        document.body.classList.remove('sidebar-expanded');
      }
    }
  });

  // ===== MOBILE SIDEBAR FUNCTIONALITY =====
  if (overlay) {
    overlay.addEventListener('click', function() {
      if (menuToggle) menuToggle.checked = false;
    });
  }

  if (menuToggle) {
    menuToggle.addEventListener('change', function() {
      document.body.style.overflow = this.checked ? 'hidden' : '';
    });
  }

  window.addEventListener('resize', function() {
    if (window.innerWidth >= 768 && menuToggle) {
      menuToggle.checked = false;
      document.body.style.overflow = '';
    }
  });

  // ===== PAGE NAVIGATION (Separate PHP pages) =====
  const pageMap = {
    dashboard: '../../my/tech/dashboard.php',
    reports: '../../my/tech/reports.php',
    controlPanel: '../../my/tech/control.php',
    usersPanel: '../../my/tech/users.php',
    account: '../../my/tech/account.php'
  };

  function navigate(target) {
    if (pageMap[target]) {
      window.location.href = pageMap[target];
    }
  }

  // Handle clicks for both desktop and mobile nav
  document.querySelectorAll('.nav-item[data-target], .bottom-nav-item[data-target], .menu-link[data-target]')
    .forEach(item => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
        const target = item.getAttribute('data-target');
        navigate(target);
      });
    });

  // ===== ACTIVE LINK HIGHLIGHT =====
  const currentPage = window.location.pathname.split('/').pop(); // e.g. 'dashboard.php'
  Object.entries(pageMap).forEach(([key, path]) => {
    if (path.endsWith(currentPage)) {
      document.querySelectorAll(`[data-target="${key}"]`).forEach(el => el.classList.add('active'));
    } else {
      document.querySelectorAll(`[data-target="${key}"]`).forEach(el => el.classList.remove('active'));
    }
  });
});
