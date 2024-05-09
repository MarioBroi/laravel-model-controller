# Istruzioni

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

- [x] Create un nuovo progetto Laravel 10

- [x] tramite phpMyAdmin create un nuovo database laravel_model_controller

- [x] Importate nel vostro database la tabella movies in allegato

- [x] inserite le vostre credenziali per il database nel file .env

- [x] Create un model Movie 
```bash 
php artisan make:model Movie
```

- [x] Create un controller che gestirà la rotta 
```bash
php artisan make:controller Guests/PageController
```

- [x] All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

## BONUS: 
Stilare il layout nei dettagli con Sass