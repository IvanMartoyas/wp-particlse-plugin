<?php
/*
 * Plugin Name: Particlse
 * Description: Particlse background
 * Author: IOAN MARTOYAS
 * 
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.1
 * Network:     true
 */

// подключаю стили и скрипты
function wp_kama_head_action(){
    ?>
        <link rel="stylesheet" href="<? echo plugins_url(  '/particls-style.css',__FILE__); ?>">
        <script src="<? echo plugins_url( '/particles.min.js',__FILE__ ); ?>"></script>
    <?
}
add_action( 'wp_head', 'wp_kama_head_action' );


add_shortcode( 'particlse', 'particlse_func' ); 

function particlse_func( $atts ){ 

    ob_start();

    $id = $atts['id']; 

    if(!empty($id)) {

?>

<script>


    window.addEventListener("load", (event) => {

particlesJS('<? echo $id; ?>',
    {
    "background": "cornflowerblue",
    "particles": {
        "number": {
        "value": 104,
        "density": {
            "enable": true,
            "value_area": 1340.2289426382008
        }
        },
        "color": {
            "value": "#cdd9c8"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000",
                "background": "#000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
        "value": 5,
        "random": true,
        "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
        }
        },
        "line_linked": {
        "enable": true,
        "distance": 144,
        "color": "#fff",
        "opacity": 0.4,
        "width": 1
        },
        "move": {
        "enable": true,
        "speed": 4,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
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
                "distance": 400,
                "line_linked": {
                "opacity": 1
            }
        },
        "bubble": {
            "distance": 500,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
        },
        "repulse": {
            "distance": 150,
            "duration": 0.4
        },
        "push": {
            "particles_nb": 4
        },
        "remove": {
            "particles_nb": 2
        }
        }
    },
    "retina_detect": true
    }
);

});

</script>
<?

    } 
    else {
      
    }

    return ob_get_clean();
} 
?>