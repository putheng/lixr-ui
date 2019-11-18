# Lixr Ui

## Install

Add provider to config/app.php
```
use Lixr\Core\LixrUiServicProvider::class,
```

Run artisan command to generate scaffold basic vue setup
```
php artisan vue:setup
```

Add to application `app.js` bellow `require('./bootstrap');`
```
require('./bootstrap');
require('./index');
```

Import vuex store and vue router to vue instance
```
router: router, // add this line
store: store, //add this line
el: '#app',
```



## License

Lixr Core is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).