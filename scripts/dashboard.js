document.addEventListener('DOMContentLoaded', function() {

  // ===== UNIFIED NAVIGATION SYNC =====

  // Unified function to sync navigation and tabs across desktop and mobile
  function syncNavigation(targetId) {
    switchPanel(targetId);
    
    // Update active state for all navigation items (desktop sidebar, mobile bottom nav, tabs)
    document.querySelectorAll('.nav-item[data-target], .bottom-nav-item[data-target], .tab[data-target], .menu-link[data-target]')
      .forEach(el => {
        el.classList.toggle('active', el.getAttribute('data-target') === targetId);
      });
  }

  // Nav items (desktop sidebar and mobile navigation)
  document.querySelectorAll('.nav-item[data-target]').forEach(btn => {
    btn.addEventListener('click', () => {
      syncNavigation(btn.getAttribute('data-target'));
    });
  });

  // Bottom navigation items (mobile)
  document.querySelectorAll('.bottom-nav-item[data-target]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      syncNavigation(btn.getAttribute('data-target'));
    });
  });

  // Menu links (mobile hamburger menu)
  document.querySelectorAll('.menu-link[data-target]').forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      syncNavigation(link.getAttribute('data-target'));
    });
  });

  // Tabs (if you have tabs in your content)
  document.querySelectorAll('.tab[data-target]').forEach(tab => {
    tab.addEventListener('click', () => {
      syncNavigation(tab.getAttribute('data-target'));
    });
  });

  // Switch visible section
  function switchPanel(id) {
    document.querySelectorAll('.card-section').forEach(section => {
      section.classList.toggle('active', section.id === id);
    });
  }

});
