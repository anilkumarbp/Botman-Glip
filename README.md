# Botman - Glip

[Botman](https://botman.io/1.5/installation) adapter to use with [Glip](https://glip.com/).


## Creating a new bot

- `git clone https://github.com/anilkumarbp/Botman-Glip.git`
- `cd Botman-Glip`
- `composer install`


## Testing your bot

### Start PHP Built-In Server 
```php
php -S localhost:8080
```

### Start ngrok (for demo purposes using ngrok)

```bash
$ ngrok http 8080
```

### Create Subscription Using Webhooks
Just point the webhook subscription URL to: ( you must start ngrok if using it )
```php
https://f0aad057.ngrok.io/index.php
```

## Configuration

This adapter uses the following configuration variables as per `index.php`:

- `GLIP_SERVER` - RingCentral Server.
- `GLIP_APPKEY` - RingCentral App Key.
- `GLIP_APPSECRET` - RingCentral App Secret
- `GLIP_USERNAME` - RingCentral Username ( The username of the user on `Glip` )  
- `GLIP_PASSWORD` - RingCentral password ( The password for the user on `Glip` )
- `GLIP_EXTENSION` - RingCentral extension ( The ext of the user on `Glip` )
