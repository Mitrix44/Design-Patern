# Projet Design Patern

## Questions
- 1 
  - 1 Quel(s) avantage(s) procure le fait de programmer vers une interface et non vers une implémentation ?
    -Les interface par rapport aux implémentations permettent d'inverser la chaine de dépendance et de définir le format attendu pour la méthode d'une qui classe
  - 2 Pourquoi, de manière générale, vaut-il mieux préférerla composition à l’héritage ?
    -  La composition est plus pertinante que l'héritage car elle permet de récupérer uniquement les éléments que l'on souhaite ajouter a une classe sans avoir de code inutile.
    Elle est le coeur meme du design patern.
- 2
  - J'ai choisis le design patern composite.
  -Il permet d'encapsuler des classes dans des conteneurs.
  Par exemple un colis dans le quel il y aurait des articles et dans ce colis il y aurait d'autres cartons eux meme composés d'article ce carton peux lui aussi etre composé d'un autre carton, composé lui aussi aussi d'articles.
  -L'avantage de ce design patern est de pouvoir utiliser des methodes qui vont parcourir toute l'arboresence de carton pour éxécuter des calculs par éxemple ou effectuer des actions.


