<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@coreui/icons/css/all.min.css" rel="stylesheet">
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

  

  <style>
  

body {
  font-family: 'Montserrat', sans-serif;
  scroll-behavior: smooth;
  background-color: #111111;
  color: #FFFFFF;
  transition: background-color 0.3s ease, color 0.3s ease;
}

section {
  background-color: #111111;
  color: #FFFFFF;
  scroll-margin-top: 160px;
}

body,
section {
  transition: background-color 0.3s ease, color 0.3s ease;
}


body.light-mode {
  background-color: #EFEFEF;
  color: #111111;
}

body.dark-mode {
  background-color: #111111;
  color: #E0E0E0;
}

body.light-mode section {
  background-color: #EFEFEF !important;
  color: #111111 !important;
}


html,
body {
  width: 100%;
  max-width: 100%;
  overflow-x: hidden;
}

/* Mobile text scaling fix */
body {
  -webkit-text-size-adjust: 100%;
  text-size-adjust: 100%;
}

/* Tablet & large phones */
@media (max-width: 768px) {

  section {
    scroll-margin-top: 90px;
    padding-left: 1rem;
    padding-right: 1rem;
  }

  body,
  section {
    transition: background-color 0.2s ease, color 0.2s ease;
  }
}

/* Small phones */
@media (max-width: 480px) {

  section {
    scroll-margin-top: 70px;
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}



#navbar {
  transform: translateY(0);
}

#navbar.hidden {
  transform: translateY(-100%);
}

#navbar.scrolled {
  background-color: #1a1a1a;
  opacity: 0.95;
  box-shadow: 0 6px 18px rgba(255,255,255,0.15),
              0 10px 30px rgba(255,255,255,0.08),
              0 0 20px rgba(255,255,255,0.05);
}


nav {
  position: fixed;       /* FIXED so it stays on top */
  top: 0;                /* top of screen */
  left: 0;
  right: 0;
  width: 100%;
  max-width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.75rem 1rem;
  background-color: #1a1a1a;
  color: #E0E0E0;
  opacity: 0.95;
  border-radius: 0;      /* no rounded corners */
  z-index: 9999;         /* on top of everything */
  box-shadow: 0 6px 18px rgba(255,255,255,0.15),
              0 10px 30px rgba(255,255,255,0.08),
              0 0 20px rgba(255,255,255,0.05);
  transition: all 0.3s ease, transform 0.3s ease;
}

/* Scroll effect (optional) */
nav.scrolled {
  background-color: #1a1a1a;
  opacity: 1;
  box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}



nav a.active {
  color: #fff !important;
  text-shadow: 0 0 10px rgba(255,255,255,0.8);
}
body.light-mode nav a.active {
  color: #000 !important;
  text-shadow: 0 0 10px rgba(0,0,0,0.6);
}



nav::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  border-radius: inherit;
  box-shadow: 0 0 30px rgba(255,255,255,0.2);
  opacity: 0.4;
  transition: opacity 1.5s ease-in-out;
  pointer-events: none;
  z-index: -1;
  animation: pulseGlow 3s infinite ease-in-out;
}

nav:hover {
  transform: translateY(-5px);
}

nav:hover::before {
  opacity: 0.7; 
}


nav.scrolled {
  width: 100%;
  max-width: 100%;
  border-radius: 0;
  top: 0;
  left: 0;
  transform: translateX(0);
  opacity: 0.95;
  justify-content: space-between;

  box-shadow: 0 6px 18px rgba(255,255,255,0.15),
              0 10px 30px rgba(255,255,255,0.08),
              0 0 20px rgba(255,255,255,0.05);
}

body.light-mode nav {
  background-color: #EFEFEF !important;
  color: #111111 !important;
}

body.dark-mode nav {
  background-color: #1a1a1a;
  color: #E0E0E0;
}

nav .nav-left,
nav .nav-right {
  display: flex;
  align-items: center;
  gap: 1.5rem;
}


nav a {
  color: #A0A0A0; 
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s ease, transform 0.3s ease, text-shadow 0.3s ease;
}

nav a.hover-dark:hover {
  color: #E0E0E0;
  transform: scale(1.1);
  text-shadow: 1.5px 1.5px 6px rgba(224,224,224,0.5);
}

nav.light a.hover-light:hover {
  color: #111111;
  transform: scale(1.1);
  text-shadow: 2px 2px 10px rgba(0,0,0,0.6);
}


@keyframes pulseGlow {
  0% { opacity: 0.4; }
  50% { opacity: 0.6; }
  100% { opacity: 0.4; }
}

    .switch {
      position: relative;
      display: inline-block;
      width: 42px;
      height: 24px;
      vertical-align: middle;
    }

    .switch input { display:none; }


.slider {
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #555555;
  transition: .4s;
  border-radius: 34px;
  box-shadow: 0 0 8px #111111;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 3px;
  bottom: 3px;
  background-color: #FFFFFF; 
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #111111; 
}

input:checked + .slider:before {
  transform: translateX(18px);
}


body.dark-mode .slider {
  background-color: #A0A0A0;
  box-shadow: 0 0 8px #FFFFFF;
}

body.dark-mode .slider:before {
  background-color: #000000;
}

body.dark-mode input:checked + .slider {
  background-color: #FFFFFF;
}

body.dark-mode input:checked + .slider:before {
  transform: translateX(18px);
}


.dark input:checked + .slider:before {
  transform: translateX(18px);
}



@media (max-width: 1024px) {
  nav {
    width: 90%;
    max-width: 90%;
  }
}

/* Phones */
@media (max-width: 768px) {

  nav {
    width: calc(100% - 20px);
    max-width: calc(100% - 20px);
    border-radius: 12px;
    padding: 0.75rem 1rem;
    top: 10px;
  }

  nav.scrolled {
    width: 100%;
    max-width: 100%;
    border-radius: 0;
  }

  nav .nav-right {
    display: none !important;
  }

  nav a {
    font-size: 0.9rem;
  }

  #mobileMenuBtn {
    display: block;
  }
}

/* Small phones */
@media (max-width: 480px) {

  nav {
    padding: 0.6rem 0.8rem;
  }

  nav a {
    font-size: 0.85rem;
  }

  #mobileMenu {
    padding: 1.5rem 1rem;
  }
}

#mobileMenu {
  position: fixed;
  top: 80px;
  left: 50%;
  transform: translateX(-50%);
  width: calc(100% - 30px);
  max-width: 420px;
  border-radius: 15px;
  background: rgba(21,21,21,0.95);
  backdrop-filter: blur(12px);
  box-shadow:
    0 10px 30px rgba(255,255,255,0.08),
    0 0 20px rgba(255,255,255,0.04);
  z-index: 100;
}

body.light-mode #mobileMenu {
  background: rgba(239,239,239,0.95);
}

#mobileMenu a {
  font-size: 1rem;
  letter-spacing: 0.15em;
}

/* Smooth open animation */
#mobileMenu.show {
  display: flex !important;
  animation: mobileMenuFade 0.25s ease forwards;
}

@keyframes mobileMenuFade {
  from {
    opacity: 0;
    transform: translate(-50%, -10px);
  }
  to {
    opacity: 1;
    transform: translate(-50%, 0);
  }
}

/*BODY CSS ENDING */


/*HOME SECTIONS CSS START */
  #home {
    background-color: #111111; 
    transition: background-position 0.1s ease;
    scroll-margin-top: 160px;
  }

  #intro-text, #main-title, #description {
    text-shadow: 0 0 6px #A0A0A0;
  }

.home-button { 
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #111111; 
  color: #FFFFFF;     
  width: 140px;        /* base width */
  max-width: 80%;      /* don’t exceed screen */
  min-width: 100px;    /* minimum width */
  height: 50px;        /* base height */
  min-height: 40px;
  padding: 0 0.8rem;   
  margin: 4px;
  border-radius: 8px; 
  font-weight: bolder;
  font-size: 1rem;      /* base font size */
  text-transform: uppercase;
  white-space: nowrap;
  overflow: hidden;      /* prevent overflow */
  text-overflow: ellipsis;
  box-shadow:
    inset -2px -2px 4px rgba(0,0,0,0.7),
    inset 2px 2px 4px rgba(255,255,255,0.05),
    0 4px 8px rgba(0,0,0,0.7);
  transition: all 0.15s ease;
  cursor: pointer;
}

.home-button:hover {
  transform: translateY(-2px);
  box-shadow:
    inset -3px -3px 5px rgba(0,0,0,0.9),
    inset 3px 3px 6px rgba(255,255,255,0.1),
    0 8px 12px rgba(0,0,0,0.9);
}

.home-button:active {
  transform: translateY(2px);
  box-shadow:
    inset 3px 3px 5px rgba(0,0,0,0.8),
    inset -3px -3px 5px rgba(255,255,255,0.05),
    0 2px 5px rgba(0,0,0,0.7);
}

/* Light mode */
body.light-mode .home-button {
  background: #E0E0E0;
  color: #111111;
  box-shadow:
    inset -2.5px -2.5px 4px rgba(85,85,85,0.5),
    inset 2.5px 2.5px 6px rgba(255,255,255,0.6),
    0 4px 8px rgba(85,85,85,0.6);
}

/* Tablet screens */
@media (max-width: 768px) {
  .home-button {
    width: 40vw;
    height: 10vw;
    font-size: 0.85rem;  /* smaller text */
    text-align: center;
    
  }
}

/* Small mobile screens */
@media (max-width: 480px) {
  .home-button {
    width: 50vw;           /* wider so text fits */
    height: 12vw;
    font-size: 0.4rem;     /* very small text for tiny screens */
    padding: 0.2rem 0.3rem;
    white-space: normal;   /* allow wrapping if needed */
    text-align: center;
  }
}


body.light-mode .home-button:hover {
  transform: translateY(-2px);
  box-shadow:
    inset -2.5px -2.5px 4px rgba(85,85,85,0.6),
    inset 2.5px 2.5px 7px rgba(255,255,255,0.8),
    0 6px 12px rgba(85,85,85,0.7);
}

body.light-mode .home-button:active {
  transform: translateY(2px);
  box-shadow:
    inset 2px 2px 5px rgba(85,85,85,0.5),
    inset -2px -2px 5px rgba(255,255,255,0.3),
    0 2px 5px rgba(85,85,85,0.5);
}

@media (max-width: 640px) {
  .home-button {
    width: 100px;
    height: 50px;
    font-size: 16px;
  }
}

  body.light #home {
    background-color: #E0E0E0;
  }
  body.light .text-shadow-mode {
    color: #111111;
    text-shadow: 0 0 6px #FFFFFF;
  }

  body.dark #home {
    background-color: #111111;
  }
  body.dark .text-shadow-mode {
    color: #FFFFFF;
    text-shadow: 0 0 6px #111111;
  }

 
  .text-shadow-mode {
    transition: color 0.3s ease, text-shadow 0.3s ease;
  }


.button-row {
  display: flex;
  align-items: center;
  gap: 18px;
  margin-top: 15px;
}

.vertical-separator {
  width: 2px;
  height: 48px;
  background: #3A3A3A;
  border-radius: 2px;
}


body.light-mode .vertical-separator {
  background: #A0A0A0;
}


.link-buttons-container {
  display: flex;
  gap: 12px;
}

.link-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #111111;
  color: #FFFFFF;
  width: 50px;
  height: 50px;
  border-radius: 8px;
  font-size: 22px;
  text-decoration: none;
  cursor: pointer;

  box-shadow:
    inset -2px -2px 4px rgba(0,0,0,0.7),
    inset 2px 2px 4px rgba(255,255,255,0.05),
    0 4px 8px rgba(0,0,0,0.7);

  transition: all 0.15s ease;
}

.link-button:hover {
  transform: translateY(-2px);
  box-shadow:
    inset -3px -3px 5px rgba(0,0,0,0.9),
    inset 3px 3px 6px rgba(255,255,255,0.1),
    0 8px 12px rgba(0,0,0,0.9);
}

.link-button:active {
  transform: translateY(2px);
  box-shadow:
    inset 3px 3px 5px rgba(0,0,0,0.8),
    inset -3px -3px 5px rgba(255,255,255,0.05),
    0 2px 5px rgba(0,0,0,0.7);
}

body.light-mode .link-button {
  background: #E0E0E0;
  color: #111111;
  box-shadow:
    inset -2.5px -2.5px 4px rgba(85,85,85,0.5),
    inset 2.5px 2.5px 6px rgba(255,255,255,0.6),
    0 4px 8px rgba(85,85,85,0.6);
}

body.light-mode .link-button:hover {
  transform: translateY(-2px);
  box-shadow:
    inset -2.5px -2.5px 4px rgba(85,85,85,0.6),
    inset 2.5px 2.5px 7px rgba(255,255,255,0.8),
    0 6px 12px rgba(85,85,85,0.7);
}

@media (max-width: 640px) {
  .link-button {
    width: 45px;
    height: 45px;
    font-size: 20px;
  }

  .vertical-separator {
    height: 40px;
  }
}
  /* HOME SECTION CSS ENDING */

    
</style>
    

<!---ABOUT SECTIONS CSS START--->
<style>
  #about-section {
    width: 100%;
    min-height: 100vh;
    padding: 8rem 1.5rem 4rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: visible;
    transition: 0.6s ease;
  }

  #about-title,
  .year-cards-container,
  .year-card {
    position: relative;
    z-index: 2;
  }

  #about-title.active {
    top: 6rem;
    left: 40%;
    transform: translateX(-50%);
    font-size: 4rem;
  }

  body.light-mode #about-section {
    background-color: #EFEFEF;
    color: #111111;
  }

  body.dark-mode #about-section {
    background-color: #111111;
    color: #E0E0E0;
  }

  #about-title {
    font-size: 4rem;
    font-weight: 700;
    cursor: pointer;
    text-align: center;
    z-index: 3;
    position: absolute;
    top: 45%;
    transform: translateY(-50%);
    transition: 0.6s ease;
    text-shadow: 0 0 12px rgba(255,255,255,0.15);
  }

  body.light-mode #about-title {
    color: #111111;
  }

  body.dark-mode #about-title {
    color: #E0E0E0;
  }

  #about-title.active {
    top: 2rem;
    transform: translateY(0);
  }

  .year-cards-container {
    width: 100%;
    max-width: 900px;
    margin-top: 10rem;
    display: flex;
    flex-direction: column;
    gap: 2rem;
    opacity: 0;
    transition: 0.6s ease;
    pointer-events: none;
    flex-wrap: wrap;
    position: relative;
    padding-left: 0;
    padding-right: 0;
  }

  .year-cards-container.show {
    opacity: 1;
    pointer-events: auto;
  }

  .year-cards-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 10px;
    height: 100%;
    background-color: #000;
    z-index: 1;
    border-radius: 6px;
    border: 2px solid #5f5f5fff;
  }

  body.light-mode .year-cards-container::before {
  background-color: #111111;
}

body.dark-mode .year-cards-container::before {
  background-color: #FFFFFF;
}

.year-card::after {
  content: '';
  position: absolute;
  top: 1.5rem; 
  left: 50%;
  transform: translateX(-50%);
  width: 12px;
  height: 12px;
  border-radius: 50%;
  z-index: 3;
}

body.light-mode .year-card::after {
  background-color: #FFFFFF;
  border: 3px solid #111111;
}


body.dark-mode .year-card::after {
  background-color: #111111;
  border: 3px solid #FFFFFF;
}

  .year-card {
    padding: 1.7rem;
    position: relative;
    border-radius: 16px;
    background: rgba(255,255,255,0.03);
    backdrop-filter: blur(10px);
    opacity: 0;
    transform: translateX(-50%);
    margin: 2rem 0;
    z-index: 2;
    transform: translateY(20px);
    transition: 0.3s ease;
    position: relative;
    overflow: hidden; 
  }

  body.light-mode .year-card h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #111; 
  }

  body.dark-mode .year-card h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #fff; 
  }

  body.light-mode .year-card p {
    font-size: 1rem;
    line-height: 1.6;
    text-align: justify;
    color: #111; 
  }

  body.dark-mode .year-card p {
    font-size: 1rem;
    line-height: 1.6;
    text-align: justify;
    color: #fff; 
  }

  body.light-mode .year-card {
    color: #111111;
    background: #FFF;
    backdrop-filter: blur(12px);
    border: 1px solid #555555;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15); 
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, z-index 0.3s ease;
    position: relative;
  }

  body.dark-mode .year-card {
    color: #E0E0E0;
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(12px);
    border: 1px solid #A0A0A0;
    box-shadow: 0 10px 35px rgba(255,255,255,0.10);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, z-index 0.3s ease;
    position: relative;
  }

  .year-card.show {
    opacity: 1;
    transform: translateY(0);
  }

  body.light-mode .year-card:hover {
    transform: scale(1.8);
    border-color: #111111;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25); 
    z-index: 10;
  }


  body.dark-mode .year-card:hover {
    transform: scale(1.8);
    border-color: #E0E0E0;
    box-shadow: 0 12px 40px rgba(255,255,255,0.18);
    z-index: 10; 
  }

  .year-card p {
    line-height: 1.5rem;
  }

  .year-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -75%;
    width: 50%;
    height: 100%;
    background: linear-gradient(
      120deg,
      rgba(255,255,255,0) 0%,
      rgba(255,255,255,0.25) 50%,
      rgba(255,255,255,0) 100%
    );
    transform: skewX(-25deg);
    pointer-events: none;
  }

  body.light-mode .year-card::before {
    background: linear-gradient(
      120deg,
      rgba(255,255,255,0) 0%,
      rgba(160,160,160,0.25) 50%, 
      rgba(255,255,255,0) 100%
    );
  }


  body.dark-mode .year-card::before {
    background: linear-gradient(
      120deg,
      rgba(255,255,255,0) 0%,
      rgba(255,255,255,0.12) 50%,
      rgba(255,255,255,0) 100%
    );
  }

  .year-card:hover::before {
    animation: slide-glass 1s linear infinite;
  }

  @keyframes slide-glass {
    0% {
      left: -75%;
    }
    100% {
      left: 125%;
    }
  }

 #sub-about-title {
  font-size: 1.5rem;
  font-weight: 400;
  margin-top: 2rem; 
  text-align: center;
  z-index: 3;
  position: relative;
  opacity: 0;
  transform: translateY(-10px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

body.light-mode #sub-about-title {
  color: #111111;
}

body.dark-mode #sub-about-title {
  color: #FFFFFF;
}

#sub-about-title.show {
  opacity: 1;
  transform: translateY(0);
}


@media (max-width: 768px) {
  #about-title {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    transform: none !important;

    width: 100%;
    text-align: center;

    font-size: 5rem;
    margin-bottom: 0.5rem;
  }

  #about-title.active {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    transform: none !important;

    font-size: 2.4rem;
  }

  #sub-about-title {
    font-size: 1.1rem;
    margin-top: 0.5rem;
    padding: 0 1rem;
    text-align: center;
  }
}

/* EXTRA SMALL DEVICES */
@media (max-width: 480px) {
  #about-title,
  #about-title.active {
    font-size: 4rem;
  }

  #sub-about-title {
    font-size: 1.5rem;
  }
}

</style>
<!---ABOUT SECTIONS CSS ENDING--->



<!---SKILLS SECTIONS CSS START --->
<style>
#skills {
  width: 100%;
  min-height: 100vh;
  padding: 6rem 1.5rem 4rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  position: relative;
}

.skills-header {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 1s ease forwards;
  animation-delay: 0.2s;
}

body.light-mode .skills-header h2,
body.light-mode .skills-header p {
  color: #000;
  opacity: 1;
}

body.dark-mode .skills-header h2,
body.dark-mode .skills-header p {
  color: #fff;
  opacity: 1; 
}


.skills-header h2 {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: .5rem;
}

.skills-header p {
  font-size: 1.1rem;
  opacity: 0.8;
}

.skills-grid {
  width: 100%;
  max-width: 1100px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 2rem;
  margin-top: 3rem;
}

.skill-card {
  padding: 2rem 1rem;
  max-width: 200px;
  width: 100%;
  border-radius: 22px;
  text-align: center;
  backdrop-filter: blur(12px);
  transition: transform 0.35s ease, box-shadow 0.35s ease, border 0.35s ease, background 0.35s ease;
  opacity: 0;
  transform: translateY(30px) scale(0.95);
  border: 1px solid transparent;
  position: relative;
  overflow: hidden;
  margin: 0 auto;
}




/* Light mode skill-card */
body.light-mode .skill-card {
  background: #EFEFEF;
  border: 1px solid rgba(0,0,0,0.1);
  color: #111111; /* card text color */
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  backdrop-filter: blur(12px);
  position: relative;
  overflow: hidden;
  transition: transform 0.35s ease,
              box-shadow 0.35s ease,
              border 0.35s ease,
              background 0.35s ease,
              color 0.35s ease;
}


body.light-mode .skill-card:hover {
  transform: translateY(-8px) scale(1.04);
  box-shadow: 0 25px 60px rgba(17,17,17,0.4);
}

/* Dark mode skill-card (already has transition) */
body.dark-mode .skill-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid #EFEFEF;
  color: #E0E0E0;
  box-shadow: 0 10px 35px rgba(255,255,255,0.08);
  transition: transform 0.35s ease,
              box-shadow 0.35s ease,
              border 0.35s ease,
              background 0.35s ease,
              color 0.35s ease;
}

body.dark-mode .skill-card:hover {
  background: rgba(255,255,255,0.08);
  box-shadow: 0 15px 45px rgba(255,255,255,0.25);
  transform: translateY(-8px) scale(1.04);
}


.skill-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    120deg,
    rgba(160,160,160,0.1) 0%,
    rgba(160,160,160,0.25) 50%,
    rgba(160,160,160,0.1) 100%
  );
  transform: skewX(-20deg);
  transition: all 0.6s ease;
  pointer-events: none;
}

.skill-card:hover::before {
  left: 125%;
}

body.dark-mode .skill-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid #A0A0A0;
  color: #E0E0E0;
  box-shadow: 0 10px 35px rgba(255,255,255,0.08);
}

body.light-mode .skill-card {
  background: #FFFFFF;
  border: 1px solid #555555;
  color: #111111;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.skill-card:hover {
  transform: translateY(-8px) scale(1.04);
  box-shadow: 0 15px 45px rgba(0,0,0,0.25);
}

.skill-card i {
  font-size: 4rem; 
  margin-bottom: 1rem;
  transition: transform 0.35s ease, color 0.35s ease;
}

.skill-card:hover i {
  transform: scale(1.25) rotate(10deg); 
}

.skill-card h3 {
  font-size: 1.3rem;
  font-weight: 700; 
  margin: 0;
  transition: color 0.35s ease, transform 0.35s ease;
}

.skill-card:hover h3 {
  transform: scale(1.05);
}

.skill-card.visible {
  opacity: 1;
  transform: translateY(0) scale(1);
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.skills-wrapper {
  width: 100%;
  max-width: 1200px;
  margin-top: 3rem;
  display: flex;
  flex-direction: column;
  gap: 4rem;
}

.category-title {
  font-size: 2.2rem;
  font-weight: 700;
  text-align: left;
  margin-bottom: 1rem;
  position: relative;
  width: fit-content;
  opacity: 0;
  transform: translateY(10px);
  animation: fadeUp 1s ease forwards;
}

.category-title::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -8px;
  height: 4px;
  width: 0%;            
  border-radius: 10px;
  transition: width 0.5s ease; 
}

body.light-mode .category-title::after {
  background: linear-gradient(90deg, #111111, #555555);
}

body.dark-mode .category-title::after {
  background: linear-gradient(90deg, #E0E0E0, #A0A0A0);
}

.category-title.visible::after {
  width: 100%;  
}

.category-title::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -8px;
  height: 4px;
  width: 0%;     
  border-radius: 10px;
  transition: width 0.5s ease; 
}

body.light-mode .category-title::after {
  background: linear-gradient(90deg, #111111, #555555);
}

body.dark-mode .category-title::after {
  background: linear-gradient(90deg, #E0E0E0, #A0A0A0);
}

.category-title.visible::after {
  width: 100%;
}

.fade-left, .fade-right {
  opacity: 0;
  transform: translateX(40px);
  transition: all 0.9s ease;
}

.fade-right {
  transform: translateX(-40px);
}

.fade-left.visible,
.fade-right.visible {
  opacity: 1;
  transform: translateX(0);
}

.skill-category .skills-grid {
  grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
  gap: 1.5rem;
  justify-items: center;
}

.skill-category .skill-card i {
  font-size: 2.5rem;
  color: inherit;
  transition: transform 0.35s ease, color 0.35s ease;
}

.skill-category .skill-card:hover i {
  transform: scale(1.25) rotate(10deg);
}

.skill-category .skill-card h3 {
  font-size: 1rem;
  font-weight: 600;
  margin: 0;
  color: inherit;
  transition: transform 0.35s ease;
}

.skill-category .skill-card:hover h3 {
  transform: scale(1.05);
}

body.light-mode .skill-category .skill-card:hover {
  box-shadow: 0 20px 55px rgba(17,17,17,0.45);
  background: rgba(160,160,160,0.08); 
}

body.dark-mode .skill-category .skill-card:hover {
  box-shadow: 0 15px 50px rgba(255,255,255,0.25);
  background: rgba(255,255,255,0.08);
}

@media (max-width: 500px) {
  .skill-category .skill-card i {
    font-size: 2rem;
  }
  .skill-category .skill-card h3 {
    font-size: 0.9rem;
  }
}



</style>
<!---SKILLS SECTIONS CSS ENDING --->



<!---CERTIFICATES SECTIONS CSS START --->
<style>

.certificate-header .cert-title {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  color: #111111; /* default light mode */
  transition: color 0.5s ease;
}

/* Light mode headers */
body.light-mode .certificate-header .cert-title {
  color: #111111;
}


/* Dark mode headers (optional, ensures white on dark background) */
body.dark-mode .certificate-header .cert-title {
  color: #FFFFFF;
}


.certificate-header .cert-subtitle {
  font-size: 1.25rem;
  font-weight: bolder;
  margin-bottom: 0.5rem;
  color: #111111;
  transition: color 0.5s ease;
  text-align: center;
  max-width: 700px;
  display: block;
  margin: 0 auto;
  line-height: 1.6;
}

/* Light mode */
body.light-mode .certificate-header .cert-subtitle {
  color: #111;
}

/* Dark mode */
body.dark-mode .certificate-header .cert-subtitle {
  color: #E0E0E0;
}


#certificate {
  width: 100%;
  min-height: 100vh;
  padding: 4rem 1rem;
  display: block;
  position: relative;
  transition: background-color 0.5s ease;
}


.certificate-card {
  flex: 1 1 calc(20% - 1.5rem);
  max-width: 280px;
  min-height: 250px;
  background: linear-gradient(145deg, #1a1a1a, #222222);
  color: #E0E0E0;
  border-radius: 1rem;
  padding: 1.5rem 1rem;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  gap: 1rem;
  margin-top: 2rem;
  overflow: hidden;
  position: relative;
  justify-content: space-between;
  align-items: center;
  box-shadow: 6px 6px 15px rgba(0,0,0,0.5), -6px -6px 15px rgba(255,255,255,0.05);
  transition: transform 0.35s ease, box-shadow 0.35s ease, background 0.5s ease, color 0.5s ease, border 0.5s ease; /* smooth mode switch */
  z-index: 1;
}

.matrix-canvas {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.certificate-header,
.certificate-cards,
.certificate-card {
  position: relative;
  z-index: 10;
}

.certificate-card::before {
  content: "";
  position: absolute;
  inset: 0;
  z-index: 0; /* behind text */
  opacity: 0;
  transform: translateX(-100%) skewX(-18deg);
  transition: transform 0.7s ease, opacity 0.7s ease;
  pointer-events: none;
  border-radius: inherit;
  filter: blur(6px);
}

/* Light mode gloss streak */
body.light-mode .certificate-card::before {
  background: linear-gradient(
    115deg,
    rgba(160,160,160,0.15) 0%,
    rgba(160,160,160,0.45) 40%,
    rgba(160,160,160,0.05) 100%
  );
}


/* Dark mode gloss streak */
body.dark-mode .certificate-card::before {
  background: linear-gradient(
    115deg,
    rgba(255,255,255,0.15) 0%,
    rgba(255,255,255,0.35) 40%,
    rgba(255,255,255,0.10) 100%
  );
}

body.dark-mode .certificate-card:hover {
  box-shadow:
    0 0 12px rgba(255,255,255,0.15),
    0 0 25px rgba(255,255,255,0.07),
    inset 0 1px 2px rgba(255,255,255,0.15);
}


/* Move the light streak on hover */
.certificate-card:hover::before {
  transform: translateX(120%) skewX(-18deg);
  opacity: 1;
}

/* Ensure text is above */
.certificate-card > * {
  position: relative;
  z-index: 2;
}


.certificate-card:hover {
  transform: translateY(-6px) scale(1.01);
  box-shadow:
    8px 8px 20px rgba(0,0,0,0.6),
    -8px -8px 20px rgba(255,255,255,0.08);
  border-color: #E0E0E0;
}

/* Certificate text */
.certificate-title {
  font-weight: 600;
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
  margin-top: 0.8rem;
  text-align: center;
  position: relative;
  display: inline-block;
}

.certificate-title::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -6px;
  width: 0%;
  height: 2px;
  background-color: currentColor;
  transition: width 0.35s ease, left 0.35s ease;
}

.certificate-card:hover .certificate-title::after {
  width: 100%;
  left: 0;
}

.certificate-card::after {
  content: "";
  position: absolute;
  inset: 0;
  background-image: linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px),
                    linear-gradient(180deg, rgba(255,255,255,0.03) 1px, transparent 1px);
  background-size: 12px 12px;
  opacity: 0;
  pointer-events: none;
  border-radius: inherit;
  opacity: 0;
  transition: opacity 1s ease;
  z-index: 5;
}

.certificate-card.overlay-dark::after {
  background-color: rgba(255, 255, 255, 0.5); /* white 50% */
  opacity: 1;
}

.certificate-card.overlay-light::after {
  background-color: rgba(17, 17, 17, 0.5); /* #111 50% */
  opacity: 1;
}


.certificate-card:hover::after {
  opacity: 0.07;
}


#certificate:hover .cert-title {
  text-shadow: 0 0 6px rgba(255,255,255,0.45);
}

#certificate:hover .cert-subtitle {
  text-shadow: 0 0 4px rgba(255,255,255,0.25);
}


/* Certificate info color based on mode */
.certificate-info {
  font-size: 0.95rem;
  text-align: center;
  font-weight: bolder;
  margin-bottom: 1.5rem; /* spacing above button */
  color: #E0E0E0; /* default dark mode text */
}

/* Light mode */
body.light-mode .certificate-info {
  color: #111111; /* dark text in light mode */
}

/* Dark mode */
body.dark-mode .certificate-info {
  color: #FFFFFF; /* white text in dark mode */
}

/* Verify button */
.verify-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #111111;
  color: #FFFFFF;
  width: 160px;
  height: 60px;
  border-radius: 12px;
  font-weight: 700;
  font-size: 16px;
  text-transform: uppercase;
  box-shadow: inset -2px -2px 5px rgba(0,0,0,0.7), inset 2px 2px 4px rgba(255,255,255,0.05), 0 5px 12px rgba(0,0,0,0.7);
  transition: all 0.5s ease; /* smooth mode switch */
  cursor: pointer;
}

.verify-btn:hover {
  transform: translateY(-2px);
  box-shadow:
    inset -3px -3px 6px rgba(0,0,0,0.9),
    inset 3px 3px 6px rgba(255,255,255,0.1),
    0 8px 15px rgba(0,0,0,0.9);
}

.verify-btn:active {
  transform: translateY(2px);
  box-shadow:
    inset 3px 3px 5px rgba(0,0,0,0.8),
    inset -3px -3px 5px rgba(255,255,255,0.05),
    0 2px 5px rgba(0,0,0,0.7);
}


body.light-mode .certificate-card {
  background: linear-gradient(145deg, #FFFFFF, #E6E6E6);
  color: #000;
  border: 2px solid rgba(0, 0, 0, 0.35);
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.3), 0 3px 6px rgba(0, 0, 0, 0.1), inset 0 1px 2px rgba(255,255,255,0.8);
}

  body.dark-mode .certificate-card {
    border: 1px solid rgba(255, 255, 255, 1);
  }

/* Hover adds more depth */
body.light-mode .certificate-card:hover {
  box-shadow:
    0 10px 30px rgba(0, 0, 0, 0.28),
    0 4px 8px rgba(0, 0, 0, 0.14),
    inset 0 1px 2px rgba(255,255,255,0.85);
}


body.light-mode .verify-btn {
  background: #E0E0E0;
  color: #111111;
  box-shadow: inset -2px -2px 4px rgba(85,85,85,0.5), inset 2px 2px 6px rgba(255,255,255,0.6), 0 5px 12px rgba(85,85,85,0.6);
}

body.dark-mode .verify-btn {
  background: #111111;
  color: #FFFFFF;
  box-shadow: inset -2px -2px 5px rgba(0,0,0,0.7), inset 2px 2px 4px rgba(255,255,255,0.05), 0 5px 12px rgba(0,0,0,0.7);
}

/* Fade-in animation */
@keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.certificate-card {
  animation: fadeUp 0.5s ease forwards;
  opacity: 0;
}

/* Staggered animation */
.certificate-card:nth-child(1) { animation-delay: 0.10s; }
.certificate-card:nth-child(2) { animation-delay: 0.20s; }
.certificate-card:nth-child(3) { animation-delay: 0.30s; }
.certificate-card:nth-child(4) { animation-delay: 0.40s; }
.certificate-card:nth-child(5) { animation-delay: 0.50s; }



@media (max-width: 1024px) {
  .certificate-header .cert-title {
    font-size: 3rem;
  }

  .certificate-header .cert-subtitle {
    font-size: 1.1rem;
    padding: 0 1rem;
  }

  .certificate-card {
    flex: 1 1 calc(45% - 1.5rem);
    max-width: 100%;
  }
}

/* MOBILE */
@media (max-width: 768px) {
  #certificate {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .certificate-header {
    margin-bottom: 2.5rem;
  }

  .certificate-header .cert-title {
    font-size: 2.4rem;
    line-height: 1.2;
  }

  .certificate-header .cert-subtitle {
    font-size: 1rem;
    line-height: 1.6;
    max-width: 100%;
  }

  .certificate-cards {
    gap: 1.5rem;
  }

  .certificate-card {
    flex: 1 1 100%;
    max-width: 100%;
    min-height: auto;
    padding: 1.2rem;
  }

  /* Disable heavy hover zoom on touch devices */
  .certificate-card:hover {
    transform: none;
  }

  .certificate-title {
    font-size: 1.05rem;
  }

  .certificate-info {
    font-size: 0.9rem;
    margin-bottom: 1rem;
  }

  .verify-btn {
    width: 140px;
    height: 50px;
    font-size: 14px;
  }
}

/* SMALL MOBILE (iPhone SE, etc.) */
@media (max-width: 480px) {
  .certificate-header .cert-title {
    font-size: 2rem;
  }

  .certificate-header .cert-subtitle {
    font-size: 0.95rem;
  }

  .certificate-title {
    font-size: 1rem;
  }

  .certificate-info {
    font-size: 0.85rem;
  }

  .verify-btn {
    width: 130px;
    height: 46px;
    font-size: 13px;
  }
}
</style>
<!---CERTIFICATES SECTIONS CSS ENDING --->


<!---PROJECTS SECTIONS CSS START --->
<style> 
#project {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 4rem 1rem;
  position: relative;
}

/* GRID IMPROVEMENT */
.project-grid {
  max-width: 1100px; 
  display: flex;
  flex-direction: column;
  gap: 3.5rem; /* ★ ADDED (better spacing) */
  width: 100%;
  max-width: 900px; 
  margin: 0 auto;
}



/* PROJECT CARD */
.project-card {
  position: relative; /* ★ REQUIRED FOR GLOSS */
  backdrop-filter: blur(18px);
  border-radius: 20px;
  padding: 1em;
  cursor: pointer;
  box-shadow: 0 0 0 transparent;
  border: 1px solid rgba(224, 224, 224, 0.15);
  transition: 0.35s ease, box-shadow 0.35s ease, transform 0.35s ease, background 0.35s ease, border 0.35s ease, color 0.35s ease, opacity 0.6s ease-out;
  opacity: 0;
  transform: translateY(20px);
  overflow: hidden; /* ★ Important for gloss mask */
}

.project-card[data-delay] {
  transition-delay: calc(var(--delay, 0) * 0.1s);
}


.project-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: -120%;
  width: 60%;
  height: 100%;
  pointer-events: none;
  filter: blur(18px);
  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.0) 0%,
    rgba(255,255,255,0.35) 50%,
    rgba(255,255,255,0.0) 100%
  );
  transform: skewX(-20deg);
  transition: 0.6s ease;
  opacity: 0;
}

/* DARK MODE GLOSS */
body.dark-mode .project-card::before {
  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.0) 0%,
    rgba(255,255,255,0.20) 50%,
    rgba(255,255,255,0.0) 100%
  );
}

/* LIGHT MODE GLOSS */
body.light-mode .project-card::before {
  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.0) 0%,
    rgba(160,160,160,0.25) 50%,
    rgba(255,255,255,0.0) 100%
  );
}

/* GLOSS SLIDE ON HOVER */
.project-card:hover::before {
  left: 120%;
  opacity: 1;
  animation: gloss-slide 1.5s linear infinite;
}

/* HOVER ENHANCEMENT */
.project-card:hover {
  transform: translateY(-6px) scale(1.01); /* ★ subtle zoom */
  box-shadow: 0 25px 50px rgba(0,0,0,0.2), 0 0 30px rgba(255,255,255,0.05) inset;
  animation: cardGlow 1.5s ease-in-out infinite alternate;
}

@keyframes gloss-slide {
  0% { left: -120%; opacity: 0; }
  50% { left: 120%; opacity: 1; }
  100% { left: 120%; opacity: 0; }
}

@keyframes cardGlow {
  0% { box-shadow: 0 20px 40px rgba(0,0,0,0.25), 0 0 15px var(--glowColor), 0 0 25px var(--glowColor) inset; }
  100% { box-shadow: 0 20px 40px rgba(0,0,0,0.25), 0 0 25px var(--glowColor), 0 0 40px var(--glowColor) inset; }
}

/* Update glow color based on mode */
body.light-mode .project-card { --glowColor: #111; }
body.dark-mode .project-card { --glowColor: #FFF; }




/* IMAGE */
.project-card img.project-img {
  width: 100%;
  border-radius: 12px;
  transition: transform 0.35s ease;
  opacity: 1 !important; 
  transform: none !important;
}

.project-card:hover img.project-img {
  transform: scale(1.03);
}



/* IMAGE CONTAINER */
.project-img-container {
    position: relative;
    width: 100%;
    height: 420px;
    border-radius: 20px 20px 0 0;
    overflow: hidden;
    margin-bottom: 1rem;
}

.project-img-container img.project-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.35s ease, filter 0.35s ease;
}

.project-img-container:hover img.project-img {
  transform: scale(1.07) rotateZ(0.2deg);
  filter: brightness(70%);
  transition: transform 0.45s ease, filter 0.45s ease;
}

/* OVERLAY BUTTON */
.project-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 1.5rem;
    font-weight: 600;
    text-decoration: none;
    opacity: 0;
    transition: opacity 0.35s ease;
}

.project-img-container:hover .project-overlay {
    opacity: 1;
}




/* DARK MODE */
body.dark-mode .project-card {
  background: rgba(17, 17, 17, 0.35);
  border: 1px solid rgba(224, 224, 224, 0.15);
  color: #E0E0E0;
}

/* LIGHT MODE */
body.light-mode .project-card,
body.light-mode .light-mode-card {
  background: #EFEFEF !important;
  border: 1px solid rgba(0, 0, 0, 0.35);
  color: #111111;
  transition: 0.35s ease;
}

body.light-mode .project-card:hover {
  border-color: rgba(0, 0, 0, 0.55);
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
  transform: translateY(-6px);
}




/* HEADINGS */
.project-title {
  font-size: 1.7rem;
  font-weight: 600;
  margin-bottom: 0.4rem;
}

.project-section-title {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  color: #111111;
  transition: color 0.35s ease;
}

.project-section-subtitle {
  font-size: 2rem;
  color: #111111;
  transition: color 0.35s ease;
}

/* DARK */
body.dark-mode .project-section-title,
body.dark-mode .project-section-subtitle {
  color: #E0E0E0;
}
body.dark-mode .project-title { color: #E0E0E0; }

/* LIGHT */
body.light-mode .project-title { color: #111111; }




/* DESCRIPTION */
.project-description {
  font-size: 1.15rem;
  line-height: 1.7rem;
  margin-bottom: 1.2rem;
}

body.dark-mode .project-description { color: #ffffff; }
body.light-mode .project-description { color: #111111; }




/* BADGES */
.tech-badge {
  display: inline-block;
  padding: 0.75rem 1.6rem;
  border-radius: 12px;
  font-size: 1rem;
  font-weight: bolder;
  margin-right: 0.5rem;
  margin-bottom: 0.5rem;
  border: 1px solid #111;
  opacity: 0.9;
  pointer-events: none; 
  transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease, color 0.3s ease;
}

.tech-badge:hover {
  transform: scale(1.08);
  box-shadow: 0 6px 15px rgba(0,0,0,0.25);
  opacity: 1;
  animation: badgeGlow 1.2s ease-in-out infinite alternate;
}

@keyframes badgeGlow {
  0% { box-shadow: 0 0 6px var(--badgeGlow), 0 0 12px var(--badgeGlow); }
  100% { box-shadow: 0 0 12px var(--badgeGlow), 0 0 20px var(--badgeGlow); }
}

body.light-mode .tech-badge { --badgeGlow: #111; }
body.dark-mode .tech-badge { --badgeGlow: #FFF; }

/* DARK */
body.dark-mode .tech-badge {
  background: rgba(17, 17, 17, 0.35);
  color: #E0E0E0;
  border: 1px solid #E0E0E0;
}

/* LIGHT */
body.light-mode .tech-badge {
  background: #ffffff;
  color: #111111;
  border: 1px solid #111111;
}


.project-category-label {
  font-size: 2.4rem;
  font-weight: 700;
  margin: 1.5rem 0 1rem 0;
  padding-left: 0.3rem;
  letter-spacing: 1px;
  opacity: 0;
  transform: translateY(20px);
  transition: 0.45s ease;
}

/* Light Mode */
body.light-mode .project-category-label {
  color: #111;
}

/* Dark Mode */
body.dark-mode .project-category-label {
  color: #E0E0E0;
}

/* Fade-in when visible */
.project-category-label.show {
  opacity: 1;
  transform: translateY(0);
  animation: bounceIn 0.6s ease forwards;
}

@keyframes bounceIn {
  0% { transform: translateY(-20px); opacity: 0; }
  50% { transform: translateY(8px); }
  70% { transform: translateY(-4px); }
  100% { transform: translateY(0); opacity: 1; }
}

.project-category-line {
  width: 100%;
  height: 3px;
  border-radius: 3px;
  margin-bottom: 1.8rem;
  opacity: 0.9;
  transition: background 0.35s ease, opacity 0.35s ease;
  animation: pulse-line 2s infinite;
}

@keyframes pulse-line {
  0%, 100% { opacity: 0.9; }
  50% { opacity: 0.6; }
}


body.light-mode .project-category-label.show {
  text-shadow: 0 0 1px #111, 0 0 3px #111;
}

body.dark-mode .project-category-label.show {
  text-shadow: 0 0 1px #fff, 0 0 3px #fff;
}

/* LIGHT MODE */
body.light-mode .project-category-line {
  background-color: #111111; /* medium-dark grey from palette */
  box-shadow: 0 0 4px #111, 0 0 8px #111;
}

/* DARK MODE */
body.dark-mode .project-category-line {
  background-color: #ffffffff; /* medium grey from palette */
  box-shadow: 0 0 4px #FFF, 0 0 8px #FFF;
}


body.light-mode .project-card:hover::before {
  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.0) 0%,
    rgba(200,200,200,0.3) 50%,
    rgba(255,255,255,0.0) 100%
  );

  box-shadow: 
    0 20px 40px rgba(0,0,0,0.25), 
    0 0 20px #111, 
    0 0 35px #111 inset;
}

body.dark-mode .project-card:hover::before {
  background: linear-gradient(
    120deg,
    rgba(255,255,255,0.0) 0%,
    rgba(255,255,255,0.15) 50%,
    rgba(255,255,255,0.0) 100%
  );

  box-shadow: 
    0 20px 40px rgba(0,0,0,0.25), 
    0 0 20px #FFF, 
    0 0 35px #FFF inset;
}

body.light-mode .tech-badge:hover {
  box-shadow: 
    0 0 6px #111,
    0 0 12px #111,
    0 0 18px #111;
  transform: scale(1.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Dark mode glow */
body.dark-mode .tech-badge:hover {
  box-shadow: 
    0 0 6px #FFF,
    0 0 12px #FFF,
    0 0 18px #FFF;
  transform: scale(1.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}


/* ===============================
   PROJECT TITLE – MOBILE CENTER FIX
=============================== */

/* Tablets & below */
@media (max-width: 1024px) {
  .project-section-header {
    text-align: center;
    padding: 0 1rem;
  }

  .project-section-title {
    font-size: 3rem;
    line-height: 1.2;
  }

  .project-section-subtitle {
    font-size: 1.4rem;
    line-height: 1.6;
  }
  
  .project-img-container {
    height: 360px;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .project-section-header {
    text-align: center;
    margin-bottom: 2rem;
  }

  .project-section-title {
    font-size: 2.4rem;
    line-height: 1.15;
    text-align: center;
  }

  .project-section-subtitle {
    font-size: 1.1rem;
    max-width: 100%;
    margin: 0 auto;
    text-align: center;
  }
  
  .project-img-container {
    height: 280px;
    border-radius: 16px 16px 0 0;
  }

  .project-img-container img.project-img {
    object-position: center;
  }
}

/* Small Mobile (iPhone SE, very small screens) */
@media (max-width: 480px) {
  .project-section-title {
    font-size: 2rem;
    letter-spacing: 0.5px;
  }

  .project-section-subtitle {
    font-size: 0.95rem;
  }
  
  .project-img-container {
    height: 220px;
    border-radius: 14px 14px 0 0;
  }

  .project-img-container img.project-img {
    object-position: center;
    transform: none !important;
  }
}


</style>
<!---PROJECTS SECTIONS CSS ENDING --->


<!--- MOBILE CSS START--->
<style>

#mobileMenu a.active {
  color: #fff !important;
  text-shadow: 0 0 10px rgba(255,255,255,0.8);
}
body.light-mode #mobileMenu a.active {
  color: #000 !important;
  text-shadow: 0 0 10px rgba(0,0,0,0.6);
}




</style>
<!--- MOBILE CSS ENDING--->
  

  
</head>
<body>


    <!-- NAVBAR -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 w-full px-6 py-4 flex justify-between items-center bg-[#1a1a1a] text-[#E0E0E0] transition-transform duration-300">
      <a href="#home" class="text-4xl font-extrabold tracking-wide">JL</a>
    
      <div class="nav-right hidden md:flex items-center space-x-6 uppercase text-lg font-bold tracking-widest">
        <a href="#about-section" class="hover-dark">ABOUT</a>
        <a href="#skills" class="hover-dark block">SKILLS</a>
        <a href="#certificate" class="hover-dark">CERTIFICATES</a>
        <a href="#project" class="hover-dark block">PROJECTS</a>
        <div class="h-6 w-px bg-[#A0A0A0]"></div>
        <label class="switch" title="Toggle Light/Dark Mode">
          <input type="checkbox" id="themeToggle" />
          <span class="slider"></span>
        </label>
      </div>


    <!-- MOBILE MENU BUTTON -->
    <button id="mobileMenuBtn" class="md:hidden text-2xl mobile-menu-btn">
      <i class="fas fa-bars"></i>
    </button>
    
    
  </nav>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="md:hidden hidden flex-col items-center text-center space-y-4 py-6 uppercase font-bold bg-[#151515]">
    <a href="#about-section" class="hover-dark block">ABOUT</a>
    <a href="#skills" class="hover-dark block">SKILLS</a>
    <a href="#certificate" class="hover-dark">CERTIFICATES</a>
    <a href="#project" class="hover-dark block">PROJECTS</a>
    <label class="switch" title="Toggle Light/Dark Mode">
      <input type="checkbox" id="mobileThemeToggle" />
      <span class="slider"></span>
    </label>
  </div>


  <!-- MAIN CONENT -->
<main class="space-y-0">


<!-- HOME SECTION START -->
<section id="home" class="relative w-full max-w-[100vw] h-screen overflow-hidden px-4">
  <canvas class="matrix-canvas absolute inset-0 w-full h-full z-0"></canvas>

  <div class="max-w-4xl h-full mx-auto flex flex-col justify-center items-center space-y-6 text-center px-6 relative z-10">
    <p class="text-xl md:text-2xl cursor-default transition-transform duration-300 text-shadow-mode" id="intro-text">
        Welcome, my name is
    </p>
    <h1 class="text-5xl md:text-6xl font-extrabold uppercase cursor-default transition-transform duration-300 text-shadow-mode" id="main-title">
      JOHN EMMANUEL T. LAMO
    </h1>
    <p class="text-lg md:text-xl max-w-lg cursor-default transition-transform duration-300 text-shadow-mode" id="description">
      <strong class="text-shadow-mode">WEBSITE</strong> and <strong class="text-shadow-mode">MOBILE</strong> developer
      from the Philippines who loves to design and code.
    </p>
    <div class="button-row">
      <div class="home-button" id="resumeButton">
        Download CV
      </div>
        <div class="vertical-separator"></div>
        <div class="link-buttons-container">
          <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=jrjtXMnBHfMKtNbcbxlxkNKlkbdBQwVnRRBHqHjtMNFLWfFdXffmjnvtLVnhQTcTNjmlKGKg" class="link-button">
            <i class="fa-solid fa-envelope"></i>
          </a>
          <a href="https://ph.linkedin.com/in/john-lamo-370634339" target="_blank" class="link-button">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="https://github.com/johnlma0" target="_blank" class="link-button">
            <i class="fa-brands fa-github"></i>
          </a>
        </div>
    </div>
  </div>
</section>

<!-- HOME SECTION ENDING-->





<!-- ABOUT SECTION START-->
 
<section id="about-section" class="relative w-full px-4">
  <canvas class="matrix-canvas absolute inset-0 w-full h-full z-0"></canvas>

  <div id="about-title" class="active">About Me</div>
  <div id="sub-about-title" class="show">I’m a passionate developer with a journey in web and mobile apps</div>
  
  <div class="year-cards-container show">
    <div class="year-card show"><h3>2016</h3><p>When I was 15, my curiosity and passion for games sparked a desire to create my own. While I loved playing games, I wanted to understand how they were made, and that’s when I discovered on YouTube that games are built through coding.</p></div>
    <div class="year-card show"><h3>2018</h3><p>Realized that creating games is difficult, but building web applications is easier using HTML, CSS, and JavaScript. Following YouTube tutorials, I created my first simple homepage using Notepad.</p></div>
    <div class="year-card show"><h3>2020</h3><p>Further expanded my knowledge of HTML and CSS by watching more tutorials and learning JavaScript. I also created additional pages inspired by web applications I found online as references but still using Notepad to code.</p></div>
    <div class="year-card show"><h3>2022</h3><p>Enrolled in a BSIT program specializing in Web and Mobile App Development, where I was introduced to C++, Python, Java, MySQL, CodeIgniter, and VSCode. These tools allowed me to develop applications professionally, moving beyond basic coding in Notepad.</p></div>
    <div class="year-card show"><h3>2023</h3><p>Served as the assistant project manager during our thesis, which strengthened both my public speaking and programming skills.</p></div>
    <div class="year-card show"><h3>2024</h3><p>Deployed my first website and mobile application for a client, including purchasing a domain and hosting. We successfully defended the project. I also developed another web application for a different subject, complete with a backend, to fulfill the project requirements.</p></div>
    <div class="year-card show"><h3>2025</h3><p>Secured an internship at World Vision, where I applied my IT skills to support children in need. Their mission aligned with my passion for using technology to make a positive impact. During my internship, I redesigned their mobile application using Flutter to make it more innovative and developed a student learning program website for the organization.</p></div>
  </div>
</section>

<!-- ABOUT SECTION ENDING-->




<!-- SKILLS SECTION START-->
<section id="skills" class="relative w-full max-w-[100vw] min-h-screen overflow-hidden px-4">
  <canvas class="matrix-canvas absolute inset-0 w-full h-full z-0"></canvas>

  <div class="skills-header relative z-10">
    <h2>Skills</h2>
    <p>These are the technologies I work with regularly.</p>
  </div>

  <div class="skills-wrapper relative z-10">

  <!-- WEB STACK -->
<div class="skill-category fade-left">
  <h3 class="category-title">Web Stack</h3>
  <div class="skills-grid">
    <div class="skill-card"><i class="fab fa-html5"></i><h3>HTML</h3></div>
    <div class="skill-card"><i class="fab fa-css3-alt"></i><h3>CSS</h3></div>
    <div class="skill-card"><i class="fab fa-js"></i><h3>JavaScript</h3></div>
    <div class="skill-card"><i class="fab fa-php"></i><h3>PHP</h3></div>
    <div class="skill-card"><i class="fab fa-laravel"></i><h3>Laravel</h3></div>
    <div class="skill-card"><i class="fas fa-database"></i><h3>MySQL</h3></div>
    <div class="skill-card"><i class="fas fa-code"></i><h3>CodeIgniter</h3></div>
    <div class="skill-card"><i class="fab fa-js-square"></i><h3>Next.js</h3></div>
    <div class="skill-card"><i class="fab fa-css3-alt"></i><h3>Tailwind CSS</h3></div>
    
  </div>
</div>



<!-- MOBILE STACK -->
<div class="skill-category fade-right">
  <h3 class="category-title">Mobile Stack</h3>
  <div class="skills-grid">
    <div class="skill-card"><i class="cib-flutter"></i><h3>Flutter</h3></div>
    <div class="skill-card"><i class="fas fa-code"></i><h3>Dart</h3></div>
    <div class="skill-card"><i class="cib-python"></i><h3>Python</h3></div>
    <div class="skill-card"><i class="cib-kotlin"></i><h3>Kotlin</h3></div>
    <div class="skill-card"><i class="cib-android"></i><h3>Android Studio</h3></div>
    <div class="skill-card"><i class="cib-cplusplus"></i><h3>C++</h3></div>
    <div class="skill-card"><i class="fas fa-leaf"></i><h3>Kivy</h3></div>
  </div>
</div>


<!-- TOOLS STACK-->
<div class="skill-category fade-left">
  <h3 class="category-title">Tools</h3>
  <div class="skills-grid">
    <div class="skill-card"><i class="cib-visual-studio-code"></i><h3>VSCode</h3></div>
    <div class="skill-card"><i class="cib-git"></i><h3>Git</h3></div>
    <div class="skill-card"><i class="cib-figma"></i><h3>Figma</h3></div>
    <div class="skill-card"><i class="cib-adobe-photoshop"></i><h3>Photoshop</h3></div>
    <div class="skill-card"><i class="cib-adobe-premiere"></i><h3>Premiere Pro</h3></div>
  </div>
</div>


</div>

</section>
<!-- SKILLS SECTION ENDING-->


<!-- CERTIFICATES SECTION START-->
<section id="certificate" class="relative w-full min-h-screen px-4 pt-20">
  <canvas class="matrix-canvas absolute inset-0 w-full h-full z-0"></canvas>

  <div class="certificate-header text-center mb-12 z-10">
    <h2 class="cert-title">Certifications</h2>
    <p class="cert-subtitle">I took several certifications to further enhance my skills. Here they are:</p>
  </div>

    <div class="certificate-cards flex flex-wrap justify-center gap-6 z-10">

      <div class="certificate-card flex flex-col items-center text-center p-4">
        <p class="certificate-title font-semibold text-lg mb-1">CCNA: Enterprise Networking, Security, and Automation</p>
        <p class="certificate-info">Cisco</p>
        <p class="certificate-info">Issued December 5, 2023</p>
        <a href="{{ url('https://www.credly.com/badges/be06af3f-039e-4d9d-922c-eee9fa788058/public_url') }}" target="_blank" class="verify-btn">Verify Me</a>
      </div>

      <div class="certificate-card flex flex-col items-center text-center p-4">
        <p class="certificate-title font-semibold text-lg mb-1">CCNA: Introduction to Networks</p>
        <p class="certificate-info">Cisco</p>
        <p class="certificate-info">Issued April 17, 2023</p>
        <a href="{{ url('https://www.credly.com/badges/408decb2-079d-4061-997c-8631d914860e/public_url') }}" target="_blank" class="verify-btn">Verify Me</a>
      </div>

      <div class="certificate-card flex flex-col items-center text-center p-4">
        <p class="certificate-title font-semibold text-lg mb-1">CCNA: Switching, Routing, and Wireless Essentials</p>
        <p class="certificate-info">Cisco</p>
        <p class="certificate-info">Issued September 4, 2023</p>
        <a href="{{ url('https://www.credly.com/badges/46a350c6-f88f-438c-8d97-cb44b194f998/public_url') }}" target="_blank" class="verify-btn">Verify Me</a>
      </div>

      <div class="certificate-card flex flex-col items-center text-center p-4">
        <p class="certificate-title font-semibold text-lg mb-1">DevNet Associate</p>
        <p class="certificate-info">Cisco</p>
        <p class="certificate-info">Issued April 27, 2024</p>
        <a href="{{ url('https://www.credly.com/badges/670dc7ec-05d9-4429-9173-f38289d970d5/public_url') }}" target="_blank" class="verify-btn">Verify Me</a>
      </div>

      <div class="certificate-card flex flex-col items-center text-center p-4">
        <p class="certificate-title font-semibold text-lg mb-1">JavaScript</p>
        <p class="certificate-info">Certiport</p>
        <p class="certificate-info">Issued November 29 2024</p>
        <a href="{{ asset('public/pdfs/JavaScript_Certificate.pdf') }}" download class="verify-btn">Verify Me</a>
      </div>

    </div>


</section>
<!-- CERTIFICATES SECTION ENDING-->

<!-- PROJECTS SECTION START-->
<section id="project" class="relative w-full max-w-[100vw] h-auto overflow-hidden px-4">
  <canvas class="matrix-canvas absolute inset-0 w-full h-full z-0"></canvas>

  <div class="project-grid">
    

  <div class="project-section-header" style="text-align:center; margin-bottom:2rem; opacity:1; transform:translateY(0);">
    <h2 class="project-section-title">PROJECTS</h2>
    <p class="project-section-subtitle">
      Here's a showcase of some of the projects I worked on.
    </p>
  </div>

  <h3 class="project-category-label">Website Application</h3>
    <div class="project-category-line"></div>


    <!-- CARD 1 -->
    <div class="project-card">
        <div class="project-img-container">
            <img class="project-img"
                 data-light="{{ asset('public/images/2.png') }}"
                 data-dark="{{ asset('public/images/2.png') }}"
                 src="{{ asset('public/images/2.png') }}"
                 alt="Portfolio Image">
            <a href="https://etusok.johnlamo.com/" class="project-overlay">View Site</a>
        </div>
        <h3 class="project-title">E-Tusok</h3>
        <p class="project-description">
           E-Tusok is an ecommerce project showcasing a working eCommerce platform.
        </p>
        <div class="tech-badge">PHP</div>
        <div class="tech-badge">CODEIGNITER</div>
        <div class="tech-badge">MYSQL</div>
    </div>

    <div class="project-card">
        <div class="project-img-container">
            <img class="project-img"
                 data-light="{{ asset('public/images/5.png') }}"
                 data-dark="{{ asset('public/images/5.png') }}"
                 src="{{ asset('public/images/5.png') }}"
                 alt="Portfolio Image">
            <a href="https://student-ambassador.worldvision.org.ph/" class="project-overlay">View Site</a>
        </div>
        <h3 class="project-title">Student Ambassador Program</h3>
        <p class="project-description">
            Completely revamped the existing SAP website for World Vision, transforming it into a more modern, intuitive, and user-friendly UI/UX experience.
        </p>
        <div class="tech-badge">NEXT.JS</div>
        <div class="tech-badge">PHP</div>
        <div class="tech-badge">LARAVEL</div>
    </div>

    <h3 class="project-category-label">Mobile Application</h3>
    <div class="project-category-line"></div>

    <!-- CARD 2 -->
    <div class="project-card">
        <div class="project-img-container">
            <img class="project-img"
                 data-light="{{ asset('public/images/3.png') }}"
                 data-dark="{{ asset('public/images/3.png') }}"
                 src="{{ asset('public/images/3.png') }}"
                 alt="Portfolio Image">
        </div>
        <h3 class="project-title">FIT Queue Management System</h3>
        <p class="project-description">
            Feutech Queue Management System was designed to eliminate long queues.
        </p>
        <div class="tech-badge">FLUTTER</div>
        <div class="tech-badge">CODEIGNITER</div>
        <div class="tech-badge">MYSQL</div>
    </div>

        <div class="project-card">
        <div class="project-img-container">
            <img class="project-img"
                 data-light="{{ asset('public/images/4.png') }}"
                 data-dark="{{ asset('public/images/4.png') }}"
                 src="{{ asset('public/images/4.png') }}"
                 alt="Portfolio Image">
        </div>
        <h3 class="project-title">World Vision Philippines</h3>
        <p class="project-description">
            The World Vision App was redesigned with a modern UI tailored for World Vision Philippines.
        </p>
        <div class="tech-badge">FLUTTER</div>
        <div class="tech-badge">INSOMIA</div>
    </div>

    <h3 class="project-category-label">Web + Mobile Application</h3>
    <div class="project-category-line"></div>
    <!-- CARD 3 -->
    <div class="project-card">
        <div class="project-img-container">
            <img class="project-img"
                 data-light="{{ asset('public/images/1.png') }}"
                 data-dark="{{ asset('public/images/1.png') }}"
                 src="{{ asset('public/images/1.png') }}"
                 alt="Portfolio Image">
            <a href="https://trashtrack.clarencebabiano.com/" class="project-overlay">View Site</a>
        </div>
        <h3 class="project-title">TrashTrack</h3>
        <p class="project-description">
            TrashTrack is an IoT-Based Enhanced Waste Management System created for our Client which is Barangay Banaba.
        </p>
        <div class="tech-badge">ADRUINO IOT</div>
        <div class="tech-badge">FLUTTER</div>
        <div class="tech-badge">PHP</div>
        <div class="tech-badge">MYSQL</div>
        <div class="tech-badge">CODEIGNITER</div>
    </div>
    <div class="project-card">
        <div class="project-img-container">
            <img class="project-img"
                 data-light="{{ asset('public/images/6.png') }}"
                 data-dark="{{ asset('public/images/6.png') }}"
                 src="{{ asset('public/images/6.png') }}"
                 alt="Portfolio Image">
            <a href="https://houseofus.johnlamo.com/" class="project-overlay">View Site</a>
        </div>
        <h3 class="project-title">HouseofUs</h3>
        <p class="project-description">
            HouseofUs is an Recommendation Property System with Comparison Tool created for our Client in Quezon City.
        </p>
        <div class="tech-badge">FLUTTER</div>
        <div class="tech-badge">PHP</div>
        <div class="tech-badge">MYSQL</div>
        <div class="tech-badge">CODEIGNITER</div>
    </div>
  </div>
</section>

<!-- PROJECTS SECTION ENDING-->






    


    
  </main>

 <script>
// DESKTOP + MOBILE LINKS
const allLinks = document.querySelectorAll(
  'nav a[href^="#"], #mobileMenu a[href^="#"]'
);

// Add/remove highlight
function setActiveLink(id) {
  allLinks.forEach(link => {
    link.classList.toggle("active", link.getAttribute("href") === `#${id}`);
  });
}

function highlightOnScroll() {
  const scrollPos = window.scrollY + 200; // offset for fixed navbar

  document.querySelectorAll("section[id]").forEach(section => {
    const top = section.offsetTop;
    const height = section.offsetHeight;
    const id = section.id;

    if (scrollPos >= top && scrollPos < top + height) {
      setActiveLink(id);
    }
  });
}

// Click highlight
allLinks.forEach(link => {
  link.addEventListener("click", () => {
    const id = link.getAttribute("href").replace("#", "");
    setActiveLink(id);
  });
});

// Trigger scroll highlight
window.addEventListener("scroll", highlightOnScroll);
window.addEventListener("DOMContentLoaded", highlightOnScroll);
</script>
 

<!--- SWITCH MODE SCRIPT START --->
<script>
const themeToggle = document.getElementById('themeToggle');
const mobileThemeToggle = document.getElementById('mobileThemeToggle');
const body = document.body;
const nav = document.getElementById('navbar');
const mobileMenu = document.getElementById('mobileMenu');

function switchTheme(checked) {
  const flipCards = document.querySelectorAll('.flip-card-inner');
  const leftText = document.getElementById('left-text');
  const rightText = document.getElementById('right-text');


  document.body.classList.toggle('light-mode', checked);

  if (checked) {
    /* ---------- LIGHT MODE ---------- */
    body.style.backgroundColor = '#EFEFEF';
    body.style.color = '#111111';
    nav.classList.add('light');
    nav.style.backgroundColor = '#EFEFEF';
    mobileMenu.classList.add('light');
    document.body.classList.add("light-mode");
    document.body.classList.remove("dark-mode");


    document.querySelectorAll('.project-card').forEach(card => {
      card.style.background = "#EFEFEF";
      card.style.color = "#111111";
    });


    document.querySelectorAll('nav a').forEach(a => {
      a.classList.remove('hover-dark');
      a.classList.add('hover-light');
      a.style.color = '#111111'; /* primary light */
    });

    document.querySelectorAll('#mobileMenu a').forEach(a => {
      a.style.color = '#111111';
      a.classList.remove('hover-dark');
      a.classList.add('hover-light');
    });

    if (leftText && rightText) {
      leftText.style.color = '#111111';
      rightText.style.color = '#111111';
      leftText.style.textShadow = '0 2px 6px #A0A0A0';
      rightText.style.textShadow = '0 2px 6px #A0A0A0';
    }

    flipCards.forEach(card => {
      card.parentElement.classList.add('light-mode-card');
    });

  } else {
    /* ---------- DARK MODE ---------- */
    body.style.backgroundColor = '#111111';
    body.style.color = '#E0E0E0';
    nav.classList.remove('light');
    nav.style.backgroundColor = '#111111';
    mobileMenu.classList.remove('light');
    document.body.classList.remove("light-mode");
    document.body.classList.add("dark-mode");


    document.querySelectorAll('.project-card').forEach(card => {
      card.style.background = "rgba(17, 17, 17, 0.25)";
      card.style.color = "#E0E0E0";
    });


    document.querySelectorAll('nav a').forEach(a => {
      a.classList.remove('hover-light');
      a.classList.add('hover-dark');
      a.style.color = '#FFFFFF'; 
    });

    document.querySelectorAll('#mobileMenu a').forEach(a => {
      a.style.color = '#A0A0A0';
      a.classList.remove('hover-light');
      a.classList.add('hover-dark');
    });

    if (leftText && rightText) {
      leftText.style.color = '#555555';
      rightText.style.color = '#555555';
      leftText.style.textShadow = '0 2px 6px #111111';
      rightText.style.textShadow = '0 2px 6px #111111';
    }
  }
  
  const navbar = document.getElementById('navbar');

      window.addEventListener('scroll', function() {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
      if (currentScroll > lastScrollTop) {
        // scrolling down
        navbar.classList.add('hidden');
      } else {
        // scrolling up
        navbar.classList.remove('hidden');
      }
    
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // for mobile or negative scrolling
    });


    // Theme toggle logic
    themeToggle.addEventListener('change', () => switchTheme(themeToggle.checked));
    mobileThemeToggle.addEventListener('change', () => switchTheme(mobileThemeToggle.checked));
    }

  themeToggle.addEventListener('change', () => {
    switchTheme(themeToggle.checked);
    mobileThemeToggle.checked = themeToggle.checked;
  });

  mobileThemeToggle.addEventListener('change', () => {
    switchTheme(mobileThemeToggle.checked);
    themeToggle.checked = mobileThemeToggle.checked;
  });

  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  window.addEventListener('DOMContentLoaded', () => {
    themeToggle.checked = true;
    mobileThemeToggle.checked = true;
    switchTheme(true);
  });
  
</script>


<!-- SWITCH MODE SCRIPT ENDING-->

<!-- HOME SECTION SCRIPT START -->
<script>
const canvases = document.querySelectorAll('.matrix-canvas');

function resizeCanvas(canvas) {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

function drawGrid(ctx, canvas) {
  const isLight = document.body.classList.contains('light-mode');
  const backgroundColor = isLight ? '#EFEFEF' : '#111111';
  const gridColor = isLight ? 'rgba(85, 85, 85, 0.15)' : 'rgba(160, 160, 160, 0.10)';
  const spacing = 80;

  ctx.fillStyle = backgroundColor;
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  ctx.strokeStyle = gridColor;
  ctx.lineWidth = 1;

  for (let x = 0; x < canvas.width; x += spacing) {
    ctx.beginPath();
    ctx.moveTo(x, 0);
    ctx.lineTo(x, canvas.height);
    ctx.stroke();
  }

  for (let y = 0; y < canvas.height; y += spacing) {
    ctx.beginPath();
    ctx.moveTo(0, y);
    ctx.lineTo(canvas.width, y);
    ctx.stroke();
  }
}

function animateCanvas(canvas) {
  const ctx = canvas.getContext('2d');

  function animate() {
    drawGrid(ctx, canvas);
    requestAnimationFrame(animate);
  }

  animate();
}

canvases.forEach(canvas => {
  resizeCanvas(canvas);
  animateCanvas(canvas);
});

window.addEventListener('resize', () => canvases.forEach(resizeCanvas));

const observer = new MutationObserver(() => canvases.forEach(canvas => drawGrid(canvas.getContext('2d'), canvas)));
observer.observe(document.body, { attributes: true, attributeFilter: ['class'] });

</script>


<script>
const button = document.getElementById('resumeButton');

button.addEventListener('click', () => {
  // Create temporary link to download PDF
  const link = document.createElement('a');
  link.href = 'public/pdfs/Resume.pdf';  
  link.download = 'Resume.pdf';   
  link.click();
});
</script>
<!--- HOME SECTION SCRIPT ENDING--->

  
<!--- ABOUT SECTION SCRIPT START--->
<script>
  // Remove all click functionality; content shows by default
  document.querySelectorAll('#about-title, #sub-about-title, .year-card, .year-cards-container')
          .forEach(el => el.classList.add('show'));
  document.getElementById('about-title').classList.add('active');
  document.getElementById('about-title').textContent = "About Me";
</script>

<!--- ABOUT SECTION SCRIPT ENDING --->
  

<!--- SKILLS SECTION SCRIPT START --->
<script>
const skillCards = document.querySelectorAll(".skill-card");
const categories = document.querySelectorAll(".skill-category");
const titles = document.querySelectorAll(".category-title");

const skillObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      entry.target.style.transitionDelay = `${entry.target.dataset.delay || 0}s`;
    }
  });
}, { threshold: 0.3 });

skillCards.forEach((card, index) => {
  card.dataset.delay = index * 0.1; 
  skillObserver.observe(card);
});

const categoryObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, { threshold: 0.3 });

categories.forEach(cat => categoryObserver.observe(cat));
titles.forEach(title => categoryObserver.observe(title));
</script>
<!--- SKILLS SECTION SCRIPT ENDING --->
  

<!--- CERTIFICATES SECTION SCRIPT START --->

<script>
const certCards = document.querySelectorAll('.certificate-card');

const certobserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.2 });

certCards.forEach(card => certobserver.observe(card));




function triggerCertificateOverlay(mode) {
  const cards = document.querySelectorAll('.certificate-card');

  cards.forEach(card => {
    // Remove any existing overlay class
    card.classList.remove('overlay-dark', 'overlay-light');

    // Add appropriate overlay
    if (mode === 'dark') {
      card.classList.add('overlay-dark');
    } else if (mode === 'light') {
      card.classList.add('overlay-light');
    }

    // Remove the overlay after 1 second
    setTimeout(() => {
      card.classList.remove('overlay-dark', 'overlay-light');
    }, 1000);
  });
}

// Example: call this whenever you toggle mode
const certthemeToggle = document.getElementById('certthemeToggle');
certthemeToggle.addEventListener('change', (e) => {
  if(e.target.checked){
    document.body.classList.add('dark-mode');
    document.body.classList.remove('light-mode');
    triggerCertificateOverlay('dark');
  } else {
    document.body.classList.add('light-mode');
    document.body.classList.remove('dark-mode');
    triggerCertificateOverlay('light');
  }
});

</script>

<!--- CERTIFICATES SECTION SCRIPT ENDING --->


<!-- PROJECTS SECTION SCRIPT START --> 
<script>
const cards = document.querySelectorAll(".project-card");

// Scroll fade-in animation
const projobserver = new IntersectionObserver(entries => { 
  entries.forEach(entry => { 
    if (entry.isIntersecting) { 
      entry.target.style.opacity = "1"; 
      entry.target.style.transform = "translateY(0)"; 
      projobserver.unobserve(entry.target);  
    }
  }); 
}, { threshold: 0.1 }); 


cards.forEach(card => projobserver.observe(card));

// Update card theme and placeholder images
function updateCardTheme() {
  cards.forEach(card => {
    const img = card.querySelector('img.project-img'); 
    if (document.body.classList.contains('light-mode')) { 
      if (img) img.src = img.dataset.light;  
        } else { 
      if (img) img.src = img.dataset.dark; 
    }
  });
}

// Add data-delay for staggered animation
cards.forEach((card, index) => {
  card.style.setProperty('--delay', index);
});


document.addEventListener('DOMContentLoaded', updateCardTheme);

// Theme toggle
const projthemeToggle = document.getElementById('themeToggle');
const projmobileThemeToggle = document.getElementById('mobileThemeToggle');

themeToggle.addEventListener('change', updateCardTheme);
mobileThemeToggle.addEventListener('change', updateCardTheme);


// Fade-in animation for category labels
const labels = document.querySelectorAll(".project-category-label");

const labelObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
      labelObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.2 });

labels.forEach(label => labelObserver.observe(label));

</script>

<!--- PROJECTS SECTION SCRIPT ENDING --->






</body>
</html>