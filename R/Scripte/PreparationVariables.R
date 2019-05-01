#Ceci est le premier script à lancer à la lecture du projet.
#Il gère les librairies, et la préparation des variables.


#Installation des librairies

install.packages("ClustOfVar")
install.packages("PCAmixdata")
#install.packages("dplyr")

library(ClustOfVar)
library(PCAmixdata)
#library("dplyr")

#Nettoyage de l'environement de travail
rm(list = ls())

#Import des données
data <- read.table("Data/Data.txt", header=TRUE)

#m0 est la matrice dans laquelle les variables qualitatives et quantitatives ont été choisies et mis sous le bon format.

m0 <- data[,c("Genre","HabitudeTravaillerEnsemble","DifficulteTrouverRoche","BonneCommunication","PerformancePerso","PerformanceCoeq","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","PdCs","Module","Role","TrouveRoche")]
str(m0)


# Transforme toutes les variables qualtitatives en "factor" à la place de "int"
for(i in c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module","TrouveRoche")){
  m0[,i]<-as.factor(m0[,i])
}
rm(i)
str(m0)

#creer deux matrices de donnée. Une pour les echecs, l'autre pour les réussites
m0.echecs <- m0[m0[,"TrouveRoche"]=="NON",]
m0.reussite <-m0[m0[,"TrouveRoche"]=="OUI",]

