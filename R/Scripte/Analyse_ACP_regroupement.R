#Ce script nécessite l'utilisation préalable de PreparationVariables.R ANALYSE_ACP1.R et Analyse_ClustOfVar
#Ce script essaye des regroupements de variables proposés par ClustOfVar qui permettraient d'établir un profil expliquant l'echec ou la réussite.

# On travail d'abord sur une séparation basée sur cet arbre : 
plot(tree)

# ---
#On effectue l'ACP sur la branche de gauche qui semble traduire majoritairement des variables objectives.
# ---

  res.pca.tri1<-PCAmix(X.quali = m0[,c("Genre","EquilibreParole","EquilibreQuestions","SensOrientation","Module")],rename.level=TRUE)

  #Informations sur les dimentions
  barplot(res.pca.tri1$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca$eig))
  abline(h=1,col=2,lwd=2)
  #On remarque que seuls les deux premières dimensions sont pertinentes selon le critère de Keiser


  round(res.pca$eig,digit=3)
  res.pca.tri1$ind$contrib.pct
  res.pca.tri1$quali$contrib.pct

  #mpca<-cbind(m0,res.pca$ind$contrib.pct[,1:3])


  #Visualisation
  plot(res.pca.tri1, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
  #La séparation n'est pas dutout rendue plus net avec ce groupement de variable. Elle ne semble pas être particulièrement différentiatrices.
  plot(res.pca.tri1, axes=c(1,2),choice = "levels")

# ---
#On effectue l'ACP sur la branche centrale qui semble traduire majoritairement des ressentis sur l'expérience ce sont les variables les plus subjectives et qualitatives.
# ---
  
  res.pca.tri2<-PCAmix(X.quali = m0[,c("BonneCommunication","BonneEquipe")],
                       X.quanti = m0[,c("DifficulteTrouverRoche","PerformancePerso","PerformanceCoeq")],rename.level=TRUE)
  
  #Informations sur les dimentions
  barplot(res.pca.tri2$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca$eig))
  abline(h=1,col=2,lwd=2)
  #On remarque que seuls les deux premières dimensions sont pertinentes selon le critère de Keiser
  
  
  round(res.pca$eig,digit=3)
  res.pca.tri2$ind$contrib.pct
  res.pca.tri2$quali$contrib.pct
  
  #mpca<-cbind(m0,res.pca$ind$contrib.pct[,1:3])
  
  
  #Visualisation
  plot(res.pca.tri2, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
  plot(res.pca.tri2, axes=c(1,2),choice = "levels")
  plot(res.pca.tri2, axes=c(1,2),choice = "cor")
  #il y a une séparation assez net, les victoires sont proches du 0 de la dim 2, plutot vers les négatifs de la dim 1
  
# ---
#On effectue l'ACP sur la branche de droite qui semble traduire majoritairement des ressentis sur l'expérience ce sont les variables les plus subjectives et qualitatives.
# ---  
  res.pca.tri3 <- PCAmix(X.quali = m0[,c("HabitudeGuider","HabitudeEtreGuider","GeneVisionCoeq")],
                         rename.level=TRUE)
  #!! Impossible de mettre le PdCs sans l'erreur "incorrect number of dimensions" 
  #Informations sur les dimentions
  barplot(res.pca.tri3$eig[,1],main="Eigvalues",names.arg = 1:nrow(res.pca$eig))
  abline(h=1,col=2,lwd=2)
  #On remarque que seuls les trois premières dimensions sont pertinentes selon le critère de Keiser ???
  
  
  round(res.pca.tri3$eig,digit=3)
  res.pca.tri3$ind$contrib.pct
  res.pca.tri3$quali$contrib.pct
  
  #mpca<-cbind(m0,res.pca$ind$contrib.pct[,1:3])
  
  
  #Visualisation
  plot(res.pca.tri3, axes=c(1,2),choice = "ind", coloring.ind=m0$TrouveRoche)
  #La séparation n'est pas dutout rendue plus net avec ce groupement de variable. Elle ne semble pas être particulièrement différentiatrices.
  plot(res.pca.tri3, axes=c(1,2),choice = "levels")
