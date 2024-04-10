## Изучение Laravel

```
$str = '123456';
dump($str); /** dump. Красивый вывод */
dd($str); /** dump die. Красивый вывод и смерть скрипта */
```

В классе модели можно принудительно задать с какой таблицей будет работать модель
```
class Post extends Model
{
    protected $table = 'other_table';
}
```
