
# PHP & MySQL

PHP c'est bien mais avec une base de données c'est mieux. Nous allons mettre en situation une utilisation de PHP et MYSQL.  
Utilisation des derniers standards PHP tels que PDO.

# Objectif

Nous allons faire une web app qui va lister les randonnées à l'île de la Réunion avec une gestion de membre & admin.

# Création de la base de données 
Création de la table *Hiking*.

# Remplir la base de données 

Pour commencer à travailler, c'est plus simple d'avoir déjà des données.

C'est pourquoi vous allez remplir la table *hiking* à partir des données que
vous allez récupérer sur le site internet [randopitons.re](https://www.randopitons.re)

Il faut insérer 5 randonnées. Chaque randonnée devra renseigner les champs :
* name
* difficulty (très facile, facile, etc.)
* distance
* duration
* height_difference (dénivelé)

# Afficher la liste des randonnées 

Dans le fichier *read.php*, récupérez les randonnées directement de la base données et affichez-les dans un tableau.

Vous devez utiliser PHP bien sûr, mais aussi PDO.

> Rappel : un fichier PHP ne s'ouvre pas dans le navigateur en faisant un glisser déposer ! Ça ne va pas fonctionner !
Vous devez absolument passer par votre serveur apache local : http://localhost/ ou http://localhost:8000/ ou etc.

TIPS : l'utilisation de la méthode ```query()``` de PDO est un bon début *(dans ce cas là)*

# Ajouter une randonnée 

Vous devez maintenant ajouter une randonnée, mais pas par phpmyadmin, plutôt directement par une page prévue à cet effet.

Ça tombe bien, il y a la page *create.php*. Il y a déjà le formulaire. Vous devez récupérer les informations envoyées par ce formulaire et les enregistrer
dans la base de données.

TIPS : Vous pouvez jetter un oeil aux méthodes ```exec()``` ou ```prepare()``` et ```execute``` de PDO.

## Améliorations 

Quand vous avez réussi à ajouter une randonnée, c'est bien de le notifier par message.

Si vous ne l'avez pas déjà fait, affichez le message "La randonnée a été ajoutée avec succès." quand la randonnée a été ajoutée avec succès :)

Je vous laisse libre sur la manière d'afficher le message.

# Modifier une randonnée 

Imaginons qu'on s'est trompé en rentrant les informations de la randonnée, il faudrait pouvoir la modifier après.

Le fichier *update.php* a été créé pour ça.

Tout d'abord, dans le tableau des randonnées du fichier *read.php*, ajoutez un lien sur le nom de chaque randonnée. Ce lien renverra vers la page *update.php*.

Sur cette page on va pouvoir faire les modifications pour la randonnée choisie. Les champs du formulaire présents sur cette page doivent être pré-remplis à partir
des informations de la randonnée choisie !

TIPS : Afin de différencier les randonnées il faudra se baser sur l'id et peut-être (re)voir comment faire passer des variables entre des pages web.

# Supprimer une randonnée 

Nous allons maintenant voir la dernière action, la suppression.

Ajoutez un bouton *supprimer* dans le tableau sur chaque ligne de randonnées. En cliquant sur le bouton cela enverra le l'*id* de la randonnée à la page *delete.php*.

Lorsque vous aurez supprimé il faudra revenir de façon automatique (sans que l'internaute ne fasse quoique ce soit) la page *read.php*.

TIPS : Pour la redirection vers la page *read.php* vous devriez probablement jetez un coup d'oeil à la fonction [header()](http://php.net/manual/fr/function.header.php)

# ALLER PLUS LOIN 

Par cet exercice nous avons fait du CRUD (Create Read Update Delete). Ce sont les actions de bases que l'on peut effectuer sur les données en base.

## Ajouter un nouveau champ 

Les sentiers sont parfois impraticables pour différentes raisons (pluies, éboulement,etc.). Ajoutez le champ *available* à la table *hiking*.

Puisqu'on a nouveau champ, il faut l'ajouter à nos différentes pages :
* dans le tableau de *read.php*
* dans les formulaires de *create.php* et *update.php*

## Contrôler les données du formulaires

Il y'a des petits malins qui n'hésiteront pas à essayer de pirater votre application notamment en passant par le formulaire.

Protéger vos arrières en vérifiant que chaque informations envoyées par le formulaire soient valides avant de la rentrée dans la base de données.

Vérifiez que les champs *distance*, *height_difference* et *duration* soient des chiffres uniquement.

Si vous avez utiliser la méthode ```query()``` ou ```exec()``` avec des variables, il faudra les remplacer par ```prepare()``` et ```execute()```. Ces méthodes sont plus sécurisées quand il s'agit de travailler avec des variables envoyées par l'internaute.

*Il y a d'autres précautions à faire mais ça, ça sera pour une prochaine fois ;)*

## Refactoriser le code

Si vous avez mis, dans chaque fichier, la connexion à la base de données sachez qu'il y'a un moyen de factoriser tout ça en utilisant ```include()```. Maintenant que vous le savez, il vous reste plus qu'à le mettre en place :)

C'est une possibilité de refactorisation, il y en a d'autres...

-------------

# Authentification

## Comment ça marche
Avant tout, sachez que pour pouvoir faire cela, il faudra savoir utiliser les sessions en PHP. Ce petit tutoriel vous explique comment fonctionne les sessions et aussi le principe d'une page connexion et de déconnexion.

## Insérer des utilisateurs 
Pour s'identifier, il faut déjà avoir des utilisateurs en base de données.

Avec phpmyadmin, ajoutez des utilisateurs en base de données.

## Protections des pages
Au début de chaque page create.php, update.php, delete.php vérifiez que l'utilisateur soit connecté.

Pour faire cela c'est très simple. En se connectant vous avez dû enregistrer les informations de l'utilisateur dans une variable de session. Il suffit maintenant d'aller vérifier que la variable de session existe pour savoir si l'utilisateur est valide !

TIPS : Créer une fonction pour pouvoir la réutiliser au début de chaque page concernée.

C'est un peu léger comme protection mais c'est pour que vous compreniez le principe.