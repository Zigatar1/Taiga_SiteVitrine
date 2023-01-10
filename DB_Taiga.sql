-- Create a new database called 'DB_Taiga'
-- Connect to the 'master' database to run this snippet
USE master
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'DB_Taiga'
)
CREATE DATABASE DB_Taiga
GO

CREATE TABLE Produits(id INTEGER PRIMARY KEY, id_produit INTEGER, nom_produit VARCHAR(100), description_produit VARCHAR(500), image_produit VARCHAR(500));

INSERT INTO Produits VALUES(1, 1, "Tapis de souris","Grand tapis de souris en caoutchouc, 900x400, motif Floral", "https://ae01.alicdn.com/kf/H6d22c39c903d40e6b8f924759a1adf0ag/Grand-tapis-de-souris-en-caoutchouc-900x400-motif-Floral-pour-clavier-bureau-Gamer-noir.jpg_Q90.jpg_.webp"),
(2, 2, "Paire de manchons de doigts", "paire de manchons de doigts pour jeux mobiles PUBG, respirants, Anti-transpiration, antidérapants", "https://ae01.alicdn.com/kf/Se5239b47911e4ccfa8fa71fed9d53dfcB/1-paire-de-manchons-de-doigts-pour-jeux-mobiles-PUBG-respirants-Anti-transpiration-antid-rapants.jpg_640x640.jpg"),
(3, 3, "Lunettes unisexes Anti-lumière bleue", "lunettes bloquant la lumière bleue, unisexes, lunettes d'ordinateur, lunettes de jeu, Anti- fatigue, Anti-radiation", "https://ae01.alicdn.com/kf/H0978a6de09f4472abb49e9f1742fb703q/Lunettes-unisexes-Anti-lumi-re-bleue-pour-hommes-et-femmes-lunettes-de-jeu-d-ordinateur-Anti.jpg_Q90.jpg_.webp"),
(4, 4, "Repose-pied", "Coussin de relaxation ergonomique pour les pieds, Support, repose-pied sous le bureau", "https://ae01.alicdn.com/kf/H72135208c46b455193f65ed371687db1a/Coussin-de-relaxation-ergonomique-pour-les-pieds-Support-repose-pied-sous-le-bureau-tabouret-pour-la.jpg_Q90.jpg_.webp");

CREATE TABLE Categorie(id INTEGER PRIMARY KEY, id_categorie INTEGER, nom_categorie VARCHAR(100));

INSERT INTO Categorie VALUES(1, 1, "Bien-être");
