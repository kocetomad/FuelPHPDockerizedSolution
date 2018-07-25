#!/bin/bash

cd /var/www/
curl -L https://get.fuelphp.com/oil | sh
oil create fuel
oil refine install
rm /etc/apache2/sites-available/

