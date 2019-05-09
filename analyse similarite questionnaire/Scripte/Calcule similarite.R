
# Création du vecteur contenant les similarites pour chaque groupe
vectSimilarite.reussite = vector("numeric",length(data.reussite[,1]))
vectSimilarite.echec = vector("numeric",length(data.echec[,1]))

# Remplissage du vecteur des similarites pour la reussite
similarite = 0
for (i in seq(length(data.reussite[,1])) ){
  similarite = 0
  for (variable in c("PdCs") ){
  #for (variable in c("HabitudeTravaillerEnsemble","DifficulteTrouverRoche","BonneCommunication","EquilibreParole","EquilibreQuestions","PdCs") ){
    similarite = similarite + data.reussite[i,variable]
  }
  vectSimilarite.reussite[i] = similarite
}
rm(similarite,i,variable)


plot(data.reussite[,"ChronoSec"], vectSimilarite.reussite, main="Réussite",
     xlab="performace temporel", ylab="similarité des réponses")


#table = data.reussite[data.reussite[,"PdCs"]==1,]


boxplot(data.reussite[data.reussite[,"PdCs"]==1,][,"ChronoSec"],data.reussite[data.reussite[,"PdCs"]==0,][,"ChronoSec"] , main="PdCs")

boxplot(data.reussite[data.reussite[,"EquilibreParole"]==1,][,"ChronoSec"],data.reussite[data.reussite[,"EquilibreParole"]==0,][,"ChronoSec"] , main="EquilibreParole", xlabel=c("1","0"))

boxplot(data.reussite[data.reussite[,"EquilibreQuestions"]==1,][,"ChronoSec"],data.reussite[data.reussite[,"EquilibreQuestions"]==0,][,"ChronoSec"] , main="EquilibreQuestions")
