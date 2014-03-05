# Traction Bundle

This is a Symfony2 bundle to provide easy access to the [traction-php][1] library.

## Installation

### Composer

Use composer to get the bundle:

    php composer.phar require noetix/traction-bundle:*

### AppKernel

Enable the bundle in your AppKernel:

    new noetix\TractionBundle\noetixTractionBundle(),

## Configuration

Configure the bundle in `config.yml`:

### Classic API

    noetix_traction:
        endpoint_id: 12345
        user_id:     my_username
        password:    fantastic_password
        
### Dynamic API

    noetix_traction:
        endpoint_id: notused
        user_id:     notused
        password:    fantastic_password
        connection:	  2n5e7b2r8qkx07dy2ctd

        
## Example

To get the classic handler for the Traction Classic API

```php
$traction = $this->get('traction.handler');
```

To get the dynamic handler for the Traciton Dynamic API

```php
$traction = $this->get('traction.dynamic');
```

For further code examples see [traction-php][1]

[1]: https://github.com/noetix/traction-php
