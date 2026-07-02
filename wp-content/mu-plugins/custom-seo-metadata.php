<?php
/*
Plugin Name: Custom SEO Metadata
Description: Inject SEO metadata (Title, Description, Robots) for specific URLs.
Version: 1.0
Author: Energy Now
*/

function eng_get_seo_data() {
    return array(
        '/' => array(
            'index' => 'index, follow',
            'title' => 'Energía Solar Colombia para Empresas | Energy Now Group',
            'description' => 'Impulsamos proyectos de energía solar Colombia con soluciones flexibles para industria, transporte e infraestructura. ¡Entra ahora!',
            'h1' => 'Energía Solar Colombia para Empresas e Industria'
        ),
        '/nosotros/' => array(
            'index' => 'index, follow',
            'title' => 'Innovación Energía Solar para Empresas | Energy Now Group',
            'description' => 'Conoce Energy Now y nuestra experiencia en innovación energía solar para industria, movilidad e infraestructura. ¡Entra ahora para conocer más!',
            'h1' => 'Innovación Energía Solar para un Futuro Sostenible'
        ),
        '/energy-panda/' => array(
            'index' => 'index, follow',
            'title' => 'Energía Solar Vehicular Flexible | Energy Now Group',
            'description' => 'Reduce costos operativos con energía solar vehicular ultraligera para flotas y vehículos comerciales. ¡Entra ahora para conocer más!',
            'h1' => 'Energía Solar Vehicular para Flotas y Transporte'
        ),
        '/rollo-solar-energy-now/' => array(
            'index' => 'index, follow',
            'title' => 'Soluciones Solares Flexibles en Rollo | Energy Now Group',
            'description' => 'Descubre soluciones solares flexibles que se adaptan a superficies curvas y estructuras livianas. ¡Entra ahora para conocer nuestros productos!',
            'h1' => 'Soluciones Solares Flexibles para Cualquier Superficie'
        ),
        '/diferenciacion/' => array(
            'index' => 'index, follow',
            'title' => 'Tecnología Energía Solar Flexible | Energy Now Group',
            'description' => 'Conoce nuestra tecnología de energía solar ultraligera, flexible y diseñada para aplicaciones reales. ¡Entra ahora para conocer más!',
            'h1' => 'Tecnología Energía Solar que Impulsa la Innovación'
        ),
        '/oem/' => array(
            'index' => 'index, follow',
            'title' => 'Soluciones Energéticas Solares Integradas | Energy Now Group',
            'description' => 'Integra soluciones energéticas solares integradas en productos y vehículos con tecnología de última generación. ¡Entra ahora para concoer más!',
            'h1' => 'Soluciones Energéticas Solares integradas'
        ),
        '/camiones/' => array(
            'index' => 'index, follow',
            'title' => 'Energía Solar para Camiones | Energy Now Group',
            'description' => 'Reduce consumo de combustible con energía solar para camiones y optimiza el rendimiento de tu flota. ¡Entra ahora para conocer más!',
            'h1' => 'Energía Solar para Camiones Comerciales'
        ),
        '/bus/' => array(
            'index' => 'index, follow',
            'title' => 'Energía Solar para Buses | Energy Now Group',
            'description' => 'Implementa energía solar para buses y disminuye costos operativos en transporte de pasajeros. ¡Entra ahora para conocer nuestros productos!',
            'h1' => 'Energía Solar para Buses y Transporte Público'
        ),
        '/toldo-solar/' => array(
            'index' => 'noindex, nofollow',
            'title' => 'Toldo Solar con Tecnología para Energía Solar | Energy Now',
            'description' => 'Genera energía limpia y sombra con un toldo solar innovador para hogares, RV y proyectos sostenibles. ¡Entra ahora para conocer más!',
            'h1' => 'Toldo Solar con Tecnología Energía Solar Integrada'
        ),
        '/pavimento-solar/' => array(
            'index' => 'noindex, nofollow',
            'title' => 'Pavimento Solar e Innovación Energía Solar | Energy Now',
            'description' => 'Convierte superficies en fuentes de energía mediante pavimento solar e innovación energética sostenible. ¡Entra ahora para concer más!',
            'h1' => 'Pavimento Solar para Generación de Energía Limpia'
        ),
        '/energia-solar-flotante/' => array(
            'index' => 'noindex, nofollow',
            'title' => 'Energía Solar Fotovoltaica Colombia | Energy Now Group',
            'description' => 'Aprovecha cuerpos de agua con energía solar fotovoltaica Colombia y maximiza la generación renovable. ¡Entra ahora par aconocer más!',
            'h1' => 'Energía Solar Fotovoltaica Colombia en Sistemas Flotantes'
        ),
        '/soluciones-fuera-de-la-red/' => array(
            'index' => 'noindex, nofollow',
            'title' => 'Solución de Energía Portátil de 30 KWh | Energy Now Group',
            'description' => 'Garantiza independencia energética con soluciones energéticas solares portátiles de 30 KWh fuera de la red. ¡Entra ahora para conocer más!',
            'h1' => 'Soluciones Energéticas Solares Fuera de la Red'
        ),
        '/redes-y-prensa/' => array(
            'index' => 'index, follow',
            'title' => 'Noticias de Movilidad Sostenible y Energía Solar | Energy Now',
            'description' => 'Descubre noticias, proyectos y avances sobre movilidad sostenible y energía solar en Colombia. ¡Entra ahora para conocer nuestros productos!',
            'h1' => 'Movilidad Sostenible e Innovación Solar'
        ),
        '/contacto/' => array(
            'index' => 'noindex, nofollow',
            'title' => 'Contacto Soluciones Energéticas Solares | Energy Now Group',
            'description' => 'Habla con especialistas en soluciones energéticas solares para tu empresa o proyecto. ¡Entra ahora para conocer nuestros productos!',
            'h1' => 'Contacta Expertos en Soluciones Energéticas Solares'
        )
    );
}

function eng_get_current_path() {
    $path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $path = strtok($path, '?');
    if ($path !== '/' && substr($path, -1) !== '/') {
        $path .= '/';
    }
    return $path;
}

// Override Title
add_filter('pre_get_document_title', function($title) {
    $data = eng_get_seo_data();
    $path = eng_get_current_path();
    
    if (isset($data[$path]['title'])) {
        return $data[$path]['title'];
    }
    if (function_exists('is_front_page') && is_front_page() && isset($data['/']['title'])) {
        return $data['/']['title'];
    }
    
    return $title;
}, 999);

// Add Meta Description and Robots
add_action('wp_head', function() {
    $data = eng_get_seo_data();
    $path = eng_get_current_path();
    
    $seo_info = null;
    if (isset($data[$path])) {
        $seo_info = $data[$path];
    } elseif (function_exists('is_front_page') && is_front_page() && isset($data['/'])) {
        $seo_info = $data['/'];
    }
    
    if ($seo_info) {
        if (!empty($seo_info['description'])) {
            echo '<meta name="description" content="' . esc_attr($seo_info['description']) . '">' . "\n";
        }
        if (!empty($seo_info['index'])) {
            // Check if there is an existing robots meta and remove/overwrite (though we can't easily remove without output buffering, adding it early usually takes precedence or combines).
            echo '<meta name="robots" content="' . esc_attr($seo_info['index']) . '">' . "\n";
        }
    }
}, 1);

// Update H1 via JS in footer as a fallback
add_action('wp_footer', function() {
    $data = eng_get_seo_data();
    $path = eng_get_current_path();
    
    $seo_info = null;
    if (isset($data[$path])) {
        $seo_info = $data[$path];
    } elseif (function_exists('is_front_page') && is_front_page() && isset($data['/'])) {
        $seo_info = $data['/'];
    }
    
    if ($seo_info && !empty($seo_info['h1'])) {
        $h1 = esc_js($seo_info['h1']);
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                var h1s = document.getElementsByTagName('h1');
                if (h1s.length > 0) {
                    h1s[0].innerText = '{$h1}';
                }
            });
        </script>\n";
    }
}, 999);

// Update H1 server-side using the_title hook
add_filter('the_title', function($title, $id = null) {
    if (is_admin() || !in_the_loop() || !is_main_query()) {
        return $title;
    }
    
    $data = eng_get_seo_data();
    $path = eng_get_current_path();
    
    $seo_info = null;
    if (isset($data[$path])) {
        $seo_info = $data[$path];
    } elseif (function_exists('is_front_page') && is_front_page() && isset($data['/'])) {
        $seo_info = $data['/'];
    }
    
    if ($seo_info && !empty($seo_info['h1'])) {
        if (get_the_ID() == $id) {
            return $seo_info['h1'];
        }
    }
    
    return $title;
}, 10, 2);
