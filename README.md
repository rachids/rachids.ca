# rachids

This is the repo of [my personal homepage](https://www.rachids.ca/).

This repo uses:

- Laravel
- TailwindCSS
- Wink

## Commands to run in production

```bash
composer install --optimize-autoloader --no-dev
npm install --production
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run production
```

## Contributing
See something that could be improved or fixed ? Feel free to submit a PR.
