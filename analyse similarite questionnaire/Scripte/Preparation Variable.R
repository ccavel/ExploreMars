#Nettoyage de l'environement de travail
rm(list = ls())

#Import des données
data <- read.table("Data/data.txt", header=TRUE)

#Partie entiere de MoyEcartCroix
#table = as.integer(data[,"MoyEcartCroix"])
#trunc(data[,"MoyEcartCroix"])

data.reussite = data[data[,"TrouveRoche"]=="OUI",]
data.echec = data[data[,"TrouveRoche"]=="NON",]

