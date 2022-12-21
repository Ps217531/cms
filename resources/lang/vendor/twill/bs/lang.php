<?php
    /*
    |--------------------------------------------------------------------------
    | 5 Steps to Contribute a New Twill Localization at Ease
    |--------------------------------------------------------------------------
    | 1. Find the "lang.csv" under "lang" directory.
    | 2. Import the csv file into a blank Google Sheet.
    | 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
    | 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
    | 5. Run the command "php artisan twill:lang" to sync all lang files.
    */


return [
    'auth' => [
        'back-to-login' => 'Nazad na prijavu',
        'choose-password' => 'Odaberite šifru',
        'email' => 'Email',
        'forgot-password' => 'Zaboravi šifru',
        'login' => 'Prijava',
        'login-title' => 'Prijava',
        'oauth-link-title' => 'Unesite ponovo šifru da :provider povežete sa vašim računom',
        'otp' => 'Jednokratna šifra',
        'password' => 'Šifra',
        'password-confirmation' => 'Potvrdite šifru',
        'reset-password' => 'Resetujte šifru',
        'reset-send' => 'Pošaljite zahtjev za reset šifre',
        'verify-login' => 'Potvrdite prijavu',
    ],
    'buckets' => [
        'intro' => 'Šta želite objaviti danas?',
        'none-available' => 'Nema dostupnih podataka.',
        'none-featured' => 'Nema objavljenih podataka.',
        'publish' => 'Objavi',
        'source-title' => 'Dostupni podaci',
    ],
    'dashboard' => [
        'all-activity' => 'Sva aktivnost',
        'create-new' => 'Kreiraj novu',
        'empty-message' => 'Nemate nikakve aktivnosti još.',
        'my-activity' => 'Moja aktivnost',
        'my-drafts' => 'Moji primjeri',
        'search-placeholder' => 'Pretraži sve...',
        'statitics' => 'Statistika',
        'search' => [
            'loading' => 'Učitavanje...',
            'no-result' => 'Nema pronađenih rezultata.',
            'last-edit' => 'Zadnje uređeno',
        ],
        'activities' => [
            'created' => 'Kreirano',
            'updated' => 'Ažurirano',
            'unpublished' => 'Skinuto sa objave',
            'published' => 'Objavljeno',
            'featured' => 'Istaknuto',
            'unfeatured' => 'Skinuto sa istaknutog',
            'restored' => 'Obnovljeno',
            'deleted' => 'Obrisano',
        ],
        'activity-row' => [
            'edit' => 'Uredi',
            'view-permalink' => 'Vidi stalni link',
            'by' => 'od strane',
        ],
        'unknown-author' => 'Nepoznato',
    ],
    'dialog' => [
        'cancel' => 'Prekini',
        'ok' => 'OK',
        'title' => 'Premjesti u Otpad',
    ],
    'editor' => [
        'cancel' => 'Prekini',
        'delete' => 'Obriši',
        'done' => 'Gotovo',
        'title' => 'Uređivanje materijala',
    ],
    'emails' => [
        'all-rights-reserved' => 'Sva prava pridržana.',
        'hello' => 'Zdravo!',
        'problems' => 'Ako imate problem sa klikanjem na ":actionText" dugme, kopirajte i zalijepite URL ispod u vaš pretraživač: [:url](:url)',
        'regards' => 'Poštovanje.',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => 'Dodaj materijal',
            'collapse-all' => 'Sakrij sve',
            'create-another' => 'Kreiraj drugi',
            'delete' => 'Obriši',
            'expand-all' => 'Prikaži sve',
            'loading' => 'Učitavanje',
            'open-in-editor' => 'Otvori u uređivaču',
            'preview' => 'Pregledaj',
            'add-item' => 'Dodaj stvar',
            'clone-block' => 'Kloniraj blok',
        ],
        'browser' => [
            'add-label' => 'Dodaj',
            'attach' => 'Priloži',
        ],
        'files' => [
            'add-label' => 'Dodaj',
        ],
        'generic' => [
            'switch-language' => 'Promijeni jezik',
        ],
        'map' => [
            'hide' => 'Sakrij&nbsp;mapu',
            'show' => 'Prikaži&nbsp;mapu',
        ],
        'medias' => [
            'btn-label' => 'Priloži sliku',
            'crop' => 'Obreži',
            'crop-edit' => 'Uredi crop slike',
            'crop-list' => 'rezati',
            'crop-save' => 'Ažuriranje',
            'delete' => 'Brisanje',
            'download' => 'Skidanje',
            'edit-close' => 'Zatvori info',
            'edit-info' => 'Uredi info',
            'original-dimensions' => 'Original',
            'alt-text' => 'Alternativni text',
            'caption' => 'Natpis',
            'video-url' => 'Video URL (opcijalno)',
        ],
    ],
    'filter' => [
        'apply-btn' => 'Primjeni',
        'clear-btn' => 'Očisti',
        'search-placeholder' => 'Traži',
        'toggle-label' => 'Filtriraj',
    ],
    'footer' => [
        'version' => 'Verzija',
    ],
    'form' => [
        'content' => 'Materijal',
        'dialogs' => [
            'delete' => [
                'confirm' => 'Obriši',
                'confirmation' => 'Da li ste sigurni ?<br />Ova izmjena ne može biti vraćena.',
                'delete-content' => 'Obriši materijal',
                'title' => 'Obriši materijal',
            ],
        ],
        'editor' => 'Uređivač',
    ],
    'lang-manager' => [
        'published' => 'Uživo',
    ],
    'lang-switcher' => [
        'edit-in' => 'Uredi u',
    ],
    'listing' => [
        'add-new-button' => 'Dodaj novi',
        'bulk-actions' => 'Više akcija',
        'bulk-clear' => 'Očisti',
        'columns' => [
            'featured' => 'Istaknuto',
            'name' => 'Ime',
            'published' => 'Objavljeno',
            'show' => 'Prikaži',
            'thumbnail' => 'Sličica',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => 'Obriši',
                'disclaimer' => 'Ova stvar neće biti obrisana, već će se nalaziti u smeću.',
                'move-to-trash' => 'Premjesti u otpad',
                'title' => 'Obriši ovo',
            ],
            'destroy' => [
                'confirm' => 'Uništi',
                'destroy-permanently' => 'Uništi zauvijek',
                'disclaimer' => 'Ova stvar neće se moći vratiti više.',
                'title' => 'Obriši ovo',
                'cancel' => 'Prekini',
            ],
            'cancel' => 'Prekini',
        ],
        'dropdown' => [
            'delete' => 'Obriši',
            'destroy' => 'Uništi',
            'duplicate' => 'Kloniraj',
            'edit' => 'Uredi',
            'publish' => 'Objavi',
            'feature' => 'Istakni',
            'restore' => 'Obnovi',
            'unfeature' => 'Nemoj istaknuti',
            'unpublish' => 'Nemoj objaviti',
        ],
        'filter' => [
            'all-items' => 'Sve stvari',
            'draft' => 'Primjer',
            'mine' => 'Moje',
            'published' => 'Objavljeno',
            'trash' => 'Smeće',
        ],
        'languages' => 'Jezici',
        'listing-empty-message' => 'Ovdje se još ništa ne nalazi.',
        'paginate' => [
            'rows-per-page' => 'Redova po stranici:',
        ],
        'bulk-selected-item' => 'odabrana stvar',
        'bulk-selected-items' => 'odabrane stvari',
        'reorder' => [
            'success' => ':modelTitle raspored se promijenio!',
            'error' => ':modelTitle raspored se nije promijenio!',
        ],
        'restore' => [
            'success' => ':modelTitle obnovljeno!',
            'error' => ':modelTitle nije obnovljen. Nešto je pošlo po zlu!',
        ],
        'bulk-restore' => [
            'success' => ':modelTitle obnovljeni podaci!',
            'error' => ':modelTitle podaci nisu obnovljeni. Nešto je pošlo po zlu!',
        ],
        'force-delete' => [
            'success' => ':modelTitle uništeno!',
            'error' => ':modelTitle nije uništen. Nešto je pošlo po zlu!',
        ],
        'bulk-force-delete' => [
            'success' => ':modelTitle podaci uništeni!',
            'error' => ':modelTitle podaci nisu uništeni. Nešto je pošlo po zlu!',
        ],
        'delete' => [
            'success' => ':modelTitle premješten u smeće!',
            'error' => ':modelTitle nije premješten u smeće. Nešto je pošlo po zlu!',
        ],
        'bulk-delete' => [
            'success' => ':modalTitle podaci su premješteni u smeće!',
            'error' => ':modelTitle podaci nisu premješteni u smeće. Nešto je pošlo po zlu!',
        ],
        'duplicate' => [
            'success' => ':modelTitle uspješno duplicirano!',
            'error' => ':modelTitle nije dupliciran. Nešto je pošlo po zlu!',
        ],
        'publish' => [
            'unpublished' => ':modelTitle skinuto sa objave!',
            'published' => ':modelTitle objavljeno!',
            'error' => ':modelTitle nije objavljen. Nešto je pošlo po zlu!',
        ],
        'featured' => [
            'unfeatured' => ':modelTitle neistaknut!',
            'featured' => ':modelTitle istaknut!',
            'error' => ':modelTitle nije istaknut! Nešto je pošlo po zlu!',
        ],
        'bulk-featured' => [
            'unfeatured' => ':modelTitle podaci su neistaknuti!',
            'featured' => ':modelTitle podaci istaknuti!',
            'error' => ':modelTitle podaci nisu istaknuti. Nešto je pošlo po zlu!',
        ],
        'bulk-publish' => [
            'unpublished' => ':modelTitle podaci su smaknuti sa objave!',
            'published' => ':modelTitle podaci su objavljeni!',
            'error' => ':modelTitle podaci nisu objavljeni. Nešto je pošlo po zlu!',
        ],
    ],
    'main' => [
        'create' => 'Kreiraj',
        'draft' => 'Primjer',
        'published' => 'Uživo',
        'title' => 'Naslov',
        'update' => 'Ažuriranje',
    ],
    'media-library' => [
        'files' => 'Fajlovi',
        'filter-select-label' => 'Filtriraj po tagovima',
        'images' => 'Slike',
        'insert' => 'Umetni',
        'sidebar' => [
            'alt-text' => 'Alternativni text',
            'caption' => 'Natpis',
            'clear' => 'Očisti',
            'dimensions' => 'Dimenzije',
            'empty-text' => 'Nema odabranog fajla',
            'files-selected' => 'fajlovi odabrani',
            'tags' => 'Tagovi',
        ],
        'title' => 'Media Knjižnica',
        'update' => 'Ažuriraj',
        'unused-filter-label' => 'Pokaži nekorištene samo',
        'no-tags-found' => 'Oprostite, nema ovakvih tagova.',
        'dialogs' => [
            'delete' => [
                'delete-media-title' => 'Obriši medija',
                'delete-media-desc' => 'Da li ste sigurni ?<br /> Ova akcija ne može biti vraćena.',
                'delete-media-confirm' => 'Obriši',
                'title' => 'Da li ste sigurni?',
                'allow-delete-multiple-medias' => 'Neki fajlovi se koriste i ne mogu biti obrisani. Da li želite obrisati ostatak fajlova?',
                'allow-delete-one-media' => 'Ovaj fajl se koristi i ne može biti izbrisan. Da li želite obrisati ostatak fajlova?',
                'dont-allow-delete-multiple-medias' => 'Ovi fajlovi se koriste i ne mogu biti izbrisani.',
                'dont-allow-delete-one-media' => 'Ovaj fajl se koristi i ne može biti izbrisan.',
            ],
            'replace' => [
                'replace-media-title' => 'Zamijeni medija',
                'replace-media-desc' => 'Da li ste sigurni ?<br /> Ova akcija ne može biti vraćena.',
                'replace-media-confirm' => 'Zamijeni',
            ],
        ],
        'types' => [
            'single' => [
                'image' => 'slika',
                'video' => 'video',
                'file' => 'fajl',
            ],
            'multiple' => [
                'image' => 'slike',
                'video' => 'videji',
                'file' => 'fajlovi',
            ],
        ],
    ],
    'modal' => [
        'create' => [
            'button' => 'Kreiraj',
            'create-another' => 'Kreiraj i dodaj drugi',
            'title' => 'Dodaj novi',
        ],
        'permalink-field' => 'Stalni link',
        'title-field' => 'Naslov',
        'update' => [
            'button' => 'Ažuriraj',
            'title' => 'Ažuriraj',
        ],
        'done' => [
            'button' => 'Gotovo',
        ],
    ],
    'nav' => [
        'admin' => 'Admin',
        'cms-users' => 'CMS korisnici',
        'logout' => 'Odjavi se',
        'media-library' => 'Media Knjižnica',
        'settings' => 'Postavke',
        'close-menu' => 'Zatvori menu',
    ],
    'notifications' => [
        'reset' => [
            'action' => 'Resetuj šifru',
            'content' => 'Primate ovaj mail jer smo primili zahtjev za resetom šifre. Ako niste napravili ovaj zahtijev, slobodno ignorirajte ovaj email.',
            'subject' => ':appName | Resetuj šifru',
        ],
        'welcome' => [
            'action' => 'Odaberite osobnu šifru',
            'content' => 'Primate ovaj mail jer je napravljen račun za vas na imenu :name.',
            'title' => 'Dobro došli',
            'subject' => ':appName | Dobro došli',
        ],
    ],
    'overlay' => [
        'close' => 'Zatvori',
    ],
    'previewer' => [
        'compare-view' => 'Uporedi pogled',
        'current-revision' => 'Trenutno',
        'editor' => 'Uređivač',
        'last-edit' => 'Zadnje uređeno',
        'past-revision' => 'Prošlost',
        'restore' => 'Obnovi',
        'revision-history' => 'Revizija hitorije',
        'single-view' => 'Pojedinačni prikaz',
        'title' => 'Pregledaj izmjene',
        'unsaved' => 'Pregledaj vaše nespremljene izmejene',
        'drag-and-drop' => 'Povuci i pusti dio sa lijeve navigacije',
    ],
    'publisher' => [
        'cancel' => 'Prekini',
        'current' => 'Trenutno',
        'end-date' => 'Kraj Datum',
        'immediate' => 'Odmah',
        'languages' => 'Jezici',
        'languages-published' => 'Uživo',
        'last-edit' => 'Zadnje uređeno',
        'preview' => 'Pregledaj izmjene',
        'publish' => 'Objavi',
        'publish-close' => 'Objavi i zatvori',
        'publish-new' => 'Objavi i kreiraj novi',
        'published-on' => 'Objavljeno',
        'restore-draft' => 'Obnovi kao primjer',
        'restore-draft-close' => 'Obnovi kao primjer i zatvori',
        'restore-draft-new' => 'Obnovi kao primjer i kreiraj novi',
        'restore-live' => 'Obnovi kao objavljeno',
        'restore-live-close' => 'Obnovi kao objavljeno i zatvori',
        'restore-live-new' => 'Obnovi kao objavljeno i kreiraj novi',
        'restore-message' => 'Trenutno uređivate stariju reviziju ove objave (spremljeno od strane :user na :date). Napravite izmjene ako trebate potem kliknite obnovi da spremite novu izmjenu.',
        'restore-success' => 'Revizija obnovljena.',
        'revisions' => 'Revizije',
        'save' => 'Spremi kao primjer',
        'save-close' => 'Spremi kao primer i zatvori',
        'save-new' => 'Spremi kao primjer i kreiraj novi',
        'save-success' => 'Materijal spremljen. Sve dobro!',
        'start-date' => 'Startni Datum',
        'switcher-title' => 'Status',
        'update' => 'Ažuriraj',
        'update-close' => 'Ažuriraj i zatvori',
        'update-new' => 'Ažuriraj i kreiraj novi',
        'parent-page' => 'Roditeljska stranica',
        'review-status' => 'Status pregleda',
        'visibility' => 'Vidljivost',
    ],
    'select' => [
        'empty-text' => 'Oprostite, nema poklapanja.',
    ],
    'uploader' => [
        'dropzone-text' => 'ili prevucite nove fajlove ovdje',
        'upload-btn-label' => 'Dodaj novi',
    ],
    'user-management' => [
        '2fa' => '2-faktorska verifikacija',
        '2fa-description' => 'Molimo vas skenirajte ovaj QR kod sa Google Authenticator kompatibilnom aplikacijom i unesite privremenu šifru prije objavljivanja. Pogledajte listu kompatibilnih aplikacija <a href=":link" target="_blank" rel="noopener">ovdje</a>.',
        '2fa-disable' => 'Unesite šifru za jednokratnu upotrebu da onemogućite 2-faktorsku verifijaciju',
        'active' => 'Aktivno',
        'cancel' => 'Prekini',
        'content-fieldset-label' => 'Korisničke postavke',
        'description' => 'Deskripcija',
        'disabled' => 'Onemogućeno',
        'edit-modal-title' => 'Uredi korisničko ime',
        'email' => 'Email',
        'enable-user' => 'Omogući korisnika',
        'enable-user-and-close' => 'Omogući korisnika i zatvori',
        'enable-user-and-create-new' => 'Omogući korisnika i kreiraj novog',
        'enabled' => 'Omogućeno',
        'language' => 'Jezik',
        'language-placeholder' => 'Izaberi jezik',
        'name' => 'Ime',
        'otp' => 'Jedno-upotrebna šifra',
        'profile-image' => 'Profilna slika',
        'role' => 'Uloga',
        'role-placeholder' => 'Odaberi ulogu',
        'title' => 'Naslov',
        'trash' => 'Smeće',
        'update' => 'Ažuriraj',
        'update-and-close' => 'Ažuriraj i zatvori',
        'update-and-create-new' => 'Ažuriraj i kreiraj novi',
        'update-disabled-and-close' => 'Ažuriraj onemogućeno i zatvori',
        'update-disabled-user' => 'Ažuriraj onemogućenog korisnika',
        'update-disabled-user-and-create-new' => 'Ažuriraj onemogućenog korisnika i kreiraj novog',
        'user-image' => 'Slika',
        'users' => 'Korisnici',
    ],
    'settings' => [
        'update' => 'Ažuriraj',
        'cancel' => 'Prekini',
        'fieldset-label' => 'Uredi postavke',
    ],
];