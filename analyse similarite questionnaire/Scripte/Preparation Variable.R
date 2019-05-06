#Nettoyage de l'environement de travail
rm(list = ls())

#Import des données
data <- read.table("Data/data.txt", header=TRUE)

data.reussite = data[data[,"TrouveRoche"]=="OUI",]
data.echec = data[data[,"TrouveRoche"]=="NON",]

