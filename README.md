## Main

#### Подъем проекта в докере (терминал)

```./vendor/bin/sail up```

#### Создание контроллера (в терминал)

```./vendor/bin/sail artisan make:controller MyPageController```

```./vendor/bin/sail artisan make:controller PostController```


#### Создание модели в миграции под название Page. -m означает еще и создание файла миграции

```./vendor/bin/sail artisan make:model Page -m```

```./vendor/bin/sail artisan make:model Post -m```

### Миграция (в терминал)

```./vendor/bin/sail artisan migrate```

```./vendor/bin/sail artisan migrate:rollback```

### Запуск

```http://localhost:8070/```




