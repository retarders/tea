# tea
tea is a simple self hosted file hosting service written in PHP
it's mostly meant to be used in your local network for transfering files between devices

# dependencies
PHP >= 7.4.5

# running (linux)
```console
git clone git@github.com:retarders/tea.git
cd tea
php -S $(echo -n $(hostname -I)):8080
```