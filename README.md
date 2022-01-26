####### Cosas que no se ven a simple vista en el desarrollo del aplicativo web Laika en el Frontal:

    1.	Instalación en modo desarrollo:
a.	Se carga el archivo en el VSC, o editor de su preferencia.
b.	Inicializamos el mix-laravel. npm rum dev/production/watch/watch-poll
c.	Inicializamos el json-server. json-server –watch ciudades.json –port 4000
d.	Vamos a la url de laika.test en el navegador de su preferencia.
e.	Se recomienda tener la consola del navegador abierta, ya que algunas validaciones se muestran por medio de un console.log.

    2.	Información de la aplicación: 
a.	Está desarrollada en Laravel, usando Javascript, CSS3, HTML5, y algunas librerías.
b.	No se hace uso de Bootstrap, ni Tailwind, ni ningún framework de css.
c.	Se hace uso de librerías JS como lo son SWEETALERT2.
d.	Para iconos se hace uso de FontAwesome, y también se hace uso de fuentes de letra externas como lo son: Armarial.
e.	Se hace uso de la metodología SMACSS 
f.	La lista de las ciudades es llamada creada en un archivo .json (ciudades.json) se llama por medio de fetchAPI de Javascript y se muestra haciendo uso de scripting.
