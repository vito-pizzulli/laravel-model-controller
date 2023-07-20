<p align="center">
<a href="https://getbootstrap.com" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:400/1*onZhQJU7A3ab6V1sHfMRkQ.jpeg" height="150"></a>
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="150"></a>
<a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="150"></a>
</p>

# Laravel Model Controller

<p>Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.</p>

1. Create un nuovo progetto Laravel 9
2. tramite phpMyAdmin create un nuovo database laravel_model_controller
3. Importate nel vostro database la tabella movies in allegato
4. inserite le vostre credenziali per il database nel file .env
5. Create un model Movie php artisan make:model Movie
6. Create un controller che gestirà la rotta '/' con php artisan make:controller Guest/PageController
7. All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

## Bonus

<p>Stilare il layout nei dettagli con Sass</p>
