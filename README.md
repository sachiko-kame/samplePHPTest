# 開始

```
$ git clone https://github.com/sachiko-kame/samplePHPTest.git
```

```
$ cd samplePHPTest
```

```
※たまに必要な時あり
$ docker-machine env default
$ eval "$(docker-machine env default)"
```

```
$ docker-compose up --build -d
```

```
$ docker-machine ip default
```

↓

<<ipアドレス>>:81/simple　でアクセス  
<<ipアドレス>>:81/simple/sample.php ※何も表示されません  
<<ipアドレス>>:81//info.php  

# テスト

```
$ docker container exec -it sample-apache bash

$ curl -sS https://getcomposer.org/installer | php

$ php composer.phar require --dev phpunit/phpunit

$ vendor/bin/phpunit TEST/SampleTest.php
```

# 出力までの経過記事

https://qiita.com/sachiko-kame/items/a7534d71f2155b06111d

https://qiita.com/sachiko-kame/items/bf5480f4d7c751ab28aa


# 出力イメージ

|<img width=600px src="https://github.com/sachiko-kame/samplePHPTest/blob/main/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202021-03-04%2023.20.21.png">|
|:-:|

|<img width=600px src="https://github.com/sachiko-kame/samplePHPTest/blob/main/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202021-03-04%2023.20.33.png">|
|:-:|
