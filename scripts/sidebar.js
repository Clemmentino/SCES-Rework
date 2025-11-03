document.addEventListener('DOMContentLoaded', function() {
  const sidebar = document.getElementById('sidebar');
  const menuToggle = document.getElementById('menu-toggle');
  const overlay = document.getElementById('overlay');

  // Desktop sidebar collapse
  document.querySelectorAll('#collapse, .sidebar-toggle').forEach(btn =>
    btn?.addEventListener('click', () => {
      sidebar?.classList.toggle('expanded');
      document.body.classList.toggle('sidebar-expanded');
    })
  );

  // Close sidebar when clicking outside
  document.addEventListener('click', (e) => {
    if (window.innerWidth >= 768 && sidebar) {
      if (!sidebar.contains(e.target) && !e.target.closest('.sidebar-toggle')) {
        sidebar.classList.remove('expanded');
        document.body.classList.remove('sidebar-expanded');
      }
    }
  });

  // Mobile menu toggle
  if (overlay) {
    overlay.addEventListener('click', () => {
      if (menuToggle) menuToggle.checked = false;
    });
  }

  if (menuToggle) {
    menuToggle.addEventListener('change', function() {
      document.body.style.overflow = this.checked ? 'hidden' : '';
    });
  }

  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768 && menuToggle) {
      menuToggle.checked = false;
      document.body.style.overflow = '';
    }
  });

  // Page navigation map (role-neutral)
  const pageMap = {
    dashboard: '../../my/pages/dashboard.php', // optional
    reports: '../../my/pages/reports.php',
    controlPanel: '../../my/pages/control.php',
    usersPanel: '../../my/pages/users.php',
    account: '../../my/pages/account.php'
  };

  // Navigation handling
  function navigate(target) {
    if (pageMap[target]) {
      window.location.href = pageMap[target];
    }
  }

  document.querySelectorAll('[data-target]').forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      navigate(item.getAttribute('data-target'));
    });
  });

  // Highlight active link
  const currentPage = window.location.pathname.split('/').pop();
  Object.entries(pageMap).forEach(([key, path]) => {
    const elements = document.querySelectorAll(`[data-target="${key}"]`);
    if (path.endsWith(currentPage)) {
      elements.forEach(el => el.classList.add('active'));
    } else {
      elements.forEach(el => el.classList.remove('active'));
    }
  });
});
