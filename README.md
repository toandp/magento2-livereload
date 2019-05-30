# Magento 2 Livereload
Easy way to apply livereload for Magento 2 theme development

## Installation
Install the latest version with
```bash
$ composer require tdpsoft/magento2-livereload
```

## Basic Usage
### Step 1: Install Grunt
**Important**: be sure that you are in `developper mode`, in `root` project location when you execute the command bellow.
Rename the `package.json.sample` to `package.json`, `grunt-config.json.sample` to `grunt-config.json`,  `Gruntfile.js.sample` to `Gruntfile.js`

Grunt theme configuration: `dev/tools/grunt/configs/themes.js`
```js
module.exports = {
...
yourtheme: {
    area: 'frontend',
    name: '<Vendor>/<yourtheme>',
    locale: 'en_US', // Your locale
    files: [
        'css/styles-m',
        'css/styles-l',
        'css/custom' // For custom.less
    ],
    dsl: 'less'
...
}
```
Run Grunt watch, See [More informations](https://devdocs.magento.com/guides/v2.0/frontend-dev-guide/css-topics/css_debug.html)

### Step 2: Install Livereload
```bash
$ npm install -g livereload
```
Make sure that the liveReload is well installed, `livereload -v` should output the version something like : `0.8.0`
Install the `LiveReload browser extension`, available for **Chrome** and **Firfox**

### Step 3: Admin Setup
Go to `Stores > Configuration > Advanced > Developer`
![livereload](https://user-images.githubusercontent.com/45766814/58612023-5ced1200-82db-11e9-8b8a-65ef80523a9f.png)


## Author

Toan Dinh - <toandptech@gmail.com> - <https://fb.com/iamtoandinh>

## Contributing

Thank you for considering contributing to the Magento 2 Livereload! The contribution guide can be found in the [contributors](https://github.com/tdpsoft/magento2-livereload/contributors).

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
