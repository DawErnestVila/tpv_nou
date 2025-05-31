# Objectius del programa (Concurs TPV)

## Funcionalitat Bàsica (Treballadors)

La funcionalitat bàsica del programa és un **Terminal Punt de Venda (TPV)**. Quan s’inicia l'aplicació, l'usuari ha d'introduir un **codi d'identificació del treballador**. Aquest codi pot ser seqüencial numèric, alfanumèric o qualsevol altre format que decidiu.

Un cop el codi del treballador és validat , es mostrarà la **pantalla principal amb els productes disponibles per a la venda**. Aquests productes es visualitzaran en forma de **quadrícula** .

Per afegir un article a la comanda actual, l'usuari **clicarà sobre la representació del producte a la quadrícula**. En fer-ho, es mostrarà una manera de **seleccionar la quantitat desitjada** d'aquest article (per exemple, amb botons '+' i '-', o amb un camp de text per introduir la quantitat). Un cop seleccionada la quantitat, l'article amb la quantitat escollida s'afegirà a un **"carrito" o llista temporal de productes** que el client vol comprar.

Aquest procés es repetirà fins que s'hagin afegit tots els articles desitjats a la comanda. Llavors, hi haurà un **botó clarament identificat com a "Finalitzar" o similar**. En clicar aquest botó, es realitzaran les següents accions:

1.  **Actualització de l'estoc:** Es restarà de la base de dades la quantitat de cada article que s'ha venut. Per exemple, si s'han venut 2 unitats del producte "Cafè", l'estoc del "Cafè" a la base de dades es reduirà en 2.
2.  **Guardar la comanda a la Base de Dades:** La informació de la venda es registrarà de manera permanent en una base de dades (no es permet utilitzar fitxers plans per a aquesta tasca). Aquesta informació ha d'incloure almenys:
    - El codi del **treballador** que ha realitzat la venda.
    - L'**import total** de la comanda.
    - (Opcionalment, podríeu incloure la data i hora de la venda, els articles venuts amb les seves quantitats, etc.)

## Funcionalitat Addicional (Administrador/Cap del Bar)

A més de la funcionalitat bàsica per als treballadors, hi haurà un **rol d'administrador o cap del bar**, identificat amb un **codi d'accés específic** (el format d'aquest codi pot ser similar al dels treballadors o més complex, segons decidiu). Aquest administrador podrà realitzar totes les accions d'un treballador normal (introduir el seu codi i realitzar vendes), però a més tindrà accés a **tres seccions o apartats addicionals**:

1.  **Gestió d'Stock:** En aquesta secció, l'administrador podrà veure l'estoc actual de tots els articles. A més, tindrà la funcionalitat per **afegir més unitats d'un article** quan l'estoc sigui baix o s'hagin rebut noves existències.
2.  **Gestió de Treballadors:** Aquesta secció permetrà a l'administrador **afegir nous treballadors** al sistema (per exemple, introduint un nou codi d'identificació).
3.  **Visualització de Vendes per Treballador:** En aquesta secció, l'administrador podrà **consultar les vendes realitzades per cada un dels treballadors**. Això podria incloure el nombre total de vendes, l'import total venut per cada treballador en un període determinat, etc.

## Data Màxima

1 de setembre del 2025. Si es completa abans, millor.
