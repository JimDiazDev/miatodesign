document.addEventListener('DOMContentLoaded', function() {
    evenListeners();
})

function evenListeners () {
    navbar();
    slider(); 
    scroll();
}

const mainElement = document.querySelector('main');

const isHomePage = mainElement.classList.contains('homepage');
const isPortfolio = mainElement.classList.contains('portfolio');
const isServices = mainElement.classList.contains('services');
const isContact = mainElement.classList.contains('iscontact');
const isComercial = mainElement.classList.contains('comercial');


function navbar () {
    const button = document.querySelector('.nav__btn');
    const nav = document.querySelector('.nav__elements');
    const background = document.querySelector('.nav__background');

    const onScroll = (event) => {
      const navscroll = document.querySelector(".navscroll");
      const scrollPosition = event.target.scrollingElement.scrollTop;
  
      if (scrollPosition > 10) {
        if (!navscroll.classList.contains("scrolled-down")) {
          navscroll.classList.add("scrolled-down");
        }
      } else {
        if (navscroll.classList.contains("scrolled-down")) {
          navscroll.classList.remove("scrolled-down");
        }
      }
    };
  
    
    button.onclick = function () {
      nav.style.transform = "translateX(0)";
      background.style.display = "block";
    }
    
    background.onclick = function () {
      nav.style.transform = "translateX(170px)";
      background.style.display = "none";
    }

    document.addEventListener("scroll", onScroll);
}

function slider() {
    if(isHomePage) {
      const slider = document.querySelector(".portrate__slide");
      const arrowLeft = document.querySelector(".left");
      const arrowRight = document.querySelector(".right");
      let slideCounter = 1;
      const slideMove = [
        "translateX(0)",
        "translateX(-20%)",
        "translateX(-40%)",
        "translateX(-60%)",
        "translateX(-80%)",
      ];
    
      arrowRight.addEventListener('click', function () {
        if (slideCounter < 5) {
          slider.style.transform = slideMove[slideCounter];
          slideCounter++;
        } else if (slideCounter == 5) {
          slideCounter = 0;
          slider.style.transform = slideMove[slideCounter];
          slideCounter = 1;
        }
      });
    
      arrowLeft.addEventListener('click', function () {
        if (slideCounter == 2) {
          slider.style.transform = slideMove[0];
          slideCounter = 0;
        }
    
        if (slideCounter == 3) {
          slider.style.transform = slideMove[1];
          slideCounter--;
        }
    
        if (slideCounter == 4) {
          slider.style.transform = slideMove[2];
          slideCounter--;
        }
    
        if (slideCounter == 5) {
          slider.style.transform = slideMove[3];
          slideCounter--;
        }
    
        if (slideCounter == 1) {
          slideCounter = 5;
          slider.style.transform = slideMove[4];
        }
    
        if (slideCounter == 0) {
          slideCounter++;
        }
      });
    }
}

function scroll() {
  const uploadimage = (entry) => {
    entry.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  };

  const observer = new IntersectionObserver(uploadimage, {
    root: null,
    rootMargin: "0px",
    threshold: 0.3,
  });


  if(isHomePage) {
    const about = document.querySelector(".about");
    const links = document.querySelector(".links");
    observer.observe(about);
    observer.observe(links);
  }

  if(isPortfolio) {
    const options = document.querySelector(".portfolio__options");
/*     const proyects = document.querySelector(".proyects"); */
    observer.observe(options);
/*     observer.observe(proyects); */
  }

  if(isServices) {
    const st1 = document.querySelector(".st1");
    const st2 = document.querySelector(".st2");
    const st3 = document.querySelector(".st3");
    const st4 = document.querySelector(".st4");
    const si1 = document.querySelector(".si1");
    const si2 = document.querySelector(".si2");
    const si3 = document.querySelector(".si3");
    const si4 = document.querySelector(".si4");
    observer.observe(st1);
    observer.observe(st2);
    observer.observe(st3);
    observer.observe(st4);
    observer.observe(si1);
    observer.observe(si2);
    observer.observe(si3);
    observer.observe(si4);
  }

  if(isContact) {
    const contactText = document.querySelector(".contact__text");
    const contactAlways = document.querySelector(".contact__always");
    const contactEnd = document.querySelector(".contact__end");
    observer.observe(contactText);
    observer.observe(contactAlways);
    observer.observe(contactEnd);
  }

  if(isComercial) {
    const proyect2 = document.querySelector(".proyect__2");
    const proyect3 = document.querySelector(".proyect__3");
    observer.observe(proyect2);
    observer.observe(proyect3);
  }

}