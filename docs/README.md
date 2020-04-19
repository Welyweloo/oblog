# Oblog Project

Ce projet est une ébauche de blog, avec uniquement une partie en affichage dynamique des articles en BDD. 

Contributors
--
- Ecole O'Clock : ce projet était un exercice de révision, Singleton Pattern pour la connexion à la BDD.
- Guillaume S. : correction et conseils en vue d'améliorer le blog

Content
--
Le contenu est superficiel. Seules les fonctionnalités importent dans ce projet. 

Realisation
--

J'ai pu m'exercer en travaillant sur la dynamisation du site à partir d'une intégration en dur. 
C'était un bel exercice pour travailler en POO/architecture MVC et des jointures SQL. 

- Temps pris : Deux jours en  Mars 2020
  
- Langages, frameworks et utilitaires:
  - PHP
  - SQL
  - Singleton Pattern
  - Active Records Pattern
  - Composer --> Symfony var-dumper, autoload, altorouter


- Difficultés rencontrées :
    - La gestion de la pagination après une recherche (avec le LIMIT/OFFSET que propose SQL
    - Les routes, en cours d'apprentissage 

- Evolutions possibles :
  - La gestion de la page 404 (Obligatoire) -> une balise script dans le CoreController à mettre dans une view
  - Essayer de ne pas intancier de classe dans le CoreController pour la dynamisation du header et de la sidebar
  - Gérer le genre des personnes qui ont écrit les articles (ajout du genre dans la bdd et affichage : Auteur ou Auteure/Autrice
  - Si aucun article ne contient le mot recherché par l'utilisateur dans son nom ou son contenu afficher un message d'erreur
  - Un bouton précédent sur les pages article / auteurs / catégories