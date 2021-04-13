# Dépendence

Pour lancer ce projet il vous faut symfony et ces dépandances:

https://symfony.com/doc/current/setup.html

Attention! ce projet ne lance pas votre base de donnée. Il faudras lancer votre propre base de donner avec MAMP/WAMP par exemple.

Crée une copie de votre .env et renomer le fichier en .env.local ( symfony prend le .env.local par defaut et ce .env.local n'es pas push sur git ^_^ ) 

Pour que symfony ce connecte à votre base de données veuiller changer votre .env.local:

https://symfony.com/doc/current/doctrine.html

Chager la variable : DATABASE_URL="mysql://root:root@127.0.0.1:8889/dataadvisor"

Avec:
- Type de base de donner = mysql
- Username = root 
- Password = root 
- Url de base de donné = 127.0.0.1:8889
- Nom de Database = dataadvisor


# Remplire votre Base de Donner

On a un fichier temp/dataAdvisor.sql qui est un export de la base de donner courrante n'heziter par a rajouter des données avec notre backoffice ;) 

# Lancer le projet

Pour lancer le projet il faut installer toute les dépandance du projet:

composer install

Après lancer le projet avec symfony:

symfony server:start

le port local de symfony par defaut est 8000





