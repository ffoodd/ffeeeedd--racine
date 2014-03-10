ffeeeedd--racine
================

Ce projet contient un ensemble de fichiers à inclure à la racine de votre installation WordPress — dont le but est de compléter le thème `ffeeeedd` et son thème enfant, `ffeeeedd--sass`.

Mode d'emploi
-------------

Ces fichiers sont tous à placer à la racine de votre installation WordPress — mais surtout pas tel quel (notamment le fichier `wp-config.php`).

Le fichier `.htaccess` est — à priori — utilisable tel quel, mais des personnalisations sont à envisager :
* les pages d’erreurs;
* d’éventuelles redirections;
* les règles de sécurité.

Le fichier `robots.txt` est également utilisable en l’état, mais des améngaements et commentaires ont été prévus afin de le personnaliser en toute sécurité.

`Humans.txt` est optionnel mais relève d’une vision humaine et artisanale du web : son but est de mentionner, créditer et remercier les personnes qui ont contribué de près ou de loin à votre projet. Le fichier actuel recense donc les contributeurs aux projets `ffeeeedd`, mais si vous adhérez au principe il vous faudra le compléter : votre nom en premier lieu :).

Le fichier `wp-config.php` est le plus sensible : *si vous n’avez pas les connaissances nécessaires à sa personnalisation, ne l’utilisez pas* — et surtout pas tel quel. Il ajoute quelques constantes pratiques pour affiner et améliorer votre installation de WordPress, et je compte considérablement l’améliorer encore grâce aux conseils avisés de [julio Potier](http://boiteaweb.fr/) et de son ebook dédié à ce sujet.


Ce projet est sous licence [MIT](http://opensource.org/licenses/MIT "The MIT licence") et [CC BY 3.0 FR](http://creativecommons.org/licenses/by/3.0/fr/ "Explications de la licence").
*Copyright (c) 2013 Gaël Poupard*
