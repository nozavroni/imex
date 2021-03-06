#!/bin/bash

if [[ $TRAVIS_PHP_VERSION != "7.0" ]]; then
  vendor/bin/phpunit -c phpunit.xml --coverage-text --coverage-clover ./build/logs/clover.xml
else
  vendor/bin/phpunit -c phpunit.xml
fi
