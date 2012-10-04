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

    noetix_traction:
        endpoint_id: 12345
        user_id:     my_username
        password:    fantastic_password

[1]: https://github.com/noetix/traction-php