# StockTonMatos
Projet symfony d'une API de gestion des stocks

## Problématique: 

Une mauvaise gestion des stocks de matériels de pêche. Achat en doublon d'un même matériel, perte de temps lors de la préparation des sessions.

## Fonctionnalités: 

  - Ajout d'un matériel en stock (Nom*, description, photo, quantité) 
  - Ajout d'une zone de stockage (à défaut stockage globale)
  - Visualisation des stocks en vue catégories, emplacements, techniques
  - Lecture d'un QR code pour visualiser les objets stockés dans une zone de stockage
  - Authentification de l'utilisateur
  - Barre de recherche

## Entités:
  - Materiel (entité abstraite)
    - Cannes
    - Moulins
    - Leurres
    - Fil
    - Montage
  - Category
  - Emplacement
  - User
  - Techniques
  - DetailAchat

## [Relation:](https://github.com/IvanK420/StockTonMatos/blob/main/maquettes/Entit%C3%A9s%20StockTonMatos.drawio.png)
Materiel -> Cannes, Moulins, leurres, fils, Montage (Heritage)

Materiel -> Category (ManyToOne) non nullable

Materiel -> Technique (ManyToMany) nullable

Materiel -> DetailAchat (OneToone) nullable

