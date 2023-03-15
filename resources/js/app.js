
/*
 *  Navigation
 */
window.addEventListener("load", function () {
  // Main Navigation Handler
  const main_navigation = document.querySelector("#primary-menu");
  const logo = document.querySelector("#logo");
  document.querySelector("#primary-menu-toggle").addEventListener("click", function (e) {
    e.preventDefault();
    main_navigation.classList.toggle("hidden");
    // Logo Animation
    logo.classList.toggle("is-active");
  });

  // Scroll to top handler
  const scroll_top_button = document.querySelector("#scrolltop");
  scroll_top_button.addEventListener('click', function(e) {
    e.preventDefault();
    window.scroll({
      top: 0, 
      left: 0, 
      behavior: 'smooth' 
     });
  });
  window.onscroll = function(){
    var top =	 window.pageYOffset || document.documentElement.scrollTop;
    if (top > 100) {
      scroll_top_button.classList.replace('hidden','block');
    } else {
      scroll_top_button.classList.replace('block','hidden');
    }
  };
});
/*
 *  Image Lightbox
 *  Used on single.php
 */
window.addEventListener("load", function () {
  // Exit immediately if not on lightbox page
  if (!document.querySelector('.single-post')) {
    return;
  }
  // Gather stuff
  const lightbox = document.querySelector('#lightbox');
  const overlay = document.querySelector('#lb-overlay');
  const imageBox = document.querySelector('#lb-image');
  const navigation = document.querySelector('#lb-nav');
  const closeButton = document.querySelector('#lb-close');
  const nextButton = document.querySelector('#lb-next');
  const prevButton = document.querySelector('#lb-prev');
  const images = document.querySelectorAll('.single-post .entry-content img');
  let current = 0;

  // Event Listeners
  for (var i = 0; i<images.length; i++) {
    images[i].setAttribute('data-imageindex', i);
    // Opening the lightbox
    images[i].addEventListener('click', function(e) {
      if (lightbox.classList.contains('is-closed')) {
        open_lightbox(e.target);
      } else {
        close_lightbox()
      }
    });
  }
  // Mouse
  closeButton.addEventListener('click', close_lightbox);
  overlay.addEventListener('click', close_lightbox);
  nextButton.addEventListener('click', next_image);
  prevButton.addEventListener('click', prev_image);

  // Keyboard
  document.onkeydown = function(e) {
    if (lightbox.classList.contains('is-open')) {
      switch(e.which) {
          case 37: // left
            prev_image();
          break;

          case 39: // right
            next_image();
          break;

          case 27: // esc
            close_lightbox();
          break;

          default: return; // exit this handler for other keys
      }
      e.preventDefault(); // prevent the default action (scroll / move caret)
    }
  }

  // Next Handler
  function next_image() {
    prevButton.classList.remove('hidden');
    if (current < (images.length - 1)) {
      current++;
      imageBox.style.backgroundImage = `url("${images[current].getAttribute('src')}")`;
      if (current == (images.length - 1)) {
        nextButton.classList.add('hidden');
      }
    }
  }

  // Previous Handler
  function prev_image() {
    nextButton.classList.remove('hidden');
    if (current > 0) {
      current--;
      imageBox.style.backgroundImage = `url("${images[current].getAttribute('src')}")`;
      prevButton.classList.remove('hidden');
      if (current == 0) {
        prevButton.classList.add('hidden');
      }
    }
  }

  // Open (excluding mobile)
  function open_lightbox(img, index) {
    if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
      current = img.getAttribute('data-imageindex');
      if (current == 0) { 
        prevButton.classList.add('hidden'); 
      }
      else if (current ==  (images.length - 1)) { 
        nextButton.classList.add('hidden'); 
      }
      else {
        prevButton.classList.remove('hidden');
        nextButton.classList.remove('hidden');
      }
      imageBox.style.backgroundImage = `url("${img.getAttribute('src')}")`;
      overlay.classList.replace('hidden','block');
      navigation.classList.replace('hidden','block');
      imageBox.classList.replace('hidden','block');
      document.querySelector('body').classList.add('overflow-hidden');
      lightbox.classList.add('is-open');
    }
  }

  // Close
  function close_lightbox() {
    overlay.classList.replace('block','hidden');
    navigation.classList.replace('block','hidden');
    imageBox.classList.replace('block','hidden');
    imageBox.style.backgroundImage = "";
    document.querySelector('body').classList.remove('overflow-hidden');
    lightbox.classList.remove('is-open');
  }
});