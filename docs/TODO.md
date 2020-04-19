# INFORMATIONS SUR LE PROJET #

## Le design pattern ##
Ce projet utilise le design pattern : ActiveRecord. 

https://fr.wikipedia.org/wiki/Active_record
http://www.dynamic-mess.com/developpement/orm-difference-active-record-data-mapper/


## Commentaires ##
La page index.php, les controleurs, les modeles et les vues sont commentés afin de mieux comprendre comment fonctionne le site.

- Nouvelles fonctionnalités vues dans ce projet :
- - La gestion de la recherche dans un site en parcourant la BDD et en passant des paramètres pour le WHERE ... LIKE {%$params%}
- - La gestion de la pagination avec LIMIT / OFFSET : https://www.youtube.com/watch?v=c8gmbtgySdI

## Todo List ##
- Essayer de ne pas intancier de classe dans le CoreController pour la dynamisation du header et de la sidebar
- Gérer le genre des personnes qui ont écrit les articles (ajout du genre dans la bdd et affichage : Auteur ou Auteure/Autrice
- Si aucun article ne contient le mot recherché par l'utilisateur dans son nom ou son contenu afficher un message d'erreur
-  Un bouton précédent sur les pages article / auteurs / catégories


### Point à regarder ###
>Si vous pouviez me mettre des commentaires sur les points qui ne sont pas bons voire améliorables, ou sur les choses à éviter clairement ce serait top svp.  

- La gestion des recherches 
- La pagination 
- La gestion des erreurs 404 

