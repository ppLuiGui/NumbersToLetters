# Number To Letter

Clase para convertir numeros a letras

Basado en la clase de @AxiaCore

## Instalacion

```php
    composer require ppLuiGui/NumbersToLetters@devmaster
```

## Uso en Lumen

Agregar a los servicios

```php
    'ppLuiGui\Numbertoletter\NumbertoletterServiceProvider',
```

Agregar un alias
```php
'Numbertoletter'    => 'ppLuiGui\Numbertoletter\Facades\NumbertoletterFacade',
```
## Uso

```php
	$num = "10008000.00";
    $letras = Numbertoletter::convert($num); 
    var_dump($letras); // string 'Doce mil pesos 12/100 M.N.' (length=26)
```