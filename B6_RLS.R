## ===================================
## Probabilitat i Estadística, Grup 31
## Bloc 6, 14.12.2018
## Regresión lineal simple
## ===================================

# Los datos de la Bundesliga (hasta la temporada 2015/16)
# -------------------------------------------------------
load("B6_Bundesliga.RData")
head(buliga)

# Una muestra (no tan) aleatoria
subset(buliga, Season %in% c("1983-1984", "1991-1992", "2006-2007") &
               Position == 1)

# Gráficos de dispersión
# ----------------------
windows(width = 8)
par(las = 1, font = 2, font.axis = 2, font.lab = 2)
with(buliga, plot(GA ~ GF, pch = 16,
     xlab = "Goles a favor", ylab = "Goles encajados"))
title("Goles encajados vs. Goles marcados (por temporada)")

windows(width = 8)
par(las = 1, font = 2, font.axis = 2, font.lab = 2)
with(buliga, plot(Points ~ GF, pch = 16,
     xlab = "Goles a favor", ylab = "Puntos"))
title("Puntos por temporada vs. Goles marcados")

# El peor equipo de toda la historia de la Bundesliga
subset(buliga, Season == "1965-1966" & Position == 18)


# Datos desde 1995 (3 puntos por victoria)
# ----------------------------------------
trespunts <- buliga[575:nrow(buliga), ]
windows(width = 8)
par(las = 1, font = 2, font.axis = 2, font.lab = 2)
with(trespunts, plot(Points ~ GF, pch = 16,
                      xlab = "Goles a favor", ylab = "Puntos"))
title("Puntos por temporada vs. Goles marcados")
abline(lm(Points ~ GF, data = trespunts), lwd = 3)


# Regresión lineal simple
# -----------------------
summary(trespunts)
sd(trespunts$GF)
sd(trespunts$Points)
with(trespunts, cor(GF, Points))

# El modelo de RLS ajustado mediante la función lm
# ------------------------------------------------
lmod <- lm(Points ~ GF, data = trespunts)
lmod
summary(lmod)

# Comprobación de premisas
# ------------------------
windows(width = 12)
par(las = 1, font.lab = 2, font.axis = 2, mfrow = 1:2)
plot(lmod, 1:2, ask = FALSE, pch = 16)


# Predicción basada en el modelo
# ------------------------------
(newdat <- data.frame(GF = seq(30, 80, 10)))
# Predicción puntual
predict(lmod, newdata = newdat)
# Predicción con intervalo de predicción
predict(lmod, newdata = newdat, interval = "prediction")
# Nicer output
pred <- predict(lmod, newdata = newdat, interval = "prediction")
rownames(pred) <- paste(seq(30, 80, 10), "goals")
colnames(pred) <- c("Points", "95%-PI_L", "95%-PI_U")
txt <- "Predicted points in final standings"
{
  cat(txt, fill = TRUE)
  cat(rep("=", nchar(txt)), sep = "", fill = TRUE)
  round(pred, 1)
}

# Predicción con intervalo de confianza para la media
predict(lmod, newdata = newdat, interval = "confidence")
# Nicer output
pred <- predict(lmod, newdata = newdat, interval = "confidence")
rownames(pred) <- paste(seq(30, 80, 10), "goals")
colnames(pred) <- c("Points", "95%-CI_L", "95%-CI_U")
txt <- "Predicted average points in final standings"
{
  cat(txt, fill = TRUE)
  cat(rep("=", nchar(txt)), sep = "", fill = TRUE)
  round(pred, 1)
}


## Análisis correcto de los datos teniendo en cuenta que los datos
## no son independientes.
## ---------------------------------------------------------------
library(lme4)
lmmod <- lmer(Points ~ GF + (1 | Team), data = trespunts)
lmmod
summary(lmmod)
