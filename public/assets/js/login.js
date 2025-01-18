const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");


// Preloader
sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    const mainContent = document.querySelector('.main-content');
    
    // Simulate loading time (you can adjust the timeout)
    setTimeout(() => {
      // Hide preloader
      preloader.style.opacity = '0';
      preloader.style.transition = 'opacity 0.5s ease-in-out';
      
      // Show main content
      mainContent.classList.add('show');
      
      // Remove preloader from DOM after animation
      setTimeout(() => {
        preloader.style.display = 'none';
      }, 500);
    }, 2000); // Adjust this time (in milliseconds) as needed
  });