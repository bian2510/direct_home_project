
# Convenciones

## Controladores

Los nombres de los controladores se derivan del nombre del modelo, añadiendo el sufijo Controller.Aplicando el estilo PascalCase. Veamos algunos ejemplos:

- UserController
- OrderDetailController

## Funciones

Las funciones deben ser nombradas aplicando camelCase. Veamos algunos ejemplos:

- getUser()
- setIsAdminAttribute()

## Modelos

Para nombrar a los modelos tomaremos el nombre de la entidad en singular y siempre aplicando PascalCase. Veamos algunos ejemplos:

- User
- OrderDetail

## Propiedades de modelos

Los nombres de los atributos tanto los recibidos de la base de datos como los computados, deben ser nombrados siguiendo snake_case:

- $user->name
- $order->created_at

## Relaciones

Las relaciones deben seguir el modo de nombrado de las funciones. Además, los nombres de estos deben de ir en singular o plural dependiendo de la naturaleza de la relación.

Las relaciones de tipo hasMany, belongsToMany, morphMany deben de indicarse en plural, pues es lógico que estas tratarán a una colección de elementos:

- $continent->countries()
- $book->authors()
- $country->name()

## Pruebas

Para nombras los métodos de prueba antepondremos test, el resto del nombre debe ser una descripción del tipo de prueba que se realice, siguiendo lo ya mencionado en la sección funciones. Para el estilo de nombrado se emplea snake_case . Ejemplos:

- test_get_user_order_history()
- test_create_and_assign_roles_to_a_user()

## Rutas

Los sustantivos en las rutas deben ser indicadas en plural, aplicando durante todo esto kebab-case. Ejemplos:

- /customers/23
- /orders

## Tablas entidad

Las tablas toman el nombre inglés en plural de la entidad, aplicando en este caso snake_case. Veamos algunos ejemplos:

- users
- order_details

## Tablas pivot/pivote

El nombre de las tablas pivote -empleadas en relaciones de muchos a muchos- se deriva del de los nombres en singular en orden alfabético de las entidades relacionadas, empleando snake_case. Veamos algunos ejemplos:

- user_permission
- category_post

## Columnas
Las columnas deben ser nombradas aplicando snake_case. Ejemplos:

- id
- created_at
- phone_number

## Variables
Las variables deben de ser descriptivas. Estas deben aplicar el estilo camelCase. Veamos algunos ejemplos:

- $admins = User::isAdmin()->get();
- $activeUser = User::active()->first();