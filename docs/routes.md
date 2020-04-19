# Routes

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | Accueil | Les trois derniers articles |  |
| `/` | `GET` | `DisplayController` | `showPost` | Article | L'article sélectionné par l'utilisateur depuis la page d'accueil, depuis un auteur ou depuis une catégorie |  |
| `/` | `GET` | `DisplayController` | `showAuthorPosts` | Auteur | Les articles d'un auteur |  |
| `/` | `GET` | `DisplayController` | `showCategoriePosts` | Catégorie | Les  articles d'une catégorie |  |
| `/` | `GET` | `MainController` | `legalNotices` | Mentions légales | Les mentions légales du site |  |
| `/` | `GET` | `MainController` | `contact` | Contact | Les contacts d'O Clock |  |
| `/` | `GET` | `MainController` | `sitemap` | Plan du site | Le plan du site pour orienter l'utilisateur |  |
| 