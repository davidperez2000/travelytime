Repositorio TRAVEL AND TIME

Componentes: David Pérez y Francisco Javier Escudero 

Carpetas (modelo vista controlador):

-Carpeta Principal: Contiene el fichero index.php, el fichero central de la aplicación.

-Controllers: Contiene los ficheros .php que controlan el funcionamiento de la página y el intercambio de informacion, este intercambio es entre modelos y vistas.
 
-TPV : Contiene la librería de pago virtual además de un scipt que la gestiona aquí podremos cambiar el valor URLOOK y URL para la redirección si todo sale bien en la compra o no
               
-PHPMAILER : Contiene la librería de correo.

-db: Tiene en su interior el fichero de conexión a la base de datos.

-img: Carpeta donde se guardan las imágenes que se en las páginas.

-js : Contiene ficheros .js referentes de las páginas.

-models: Esta carpeta tiene archivos php que es el responsable del tratamiento de datos referente a la base de datos como son los inserts o selects.

-estilos: Contiene ficheros .css de las páginas.

-views: Contiene ficheros.txt que actuan para cambiar la vista de ayuda.php y scripts que reciben información y cambian la vista del usuario.


Despligue:

Instalar un servidor apache que contenga PHP y una base de datos , nosotros hemos utilizado estas versiones:
    -PHP: 5.5.9
    -APACHE: 2.4.41
    -MYSQL: 5.5.2

Realizar un git clone https://github.com/davidperez2000/travelytime/ y moverlo a la carpeta donde se encuentra nuestro servidor.

Cuando se tenga creada la base de datos añadir el archivo .sql que se encuentra en el raiz a la base de datos. 
