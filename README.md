# PHP Light Framework
## A really simple and light PHP framework for a simple pages or HTTP APIs

### Features
* Light, less than 1MB
* Use standard packages:
    * [FastRoute](https://github.com/nikic/FastRoute) (Router)
    * [PlatesPHP](http://platesphp.com/) (PHP template system)
    * [Medoo](https://medoo.in/) Lightest database library
* PHP 7.2 ready
* Include docker development configuration

### Instructions
* git clone git@github.com:rtorralba/lpf.git
* cd lpf
* mv env.json.example env.json
* Start development server
    * composer start (PHP 7.2 environment in your PC)
    * docker-compose up (Only needs docker and docker-compose)        