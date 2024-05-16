Esercizio: laravel-dc-comics
===
CRUD TODO LIST
1. clonare il template.
2. creare la migration.
3. creare il model.
4. popolare la tabella con il seeder (dall’array presente in config).
5. creare il resource controller (`php artisan make:controller --resource NomeController`).
6. creare le rotte resource (`Route::resource('nome_tabella', MioResourceController::class);`).
7. relativamente alle rotte GET creare  le view in una cartella con il nome della tabella della CRUD e con il nome del metodo del resource controller relativo.

Per la navigazione:
- la rotta home è fuori dalla CRUD (se si s vuole si può stampatre il numero di card presenti).
- elenco prodotti   (GET index).
- dettaglio prodotto (GET show).
- form nuovo prodotto (GET create) (ricordarsi il token @csrf).
- rotta per salvare i dati provenienti dal form create (POST store).
- una volta salvati i dati reindirizzare alla show (`return redirect()->route('mia_tabella.show', $new_elemento);`).
