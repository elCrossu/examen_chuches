# [cite_start]Examen de Programación: Sistema de Gestión de Chucherías [cite: 4, 15]

## Información General
* [cite_start]**Módulo:** MF0492 3 - Programación web en el entorno servidor [cite: 5]
* [cite_start]**Unidad Formativa:** UF1844 - Desarrollo de aplicaciones web en el entorno servidor [cite: 5]
* [cite_start]**Especialidad:** IFCD0210 - DESARROLLO DE APLICACIONES CON TECNOLOGIAS WEB (CP) [cite: 5]
* [cite_start]**Institución:** CIFP TXURDINAGA LHII / Lanbide / Eusko Jaurlaritza [cite: 1, 2, 3]

---

## Descripción del Proyecto
[cite_start]Estamos creando un sistema de gestión para nuestra tienda de chucherías, cada chucheria tiene un nombre, información alimentaria de sus ingredientes y un precio[cite: 15]. [cite_start]Los productos en la base de datos cuentan con un `id` autoincremental[cite: 16].

### Datos de Ejemplo
| Nombre | Info | Precio |
| :--- | :--- | :--- |
| Llave | azucar, pica pica | [cite_start]1 [cite: 17] |
| alubia | azucar, | [cite_start]0,7 [cite: 17] |
| Ladrillo | Regaliz, nata | [cite_start]0,8 [cite: 17] |

---

## Requisitos del Examen

### [cite_start]Preparación de entorno nuevo (2 puntos) [cite: 18]
* [cite_start]**Prepara docker-compose (1 punto):** Crea una carpeta llamada `examen_chuches`[cite: 20]. [cite_start]Prepara un docker-compose que abre tu web en el puerto 7005 y la base de datos en 7006[cite: 21]. [cite_start]Asegurate de que los contenedores tienen en su nombre `examen_` para que no haya conflictos (por ejemplo `php_examen`)[cite: 21, 22].
* [cite_start]**Conexión desde PHP (1 punto):** El código de PHP se conecta a la base de datos[cite: 23]. [cite_start]Es decir, prepara un conector de PHP a la base de datos que aproveche correctamente el environment que has definido[cite: 23, 24].
* [cite_start]*Nota:* Se puede evitar la preparación del entorno trabajando desde `php_ejercicios`[cite: 25].

### [cite_start]Programación (8 puntos) [cite: 26]
* [cite_start]**Crear tabla (1 punto):** Crea una tabla llamada `chuches`[cite: 27]. [cite_start]*(Si no sabes te lo hago yo, pero no puntua)*[cite: 27].
* [cite_start]**Crea un formulario (1 punto):** En el que podamos introducir esta información sobre las chucherías[cite: 28].
* [cite_start]**Insertar:** Al pulsar submit en el formulario se almacenan los datos[cite: 30].
  * [cite_start]El formulario inserta datos en un csv (1 punto)[cite: 31].
  * [cite_start]El formulario inserta datos en la base de datos (1 punto)[cite: 32].
* [cite_start]**Botón ver productos (1 punto):** Carga una nueva página en la que se pueden ver todos los productos de la base de datos[cite: 33, 34].
* [cite_start]**Eliminar (1 punto):** En la página de ver los productos de la base de datos hay un botón que nos permite eliminarlo[cite: 35, 36].
* [cite_start]**Botón, ver histórico (1 punto):** Carga una nueva página en la que se ven los productos del CSV[cite: 37].
* [cite_start]**Seguridad (1 punto):** Securiza las querys[cite: 38].

### [cite_start]Extra [cite: 39]
* [cite_start]En cada insert y delete crea un `log::debug` también en los errores el `log::error` (0,5 puntos)[cite: 40].
* [cite_start]Modifica el formulario de creación, permite definir el id, si se define el id, modifica el dato con la id concreta (1 punto)[cite: 42, 43].

---

## [cite_start]Entrega del examen [cite: 44]
* [cite_start]Si no has creado el proyecto y lo has metido dentro de PHP ejercicios, solo haz el commit y push, luego me avisas para que lo descargue[cite: 45]. [cite_start]La carpeta dentro de PHP_ejercicios se tiene que llamar `examen_chuches`[cite: 46].
* [cite_start]Si has creado el proyecto, la carpeta del proyecto se tiene que llamar `examen_chuches`[cite: 47]. [cite_start]Comprimela y sube el archivo zip al classroom[cite: 48].