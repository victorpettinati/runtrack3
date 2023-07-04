window.addEventListener('scroll', function() {
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    const progressPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
    
    const progressBar = document.getElementById('progressBar');
    progressBar.style.width = progressPercentage + '%';
  });
  