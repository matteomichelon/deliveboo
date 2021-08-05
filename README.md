# DeliveBoo

Realizzazione di una applicazione Web ispirata a Deliveroo, attraverso il Backend( Autenticazione, Integrazione pagamento Braintree ) e interfaccia Frontend responsive.

## Team

- [Catalin Zahariea](https://github.com/catalin-zahariea)
- [Nicoletta Berrettoni](https://github.com/NicolettaBr)
- [Mario Koco](https://github.com/Ma-ko92)
- [Enrico Paolazzi](https://github.com/enricopaol)
- [Matteo Michelon](https://github.com/matteomichelon)

## Caratteristiche

DeliveBoo è una web app di food delivery che ti permette di ricevere cibo a domicilio. Permette agli utenti di navigare attraverso il sito dove possono scegliere i migliori piatti di ristoranti, pizzerie, sushi e tanto altro, puoi decidere la quantità per ogni piatto e aggiungerne quanti ne vuoi da quel ristorante. Dopo la scelta si verrà reindirizzati nel sistema di pagamento integrato di Braintree dove si può testare il sistema di pagamento; a pagamento effettuato verrà inviata una mail al cliente con un resoconto dell'ordine appena fatto.

Dalla parte del ristoratore si ha la possibilità di registrarsi direttamente al sito e ad aggiungere qualsiasi piatto lui necessiti e in un secondo momento modificarlo oppure eliminarlo. Oltre a ciò avrà una dashboard dedicata per osservare le statistiche annuali e mensili dell'ultimo anno effettuati nel suo ristorante.

## Installazione

    $ git clone https://github.com/matteomichelon/deliveboo.git
    $ composer install
    $ npm install
    $ cp .env.example .env

## Crea un nuovo database ed inserisci i dati richiesti

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_user
    DB_PASSWORD=your_password

## Genera la tua chiave

    $ php artisan key:generate

## Popola il database lanciando i seeder

    $ php artisan migrate:refresh --seed

## Per osservare le mail inviate al cliente e al propietario

- Crea un account gratuito su [Mailtrap](https://mailtrap.io/)
- Inserisci i dati richiesti

        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=your_user
        MAIL_PASSWORD=your_password
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS=info@deliveboo.com
        MAIL_FROM_NAME="${APP_NAME}"

## Per osservare i pagamenti effettuati

- Crea un account gratuito su [Braintree Sandbox](https://sandbox.braintreegateway.com/login)
- Inserisci i dati richiesti

        BRAINTREE_ENV=sandbox
        BRAINTREE_MERCHANT_ID=your_merchant_id
        BRAINTREE_PUBLIC_KEY=your_public_key
        BRAINTREE_PRIVATE_KEY=your_private_key

- Per le carte di credito come test segui il [link](https://developer.paypal.com/braintree/docs/reference/general/testing)

## Lancia il tuo server

    $ php artisan serve

## In un terminale differente lancia

    $ npm run watch

## Test per utente con ordini e piatti già presenti

- Mail Utente: nonnapina@gmail.com
- Password: nonna_pina

# Tecnologie Utilizzate

- Html
- Css
- Sass
  - Bootstrap 4
- Javascript
  - Vue
  - Chart.js
- Php
  - Laravel
  - Braintree
- MySql

# Preview


