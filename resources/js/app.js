import './bootstrap';

document.getElementById('darkModeToggle').addEventListener('click', function() {
    document.body.classList.toggle('dark');
  });
  
  if (window.darkMode) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  }