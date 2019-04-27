#Ce script nécessite l'utilisation préalable de PreparationVariables.R
#Ici sont effectuées des ACP sur une série de variables qualitatives et quantitatives.

res.pca<-PCAmix(X.quali = m0[,c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module")],
                X.quanti = m0[,c("DifficulteTrouverRoche","PerformancePerso","PerformanceCoeq","PdCs")],rename.level=TRUE)

#Informations sur les dimentions
barplot(res.pca$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca$eig))
abline(h=1,col=2,lwd=2)

round(res.pca$eig,digit=3)
res.pca$ind$contrib.pct
res.pca$quanti$contrib.pct
res.pca$quali$contrib.pct

#mpca<-cbind(m0,res.pca$ind$contrib.pct[,1:3])


#Visualisation
#aide coloration : https://cran.r-project.org/web/packages/PCAmixdata/vignettes/PCAmixdata.html
plot(res.pca, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca, axes=c(1,3),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca, axes=c(1,4),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca, axes=c(2,3),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca, axes=c(4,3),choice = "ind", coloring.ind=m0$TrouveRoche)
plot(res.pca, axes=c(4,2),choice = "ind", coloring.ind=m0$TrouveRoche)

plot(res.pca, axes=c(1,2),choice = "cor")
plot(res.pca, axes=c(1,2),choice = "levels")

#Même travail en séparant les échecs et les réussites
#   ---Echecs : 
res.pca.echecs<-PCAmix(X.quali = m0.echecs[,c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module")],
                X.quanti = m0.echecs[,c("DifficulteTrouverRoche","PerformancePerso","PerformanceCoeq","PdCs")],rename.level=TRUE)
barplot(res.pca.echecs$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca.echecs$eig))
abline(h=1,col=2,lwd=2)

round(res.pca.echecs$eig,digit=3)
res.pca.echecs$ind$contrib.pct
res.pca.echecs$quanti$contrib.pct
res.pca.echecs$quali$contrib.pct

plot(res.pca.echecs, axes=c(1,2),choice = "ind")
plot(res.pca.echecs, axes=c(1,3),choice = "ind")
plot(res.pca.echecs, axes=c(1,4),choice = "ind")

plot(res.pca.echecs, axes=c(1,2),choice = "cor")
plot(res.pca.echecs, axes=c(1,2),choice = "levels")


#   ---Réussites : 

res.pca.reussite<-PCAmix(X.quali = m0.reussite[,c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module")],
                       X.quanti = m0.reussite[,c("DifficulteTrouverRoche","PerformancePerso","PerformanceCoeq","PdCs")],rename.level=TRUE)
barplot(res.pca.reussite$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca.reussite$eig))
abline(h=1,col=2,lwd=2)

round(res.pca.reussite$eig,digit=3)
res.pca.reussite$ind$contrib.pct
res.pca.reussite$quanti$contrib.pct
res.pca.reussite$quali$contrib.pct

plot(res.pca.reussite, axes=c(1,2),choice = "ind")
plot(res.pca.reussite, axes=c(1,3),choice = "ind")
plot(res.pca.reussite, axes=c(1,4),choice = "ind")

plot(res.pca.reussite, axes=c(1,2),choice = "cor")
plot(res.pca.reussite, axes=c(1,2),choice = "levels")

