# 百度 AI 开放平台 php-sdk
> 支持 composer、laravel/lumen

## 要求
requirements
* composer
* php >= 7.1
* ext-json >= 1.0

## 安装
install
```bash
$ composer require 96qbhy/baidu-aip
```

## 使用
usage

```php
require 'vendor/autoload.php';

$config = [
      'use'          => 'default',
      'debug'        => true,
      'applications' => [
          'default' => [
              'app_id'     => 'your app id',
              'api_key'    => 'your api key',
              'secret_key' => 'your secret key',
          ],
          'your app' => [
              'app_id'     => 'your app id',
              'api_key'    => 'your api key',
              'secret_key' => 'your secret key',
          ],
      ]
  ];

$aip = new \Qbhy\BaiduAIP\BaiduAIP($config);

var_dump(json_encode($aip->image_censor->antiSpam('测试')));
var_dump(json_encode($aip->use('your app')->image_censor->antiSpam('测试')));
```
> sdk支持多应用，使用 use 切换当前应用配置。

## API
* `$aip->image_censor` 图像审核服务，对应百度AI开放平台中视觉技术的 [图像审核](http://ai.baidu.com/docs#/ImageCensoring-PHP-SDK/top) API
* `$aip->image_classify` 图像识别服务，对应百度AI开放平台中视觉技术的 [图像识别](http://ai.baidu.com/docs#/ImageClassify-PHP-SDK/top) API
* `$aip->image_search` 图像搜索服务，对应百度AI开放平台中视觉技术的 [图像搜索](http://ai.baidu.com/docs#/ImageSearch-PHP-SDK/top) API
* `$aip->image_process` 图像效果增强服务，对应百度AI开放平台中视觉技术的 [图像效果增强](https://cloud.baidu.com/doc/IMAGEPROCESS/s/nk3bcloer) API
* `$aip->body_analysis` 人体分析服务，对应百度AI开放平台中视觉技术的 [人体分析](http://ai.baidu.com/docs#/BodyAnalysis-PHP-SDK/top) API
* `$aip->face` 人脸识别服务，对应百度AI开放平台中视觉技术的 [人脸识别](http://ai.baidu.com/docs#/Face-Detect-V3/top) API
* `$aip->ocr` 文字识别服务，对应百度AI开放平台中视觉技术的 [文字识别](http://ai.baidu.com/docs#/OCR-PHP-SDK/top) API
* `$aip->nlp` 自然语言处理服务，对应百度AI开放平台中的 [自然语言](http://ai.baidu.com/docs#/NLP-PHP-SDK/top) API
* `$aip->speech` 百度语音服务，对应百度AI开放平台中的 [百度语音](http://ai.baidu.com/docs#/ASR-Online-PHP-SDK/top) API
* `$aip->kg` 讲真这个我也不知道干什么的，但是官方SDK有


php吹水交流群请添加: 873213948  
[qbhy/baidu-aip](https://github.com/qbhy/baidu-aip-sdk)  
96qbhy@gmail.com
