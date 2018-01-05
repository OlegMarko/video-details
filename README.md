<p align="center">YouTube video details from video URL</p>

<p align="center">
<a href="https://packagist.org/packages/fixik/video-details"><img src="https://poser.pugx.org/fixik/video-details/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/fixik/video-details"><img src="https://poser.pugx.org/fixik/video-details/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/fixik/video-details"><img src="https://poser.pugx.org/fixik/video-details/license.svg" alt="License"></a>
</p>

## Introduction

Get details by YouTube video from video URL.

## Installation

To get started with YouTube video details, simply run:

    composer require fixik/video-details

Next, register the `Fixik\VideoDetails\VideoDetailsServiceProvider` in your `config/app.php` file:

```php
'providers' => [
    // Other service providers...

    Fixik\VideoDetails\VideoDetailsServiceProvider::class,
],
```

## Basic Usage

```php
    <?php
    
        require_once 'vendor/autoload.php';
        
        $url = 'YouTube video url';
        
        $video_details = new \Fixik\VideoDetails\VideoDetails();
    
        echo '<pre>';
            print_r($video_details->getVideoDetailsByURL($url));
        echo '</pre>';
```

Enable `extension=php_curl.dll` in your `php.ini`

## License

YouTube Video Details is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)