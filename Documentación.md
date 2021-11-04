## pruebas en laravel para probar la API

Teniendo en cuenta que ya hemos creado el proyecto de laravel y la conexion</br> con la base de datos lo primero que hacemos es la crear la tabla de la base</br> de datos usando el comando de "php artisan  make:model Cliente -m" con este</br> comando tambien nos genera el model, podemos ver en la captura el resultado.

![Imagen](image/uno.png)



Posteriormete buscamos la carpeta de models y seleccionamos el archivo que nos creo</br> que se llama "Cliente" usamos una variable para pasarle el nombre de la tabla de tipo</br> protegido y despues los datos que contiene ella, esto lo utilizaremos para registrar datos.</br>
![Imagen](image/nueve.png)

Despues creamos un controller este se crea con el comando "php artisan make:controller</br> ClienteController --resource" y listo, despues dentro del archivo encontraremos las</br> funciones que tiene un crud que son la que usamos, en la de index solo importamos la clase</br> cliente models y la retornamos en response para que nos devuelva el resultado, en el caso</br> de la funcion de store esta usamos consulta request donde en un archivo de ahi ingresamos los</br> campos que necesitamos y que sean de tipo requerido y aqui solo lo importamos, luego</br> instanciamos el models y le pasamos la fuuncionalidad create de tipo request en caso que este</br> todo bien nos mandara el mensaje que esta guardado correctamente.</br>
![Imagen](image/seis.png)

la funcion de update esta usamos consulta request donde importamos un archivo de ahi ingresamos los</br> campos que necesitamos y que sean de tipo requerido y aqui solo lo importamos, luego</br> instanciamos el models y le pasamos la funcionalidad update de tipo request en caso que este</br> todo bien nos mandara el mensaje que esta editado correctamente,</br> para destroy que es eliminar es sencillo solo instanciamos a cliente le</br> paasamos la funcion delete y por ultimo que nos retorne un mensaje que se elimino.</br>


![Imagen](image/once.png)

![Imagen](image/ocho.png)

Despues buscamos en la carpeta Routes seleccionamos el archivo de api y creamos las rutas</br> a como podemos ver la imagen, para evitar cualquier erro, tenemos que importar la ruta del</br> clienteController y listo podemos ejecutar.

![Imagen](image/cinco.png)

Por ultimo, despues de ejecutar nos dirigimos hacia postman y nos llevamos la ruta</br> o direccion de store que es para ingresar, la colocamos en la parte superior, despues</br> Agregamos los campos y lo que vamos ingresar en cada campo en formato json,</br> ejecutamos y obtenemos el resultado en este caso todo bien.</br>


![Imagen](image/dos.png)

Ahora estando en postman habrimos otra venta,ingresamos la ruta o direccion de update</br> que es para editar, la colocamos en la parte superior y le pasamos el id del cliente que</br> deseamos editar, despues Agregamos los campos y lo que vamos editar en cada campo</br> en formato json, ejecutamos y obtenemos el resultado en este caso todo bien.</br>

![Imagen](image/tres.png)

Y para finalizar el delete este es para eliminar, aqui al igual que editar le pasamos la ruta con su id</br> especifico pero para eliminarlo damos ejecutar y listo, tenemos resultado correcto.</br>

![Imagen](image/cuatro.png)


Ahora sigue lo que es los test con unit, para esto nos vamos a la carpeta unit creamos</br> un archivo "php artisan make:Test clienteTest --unit" y listo, dentro de el creamos las</br> funciones que se llaman "test_update y test_delete" y dentro de ella le pasamos el metodo</br> la de update es put y por parametro le pasamos la ruta con id, despues pasamos los campos</br> que editaremos y por ultimo el mensaje de comprobacion en un json, para el eliminar es igual</br> le pasamos el metodo delete despues laruta con su id especifico y listo, despues un mensaje en tipo json</br>  le pasamos los parametro,  por ultimo lo ejecutamos con "php artisan test" y podemos ver como resultado que nos funciono</br> correctamete, esta forma de test es prueba uno por uno.


![Imagen](image/doce.png)

![Imagen](image/catorce.png)
![Imagen](image/trece.png)

