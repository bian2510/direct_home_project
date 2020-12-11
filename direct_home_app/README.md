# Convenciones

## Archivos deberan seguir esta estructura

- Primero los imports
- Segundo la funcion que va a retornar ese componente
### Dentro de la funcion

- Primero las props
- Segundo los states (hooks, state de redux, o local storage)
- Tercero otras variables
- Cuarto hadlres y funciones
- Quinto nodos de elementos que seran renderizados en el return de la funcion
- Sexto elemento que sera retornado y contendra los nodos hechos anteriormente

## Funciones

Las funciones deben ser nombradas aplicando camelCase. Veamos algunos ejemplos:

- getUser()
- setIsAdminAttribute()

## Variables
Las variables deben de ser descriptivas. Estas deben aplicar el estilo camelCase. Veamos algunos ejemplos:

- $admins = User::isAdmin()->get();
- $activeUser = User::active()->first();

## Carpetas y Archivos

Todas las carpetas y archivos van a estar nombrados usando camelCase (primera letra minuscula y luego las demas palabras con primera letra en mayuscula).

- usersForms
- userUtils.js

## Componentes

Los componentes de React van a ser nombrados usando PascalCase (todas las palabras tienen en mayuscula su primera letra).

- UserCard.jsx
- UserForm.jsx

## CSS
Vamos a utilizar metodologia BEM (Block Element Modifier) Ya que cada elemento del UI va a ser armado con componentes. Una guia rapida de esta metodologia se puede encontrar [aca](https://www.freecodecamp.org/news/css-naming-conventions-that-will-save-you-hours-of-debugging-35cea737d849/).:
