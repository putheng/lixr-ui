# Lixr Ui

## Install

Add provider to config/app.php
```
use Lixr\Core\LixrUiServicProvider::class,
```

Note: please install vue router & vuex before run this command
`npm install --save vuex vue-router`


Run artisan command to generate scaffold basic vue setup
```
php artisan vue:setup
```

Add to application `app.js` bellow `require('./bootstrap');`
```
require('./bootstrap');
require('./index'); // add this line
```

Import vuex store and vue router to vue instance
```
const app = new Vue({
	router: router, // add this line
	store: store, //add this line
	el: '#app',
});
```



## License

Lixr Core is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).