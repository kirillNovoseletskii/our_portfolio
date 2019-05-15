/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 100,
        "density": {
          "enable": true,
          "value_area": 300
        }
      },
      "color": {
        "value": "#303030"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 3,
          "color": "#303030"
        },
        "polygon": {
          "nb_sides": 100
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 10
        }
      },
      "opacity": {
        "value": 0.2,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 100,
          "opacity_min": 1,
          "sync": false
        }
      },
      "size": {
        "value": 1,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 130,
        "color": "#313131",
        "opacity": 1,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 5,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": true,
          "rotateX": 700,
          "rotateY": 700
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 0,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 10
        },
        "repulse": {
          "distance": 100
        },
        "push": {
          "particles_nb": 1
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": false,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);