# 📚 TP - Révisions POO en PHP avec PDO

## 📝 Contexte

Dans ce TP, vous allez créer une petite application **console** qui permet de gérer une bibliothèque de livres. L'application permettra d'ajouter, de supprimer et de lister des livres en mémoire et dans une base de données.  
L'objectif est de réviser la Programmation Orientée Objet (POO) en PHP tout en manipulant PDO pour interagir avec une base de données MySQL.

**⏳ Durée estimée : 4 heures**

## 🎯 Objectifs pédagogiques

1. Revoir la POO en PHP (classes, objets, méthodes, propriétés, typage...).
2. Revoir l'utilisation de PDO pour manipuler une base de données.
3. Appliquer les bonnes pratiques : séparation des responsabilités, utilisation des namespaces, et gestion des erreurs.

---

## 🔨 Partie 1 : Modélisation des classes (1h30 - 2h)

### 🏗️ Étape 1 : Créer la classe `Book`

1. Créez une classe **Book** avec les attributs **privés** suivants (vous devrez déduire leur type vous-même) :
   - `title`
   - `author`
   - `pages`
   - `isbn`
2. Implémentez le constructeur pour initialiser ces propriétés.
3. Ne créez pas de **getters** ou **setters**, tout de suite pour chaque propriété ! Attendez de savoir si vous avez besoin d'afficher ou de modifier la valeur de la propriété !
4. Utilisez la **méthode magique** `__toString` qui affiche les détails d'un livre.

**💡 Exemple de code :**

```php
class Book {
    private string $title;

    public function __construct(string $title) 
    {
        $this->title = $title;
    }

    public function __toString(): void 
    {
        echo "Title: {$this->title}, ..." . PHP_EOL;
    }
}
```

### 🏛️ Étape 2 : Créer la classe `Library`

Créez une classe Library pour gérer plusieurs livres. Elle aura les responsabilités suivantes :

* 📥 Stocker un tableau de livres (Il va falloir utiliser ce que l'on appelle la composition en POO 😉).
* ➕ Ajouter un livre.
* 🗑️ Supprimer un livre par son ISBN.
* 📜 Lister tous les livres.

**💡 Exemple de code :**

Essayez de voir si vous arrivez à concevoir le code ! Je vous montrerais un exemple si vous bloquez ! 🚀

## 🗄️ Partie 2 : Introduction à PDO et interaction avec la base de données (2h)

Coming soon ...