# Examen de Programación: Sistema de Gestión de Chucherías

## Información General
* **Módulo:** MF0492 3 - Programación web en el entorno servidor
* **Unidad Formativa:** UF1844 - Desarrollo de aplicaciones web en el entorno servidor
* **Especialidad:** IFCD0210 - DESARROLLO DE APLICACIONES CON TECNOLOGIAS WEB (CP)
* **Institución:** CIFP TXURDINAGA LHII / Lanbide / Eusko Jaurlaritza

---

## Descripción del Proyecto
Estamos creando un sistema de gestión para nuestra tienda de chucherías, cada chucheria tiene un nombre, información alimentaria de sus ingredientes y un precio. Los productos en la base de datos cuentan con un `id` autoincremental.

### Datos de Ejemplo
| Nombre | Info | Precio |
| :--- | :--- | :--- |
| Llave | azucar, pica pica | 1 |
| alubia | azucar, | 0,7 |
| Ladrillo | Regaliz, nata | 0,8 |

---

## Requisitos del Examen

### Preparación de entorno nuevo (2 puntos)
* **Prepara docker-compose (1 punto):** Crea una carpeta llamada `examen_chuches`. Prepara un docker-compose que abre tu web en el puerto 7005 y la base de datos en 7006. Asegurate de que los contenedores tienen en su nombre `examen_` para que no haya conflictos (por ejemplo `php_examen`).
* **Conexión desde PHP (1 punto):** El código de PHP se conecta a la base de datos. Es decir, prepara un conector de PHP a la base de datos que aproveche correctamente el environment que has definido.
* *Nota:* Se puede evitar la preparación del entorno trabajando desde `php_ejercicios`.

### Programación (8 puntos)
* **Crear tabla (1 punto):** Crea una tabla llamada `chuches`. *(Si no sabes te lo hago yo, pero no puntua)*.
* **Crea un formulario (1 punto):** En el que podamos introducir esta información sobre las chucherías.
* **Insertar:** Al pulsar submit en el formulario se almacenan los datos.
  * El formulario inserta datos en un csv (1 punto).
  * El formulario inserta datos en la base de datos (1 punto).
* **Botón ver productos (1 punto):** Carga una nueva página en la que se pueden ver todos los productos de la base de datos.
* **Eliminar (1 punto):** En la página de ver los productos de la base de datos hay un botón que nos permite eliminarlo.
* **Botón, ver histórico (1 punto):** Carga una nueva página en la que se ven los productos del CSV.
* **Seguridad (1 punto):** Securiza las querys.

### Extra
* En cada insert y delete crea un `log::debug` también en los errores el `log::error` (0,5 puntos).
* Modifica el formulario de creación, permite definir el id, si se define el id, modifica el dato con la id concreta (1 punto).

---

## Entrega del examen
* Si no has creado el proyecto y lo has metido dentro de PHP ejercicios, solo haz el commit y push, luego me avisas para que lo descargue. La carpeta dentro de PHP_ejercicios se tiene que llamar `examen_chuches`.
* Si has creado el proyecto, la carpeta del proyecto se tiene que llamar `examen_chuches`. Comprimela y sube el archivo zip al classroom.
