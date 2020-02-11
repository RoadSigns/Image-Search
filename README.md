# Image Search
Image Search allows you to search for images using a keyword and control the amount of images displayed and pulled from the API.

## Getting Started

### Requirements

- PHP >= 7.4*
- Composer

### Prerequisites

##### Creating an account with Imgur's API

This application is currently using Imgur for image search so a Client ID is required for authentication.


### Installing

This project uses [Composer](https://getcomposer.org/). Go check them out if you don't have them locally installed.

```
composer self-update
composer install --dev
```

After installing the packages the .env.example file need to be moved to .env

You must then add the environment variable `IMGUR_CLIENT_ID` in the `.env` file.

```
IMGUR_CLIENT_ID="**YOUR CLIENT ID**"
```

## Built With

* [Bootstrap](https://getbootstrap.com/) - CSS Library
* [Composer](https://getcomposer.org/) - Dependency Management

## Authors

* **Zack Lott**  - [RoadSigns](https://github.com/roadsigns)
