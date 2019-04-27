#Ce script nécessite l'utilisation préalable de PreparationVariables.R ANALYSE_ACP1.R et Analyse_ClustOfVar
#Ce script essaye des regroupements de variables proposés par ClustOfVar qui permettraient d'établir un profil expliquant l'echec ou la réussite.

#Tentative d'affinage de l'ACP en précisant la dimension qui parait la plus pertinente, et différenciant les variables qui sont les moins représentées,
#et les moins discriminatrice entre les réussites et les echecs.

#On commence par évaluer les paramètres les moins biens représentés

seuil <- 0.4
qualiVar <- c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module")
quantiVar <- c("DifficulteTrouverRoche","PerformancePerso","PerformanceCoeq","PdCs")
for (i in 1:length(qualiVar)) {
  if (res.pca$quali$contrib[i,1] < seuil){
    print(qualiVar[i])
  }
}
for (i in 1:length(quantiVar)) {
  if (res.pca$quanti$contrib[i,1] < seuil){
    print(quantiVar[i])
  }
}



#On supprime maintenant les paamètres déterminés précédement
res.pca.tri4<-PCAmix(X.quali = m0[,c("BonneEquipe","GeneVisionCoeq")],
                X.quanti = m0[,c("DifficulteTrouverRoche","PerformancePerso","PerformanceCoeq")],rename.level=TRUE)

#Informations sur les dimentions
barplot(res.pca.tri4$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca$eig))
abline(h=1,col=2,lwd=2)

round(res.pca.tri4$eig,digit=3)
res.pca.tri4$ind$contrib.pct
res.pca.tri4$quanti$contrib.pct
res.pca.tri4$quali$contrib.pct

#Représentation graphique
plot(res.pca.tri4, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca.tri4, axes=c(1,2),choice = "cor")
plot(res.pca.tri4, axes=c(1,2),choice = "levels")

#La séparation est assez propre :)
#On observe maintenant les autres variables précédement écartées.
#Apparemment je ne peux pas avoir qu'une variable quantitative d'évaluée. 
#De la même manière, on remarque que Genre, EquilibreParole, BonneCommunication et Module sont mals représentés

res.pca.tri5<-PCAmix(X.quali = m0[,c("EquilibreQuestions","HabitudeGuider","HabitudeEtreGuider","SensOrientation")],
                     rename.level=TRUE)
plot(res.pca.tri5, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca.tri5, axes=c(1,2),choice = "levels")
#Sans surprise, pas de démarcation

#Et les derniers paramètres :
res.pca.tri6<-PCAmix(X.quali = m0[,c("EquilibreParole","BonneCommunication","Module","Genre")],
                     rename.level=TRUE)
plot(res.pca.tri6, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca.tri6, axes=c(1,2),choice = "levels")
#Sans surprise, pas de démarcation
