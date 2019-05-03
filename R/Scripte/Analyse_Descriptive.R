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
    boxplot(m0[,"DifficulteTrouverRoche"], main="DifficulteTrouverRoche, Réussite et Echec", ylim=c(1,4))


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
    boxplot(m0.reussite[,"DifficulteTrouverRoche"], main="DifficulteTrouverRoche, Reussite", ylim=c(1,4))

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
      boxplot(m0.echecs[,i], main=paste(i,", Echec"), ylim=c(1,4))
    }
    rm(i)
    boxplot(m0.echecs[,"DifficulteTrouverRoche"], main="DifficulteTrouverRoche, Echec", ylim=c(1,4))

  
    