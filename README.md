
# Laravel Template

## Installazione

### Laravel
```bash
composer create-project laravel/laravel .
```

### Vite
```bash
npm install
```

### Sass
```bash
npm install --save-dev sass
```

### Bootstrap
```bash
npm install --save bootstrap @popperjs/core
```

## Modifiche

### 1. Rinominate cartella e file CSS in SCSS
- Modificate i file e le cartelle CSS in SCSS per migliorare la struttura e la gestione dello stile.

### 2. Modificato percorso CSS in SCSS in vite.config.js
- Aggiornate il percorso dei file CSS a SCSS nel file di configurazione Vite (`vite.config.js`).
  ```javascript
  // Aggiungiamo un alias per la cartella /resources/
  resolve: {
    alias: {
      '~resources': '/resources/'
    }
  },
  ```

### 3. Importiamo tramite JS il nostro CSS
- Importate il vostro file CSS tramite JavaScript nel file principale (`app.js`).
  ```javascript
  // Import our custom SCSS
  import '~resources/scss/app.scss'
  ```

### 4. Includiamo gli assets con la direttiva @vite
- Utilizzate la direttiva @vite per includere gli assets nel vostro progetto.
  ```html
  @vite('resources/js/app.js')
  ```

### 5. Aggiunto `import.meta.glob([...])` in `app.js`
- Aggiungete l'importazione delle immagini tramite l'oggetto `import.meta` nel vostro file principale (`app.js`).
  ```javascript
  import.meta.glob([
    '../img/**'
  ])
  ```

### 6. Codice per aggiungere immagini
- Utilizzate il seguente codice per aggiungere immagini nel vostro progetto.
  ```html
  <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
  ```

### 7. Importiamo `path` in `vite.config.js`
- Importate la libreria `path` nel file di configurazione Vite (`vite.config.js`).
  ```javascript
  import path from "path"
  ```

### 8. Aggiunto alias `bootstrap` in `vite.config.js`
- Aggiungete un alias per Bootstrap nel file di configurazione Vite (`vite.config.js`).
  ```javascript
  '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
  ```

### 9. Importato il CSS di Bootstrap in SCSS
- Importate il CSS di Bootstrap nel vostro file SCSS principale (`app.scss`).
```javascript
  /*resources/scss/app.scss*/
  @import "~bootstrap/scss/bootstrap";
  ```


### 10. Importato il JS di Bootstrap in `app.js`
- Importate il JavaScript di Bootstrap nel vostro file principale (`app.js`).
```javascript
  // Import all of Bootstrap's JS
  import * as bootstrap from 'bootstrap'
  ```
