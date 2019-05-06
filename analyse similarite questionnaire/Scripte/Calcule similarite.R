
# Création du vecteur contenant les similarites pour chaque groupe
vectSimilarite.reussite = vector("numeric",length(data.reussite[,1]))
vectSimilarite.echec = vector("numeric",length(data.echec[,1]))

# Remplissage du vecteur des similarites pour la reussite
similarite = 0
for (i in seq(length(data.reussite[,1])) ){
  similarite = 0
  for (variable in c("HabitudeTravaillerEnsemble","DifficulteTrouverRoche","BonneCommunication","PerformancePerso","PerformanceCoeq","EquilibreParole","EquilibreQuestions","BonneEquipe","GeneVisionCoeq","PdCs") ){
    similarite = similarite + data.reussite[i,variable]
  }
  vectSimilarite.reussite[i] = similarite
}
rm(similarite,i,variable)

# Remplissage du vecteur des similarites pour la echec
similarite = 0
for (i in seq(length(data.echec[,1])) ){
  similarite = 0
  for (variable in c("HabitudeTravaillerEnsemble","DifficulteTrouverRoche","BonneCommunication","PerformancePerso","PerformanceCoeq","EquilibreParole","EquilibreQuestions","BonneEquipe","GeneVisionCoeq","PdCs") ){
    similarite = similarite + data.echec[i,variable]
  }
  vectSimilarite.echec[i] = similarite
}
rm(similarite,i,variable)


par(mfrow=c(1,2))

plot(data.reussite[,"ChronoSec"], vectSimilarite.reussite, main="Réussite",
     xlab="performace temporel", ylab="similarité des réponses")

plot(data.echec[,"ChronoSec"], vectSimilarite.echec, main="echec",
     xlab="performace temporel", ylab="similarité des réponses")

