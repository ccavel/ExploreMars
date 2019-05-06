# Ce script nécessite l'utilisation préalable de PreparationVariables.R
# Pour les variables qualitatives, barplots
# Pour les variables quantitatives, boxplots

par(mfrow=c(1,2))

# Réussite et echec
  # Qualitatif
    for (i in c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module","TrouveRoche")){
      vectLabel <- levels(m0[,i])
      vectValeur <- vector("numeric", length(vectLabel))
      for (valeur in m0[,i]){
        for (j in seq(1:length(vectLabel))){
          if (valeur == vectLabel[j]){
            vectValeur[j] = vectValeur[j] + 1
          }
        }
      }
      #Calcule pourcentage
      for (j in seq(1:length(vectValeur))){
        vectValeur[j] = vectValeur[j]/length(m0[,i])
      }
      barplot(vectValeur, main=paste(i,", Réussite et Echec"), ylab="pourcentage", ylim=c(0:1), names.arg=vectLabel)
    }
    rm(i,j,valeur, vectLabel,vectValeur)
  # Quantitatif
    for (i in c("HabitudeTravaillerEnsemble","PerformancePerso","PerformanceCoeq","PdCs")){
      boxplot(m0[,i], main=paste(i,", Réussite et Echec"), ylim=c(1,5))
    }
    rm(i)
<<<<<<< HEAD
    boxplot(m0[,"DifficulteTrouverRoche"], main=paste("DifficulteTrouverRoche, Echec"), ylim=c(1,4))
=======
    boxplot(m0[,"DifficulteTrouverRoche"], main="DifficulteTrouverRoche, Réussite et Echec", ylim=c(1,4))
>>>>>>> 1a4a46e812024587322ccb1963a88f552c9cde1b


# Reussite
  # Qualitatif
    for (i in c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module")){
      vectLabel <- levels(m0.reussite[,i])
      vectValeur <- vector("numeric", length(vectLabel))
      for (valeur in m0.reussite[,i]){
        for (j in seq(1:length(vectLabel))){
          if (valeur == vectLabel[j]){
            vectValeur[j] = vectValeur[j] + 1
          }
        }
      }
      #Calcule pourcentage
      for (j in seq(1:length(vectValeur))){
        vectValeur[j] = vectValeur[j]/length(m0.reussite[,i])
      }
      barplot(vectValeur, main=paste(i,", Réussite"), ylab="pourcentage", ylim=c(0:1), names.arg=vectLabel)
    }
    rm(i,j,valeur, vectLabel,vectValeur)
  # Quantitatif
    for (i in c("HabitudeTravaillerEnsemble","PerformancePerso","PerformanceCoeq","PdCs")){
      boxplot(m0.reussite[,i], main=paste(i,", Reussite"), ylim=c(1,5))
    }
    rm(i)
<<<<<<< HEAD
    boxplot(m0.reussite[,"DifficulteTrouverRoche"], main=paste("DifficulteTrouverRoche, Echec"), ylim=c(1,4))
=======
    boxplot(m0.reussite[,"DifficulteTrouverRoche"], main="DifficulteTrouverRoche, Reussite", ylim=c(1,4))
>>>>>>> 1a4a46e812024587322ccb1963a88f552c9cde1b

    
# Echec
  # Qualitatif
    for (i in c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module")){
      vectLabel <- levels(m0.echecs[,i])
      vectValeur <- vector("numeric", length(vectLabel))
      for (valeur in m0.echecs[,i]){
        for (j in seq(1:length(vectLabel))){
          if (valeur == vectLabel[j]){
            vectValeur[j] = vectValeur[j] + 1
          }
        }
      }
      #Calcule pourcentage
      for (j in seq(1:length(vectValeur))){
        vectValeur[j] = vectValeur[j]/length(m0.echecs[,i])
      }
      barplot(vectValeur, main=paste(i,", Echec"), ylab="pourcentage", ylim=c(0:1), names.arg=vectLabel)
    }
    rm(i,j,valeur, vectLabel,vectValeur)
  # Quantitatif
    for (i in c("HabitudeTravaillerEnsemble","PerformancePerso","PerformanceCoeq","PdCs")){
      boxplot(m0.echecs[,i], main=paste(i,", Echec"), ylim=c(1,5))
    }
    rm(i)
    boxplot(m0.echecs[,"DifficulteTrouverRoche"], main="DifficulteTrouverRoche, Echec", ylim=c(1,4))







# Affichage par variables
par(mfrow=c(3,1))

# Qualitative
for (i in c("Genre","BonneCommunication","EquilibreParole","EquilibreQuestions","BonneEquipe","HabitudeGuider","HabitudeEtreGuider","SensOrientation","GeneVisionCoeq","Module","TrouveRoche")){
  for (d in c(1,2,3)){
    if(d==1){
      table = m0
      titre = paste(i,", Réussite et Echec")
    }
    if(d==2){
      table = m0.reussite
      titre = paste(i,", Réussite")
    }
    if(d==3){
      table = m0.echecs
      titre = paste(i,", Echec")
    }
    
    vectLabel <- levels(table[,i])
    vectValeur <- vector("numeric", length(vectLabel))
    for (valeur in table[,i]){
      for (j in seq(1:length(vectLabel))){
        if (valeur == vectLabel[j]){
          vectValeur[j] = vectValeur[j] + 1
        }
      }
    }
    #Calcule pourcentage
    for (j in seq(1:length(vectValeur))){
      vectValeur[j] = vectValeur[j]/length(table[,i])
    }
    barplot(vectValeur, main=titre, ylab="pourcentage", ylim=c(0:1), names.arg=vectLabel)
  }
}
rm(i,j,d,titre,valeur,vectLabel,vectValeur,table)

# Quantitative
for (i in c("HabitudeTravaillerEnsemble","PerformancePerso","PerformanceCoeq","PdCs")){
  for (d in c(1,2,3)){
    if(d==1){
      table = m0
      titre = paste(i,", Réussite et Echec")
    }
    if(d==2){
      table = m0.reussite
      titre = paste(i,", Réussite")
    }
    if(d==3){
      table = m0.echecs
      titre = paste(i,", Echec")
    }
    boxplot(table[,i], main=titre, ylim=c(1,5))
  }
}
rm(i,d,titre,table)





# Analyse descriptive Bivariées
par(mfrow=c(1,4))
m0.reussite.capcom <- m0.reussite[m0.reussite[,"Role"] == "CapCom",]
m0.reussite.astro <- m0.reussite[m0.reussite[,"Role"] == "Astro",]
m0.echecs.capcom <- m0.echecs[m0.echecs[,"Role"] == "CapCom",]
m0.echecs.astro <- m0.echecs[m0.echecs[,"Role"] == "Astro",]

#EquilibreQuestion et EquilibreParole avec Role
for (i in c("EquilibreParole","EquilibreQuestions")){
  for (d in c(1,2,3,4)){
    if(d==1){
      table = m0.reussite.capcom
      titre = paste(i,", Réussite CapCom")
    }
    if(d==2){
      table = m0.reussite.astro
      titre = paste(i,", Réussite Astro")
    }
    if(d==3){
      table = m0.echecs.capcom
      titre = paste(i,", Echec CapCom")
    }
    if(d==4){
      table = m0.echecs.astro
      titre = paste(i,", Echec Astro")
    }
    
    vectLabel <- levels(table[,i])
    vectValeur <- vector("numeric", length(vectLabel))
    for (valeur in table[,i]){
      for (j in seq(1:length(vectLabel))){
        if (valeur == vectLabel[j]){
          vectValeur[j] = vectValeur[j] + 1
        }
      }
    }
    #Calcule pourcentage
    for (j in seq(1:length(vectValeur))){
      vectValeur[j] = vectValeur[j]/length(table[,i])
    }
    barplot(vectValeur, main=titre, ylab="pourcentage", ylim=c(0:1), names.arg=vectLabel)
  }
}
 rm(i,j,d,titre,valeur,vectLabel,vectValeur,table)


# DifficulteTrouverRoche et PerformanceCoeq
# Test du Khi-deux
m0[,"DifficulteTrouverRoche"] <- as.factor(m0[,"DifficulteTrouverRoche"])
m0[,"PerformanceCoeq"] <- as.factor(m0[,"PerformanceCoeq"])
VectLabel1 <- levels(m0[,"DifficulteTrouverRoche"])
VectLabel2 <- levels(m0[,"PerformanceCoeq"])
#matrice <- matrix(nrow=length(VectLabel1) , ncol=length(VectLabel2) )
matrice = matrix(c(c(0,0,0,0),c(0,0,0,0),c(0,0,0,0),c(0,0,0,0),c(0,0,0,0)),5,4,byrow=T)

for (i in seq(length(m0[,1])) ){
   x = m0[i,"DifficulteTrouverRoche"]
   y = m0[i,"PerformanceCoeq"]
   matrice[y,x] = matrice[y,x] + 1
}
m0[,"DifficulteTrouverRoche"] <- as.integer(m0[,"DifficulteTrouverRoche"])
m0[,"PerformanceCoeq"] <- as.integer(m0[,"PerformanceCoeq"])
# Réalisation du test khi-deux - les résultats sont sauvegardés dans "khi_test"
khi_test = chisq.test(matrice)
khi_test # affiche le résultat du test
