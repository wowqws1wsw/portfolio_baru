// Scroll smoothly to an element by ID
function scrollToElement(id) {
  const element = document.getElementById(id);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

// Handle tab switching
function opentab(tabName) {
  const tabs = document.querySelectorAll('.tab-contents');
  const tabLinks = document.querySelectorAll('.tab-links');

  tabs.forEach((tab) => {
    tab.classList.toggle('active', tab.id === tabName);
  });

  tabLinks.forEach((link) => {
    link.classList.toggle(
      'active',
      link.getAttribute('onclick').includes(`'${tabName}'`)
    );
  });
}

// Initialize Feather icons
document.addEventListener('DOMContentLoaded', () => {
  feather.replace();
});
