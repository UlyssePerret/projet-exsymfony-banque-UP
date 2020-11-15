# projet-symfony-banque-UP
Création 15 Novembre
Modification
Version : 0.1
Auteur : Ulysse Perret
Création projet enonce.txt

Installation projet
Prérequis
Php 7.1
Verifier  php -v
Si besoin d'une meilleur version

Doc 
https://www.php.net
Windows
https://www.php.net/manual/fr/install.windows.requirements.php
Unix
https://www.php.net/manual/fr/install.unix.php

Installation MAMP
->https://www.mamp.info/en/mamp/mac/

Installation de Composer
Source : https://getcomposer.org/download/

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

On utilisera le squelettelette website-skeleton pour le projet web
(Recommendation)
composer create-project symfony/website-skeleton projet-banque-UP

Rappel installation Symfony
https://symfony.com/doc/current/setup.html


V 0.1
Architecture de base
- Création du dossier
- enonce.Txt/readme

Premier objectif : Installation Symfony
