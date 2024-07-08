## Comandi Console
    #### Comando per rendere utente revisore
        php artisan app:make-user-revisor <emailUtente>

    #### Comandi Scout
        1 php artisan scout:flush "App\Models\Article"
        2 php artisan scout:import "App\Models\Article"
        3 aggiungere nel .env  SCOUT_DRIVER=tntsearch
        