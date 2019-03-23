 ; //Buena practica por si otro js no entre en conflicto con mi js
console.log("Hello Wordpress");

// Evitar conflictos de versiones de Jquery
// entre Wordpress y sus plugins
$=jQuery.noConflict();
