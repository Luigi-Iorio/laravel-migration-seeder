# Train Station

### Descrizione

In questo progetto, è stata creata una tabella denominata **trains** per gestire informazioni sui treni.

La struttura della tabella è stata realizzata attraverso delle migrations.

### Struttura Tabella

La tabella è formata dalle seguenti colonne:

-   **id**
-   **created_at**
-   **updated_at**
-   **company**
-   **departure_station**
-   **arrival_station**
-   **departure_time**
-   **arrival_time**
-   **train_code**
-   **num_carriages**
-   **is_in_time**
-   **is_deleted**
-   **departure_day**

### Inseirmento dati

Per popolare la tabella, i dati iniziali sono stati inseriti tramite PhpMyAdmin.

### Controller

Tramite un controller è stata gestita la visualizzazione dei treni sulla home page, il controller mostra tutti i treni in partenza dalla data odierna.
