# Asiviajo Microsites
**Documentación V.1.0.0.**
## Indice
- Instalación de aplicación
- Temas

### Estructura de carpeta
- App (Arvhivos de aplicacion, middlewares, controladores, y modelos)
- Booststrap (Archivos de carga)
- Config (Archivos de configuracion de aplicación)
- Database (Archivos de migraciones y seeders)
- Public (Carpeta publica, temas y archivos de estilos)
- Resources (Archivos Scss, archivos de lenguajes, vistas de aplicación)
- Routes (Archivos de rutas)
- Storage (Archivos generados en la aplicación)
- Test (Archivos para test de aplicaición)
- Vendor (Archivos de componentes de aplicación - No cargados al repositorio)

# Instalación
**Para instalar la aplicación**
Windows / Linux :
```
cd nombredecarpeta
git clone git@github.com:jguevara1993/microsites.git
composer install
php artisan migrate --seed
```
Usuario predeterminado:
Usuario: ejemplo@asiviajo.com
Password: Administrador
# Temas
## Crear nuevo tema
>Todas las funciones de los temas extendienden las funciones del motor de vistas de laravel Blade templates
##### Estructura de carpeta
![Folder Structure](https://github.com/jguevara1993/microsites/blob/master/imagen%2022.jpg "folder structure")
- Carpeta con el nombre de tema
- Assets (images, js, css, fonts)
- Views (layouts, partials, vistas)
- Archivo theme.json

##### theme.json
```
{
	"slug": "test",
	"name": "test",
	"author": "VG TECHNOLOGY C.A.",
	"description": "Tema por defecto para asiviajo.",
	"version": "1.0.0"
}
```
*Slug*:identificador del tema usado por el motor de plantillas.
*name*: Nombre del tema.
*author*: Autor del tema, usado por el motor de plantillas.
*description*: Descripción del tema, usado por el motor de plantillas.
*version*: Version del tema, usado por el motor de plantillas.
>El archivo theme.json es obligatorio para que el motor de plantillas cargue los componentes de la plantilla.

Todas las vistas deben estar cargadas en un controlador o en una ruta de la aplicación
**/routes/web.php**
```
Route::get('/', 'PageController@showIndexTemplate');
```
**/app/Http/controllers/ThemeController.php**
```
class PageController extends Controller
    public function showIndexTemplate()
    {
        $block = DB::table('blocks')->where('page','index')->get();
        return Theme::view('index', compact('block'));
    }
```
Puedes pasar cualquier datos a traves de las vistas de las plantillas utilizando tu modelo y funciones de la aplicación.

```
class PageController extends Controller
    public function showBlogTemplate()
      $block = Post::paginate(10);
      return Theme::view('blog', compact('block'));
    }
```
Debes generar un layout para tu tema el cual se extendera a las vistas ubicadas en la carpeta views.
>Para mostrar archivos de un tema utiliza el facade Theme::asset('nombredeltema::ruta/de/carpeta/o/archivo') dentro de los respectivas llaves {{ }} para mostrar datos en el motor de blade.

**/tema/views/layouts/main.blade.php**
```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="themes/favicon.png" />
    <link rel="stylesheet" href="{{ Theme::asset('Tema::css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('Tema::css/style.css') }}">

  </head>
  <body>

    @section('nav')
      @include('Tema::partials.nav')
    @show

    @yield('content')

    @section('footer')
      @include('Tema::partials.footer')
    @show


    <script src="{{ Theme::asset('Tema::js/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Tema::js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ Theme::asset('Tema::js/main.js') }}" charset="utf-8"></script>
  </body>
</html>
```
>Todas las secciones que deseas incluir dentro de las vistas deben ser creadas dentro de la carpeta partials con la extensión .blade.php

**index.blade.php**
```
@extends('Tema::layouts.main')
@section('title', 'Inicio')
@section('content')
    //contenido de la pagina
@stop
```
>luego de colocar la carpeta de tu tema, debes agregarla a la base de datos. Para esto puedes hacerlo mediante un seeder o agregandola manualmente usando PhpMyAdmin o cualquier manejador de bases de datos.
**/database/seeds/Theme_Table_Seeder.php**
```
class Theme_Table_Seeder extends Seeder
{
    public function run()
        {
        \DB::table('themes')->insert(array(
          'theme_name' => 'Nombre_del_tema',
          'slug' => 'Identificador_del_tema',
          'metadata' => 'Informacion_del_tema',
          'theme_image' => 'preview.jpg',
            ));
        }
}
```
Luego
```
php artisan db:seed
```
>para cambiar cualquier configuracion del motor de plantillas edita el archivo /config/themes.php
