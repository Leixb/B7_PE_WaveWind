
library(ggplot2)
library(xtable)
library(dplyr)
library(ggfortify)

#Read data and remove NAs
nazare = na.omit(read.csv("data/Nazare.csv"))
jaws = na.omit(read.csv("data/Jaws.csv"))

summary(nazare[,2:3])

# Save summary tables
print(xtable(summary(nazare[,2:3])), file = "tables/summary_nazare.tex", compress = FALSE, floating=FALSE, latex.environments=NULL, booktabs=TRUE)
print(xtable(summary(jaws[,2:3])), file = "tables/summary_jaws.tex", compress = FALSE, floating=FALSE, latex.environments=NULL, booktabs=TRUE)

nazare.plt.gg <- ggplot(nazare)

# WIND
nazare.plt.qq_wind <- nazare.plt.gg + 
    stat_qq(aes(sample=Wind)) + stat_qq_line(aes(sample=Wind)) +
    labs(title="Normal QQ plot, Nazaré Wind")

nazare.plt.hist_wind <- nazare.plt.gg +
    geom_histogram(aes(x=Wind)) +
    labs(title="Histogram Nazaré Wind")

#WAVE
nazare.plt.qq_wave <- nazare.plt.gg + 
    stat_qq(aes(sample=Wave)) + stat_qq_line(aes(sample=Wave)) +
    labs(title="Normal QQ plot, Nazaré Wave")

nazare.plt.hist_wave <- nazare.plt.gg +
    geom_histogram(aes(x=Wave, fill="Nazare")) +
    labs(title="Olas Nazaré", x="Altura Ola (m)", y="Recuento") +
    scale_fill_manual(name="Location",    values=c(Nazare="coral", Jaws="#009999")) +
    guides(fill=FALSE)

# Scatter
aes_ = aes(x=Wind, y=Wave)
nazare.plt.smooth <- nazare.plt.gg +
    geom_jitter(aes_) + stat_density_2d(aes_) + geom_smooth(aes_) +
    labs(title="Viento y Olas, Nazré", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")

nazare.plt.bin2d <- nazare.plt.gg +
    geom_bin2d(aes_, binwidth=c(1,0.1)) + 
    scale_fill_viridis_c("", option="plasma") +
    labs(title="Viento y Olas, Nazaré", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")


nazare.plt.qq_wind
nazare.plt.hist_wind
nazare.plt.qq_wave
nazare.plt.hist_wave
nazare.plt.smooth
nazare.plt.bin2d

# Save plots
ggsave("nazare_qq_wind.pdf", path="figures", plot=nazare.plt.qq_wind, width=9, height=7, units='cm')
ggsave("nazare_hist_wind.pdf", path="figures", plot=nazare.plt.hist_wind, width=9, height=7, units='cm')

ggsave("nazare_qq_wave.pdf", path="figures", plot=nazare.plt.qq_wave, width=9, height=7, units='cm')
ggsave("nazare_hist_wave.pdf", path="figures", plot=nazare.plt.hist_wave, width=9, height=7, units='cm')

ggsave("nazare_smooth.pdf", path="figures", plot=nazare.plt.smooth, width=12, height=12, units='cm')
ggsave("nazare_bin2d.pdf", path="figures", plot=nazare.plt.bin2d, width=12, height=12, units='cm')

jaws.plt.gg <- ggplot(jaws)

# WIND
jaws.plt.qq_wind <- jaws.plt.gg + 
    stat_qq(aes(sample=Wind)) + stat_qq_line(aes(sample=Wind)) +
    labs(title="Normal QQ plot, Jaws Wind")

jaws.plt.hist_wind <- jaws.plt.gg +
    geom_histogram(aes(x=Wind)) +
    labs(title="Histogram Jaws Wind")

#WAVE
jaws.plt.qq_wave <- jaws.plt.gg + 
    stat_qq(aes(sample=Wave)) + stat_qq_line(aes(sample=Wave)) +
    labs(title="Normal QQ plot, Jaws Wave")

jaws.plt.hist_wave <- jaws.plt.gg +
    geom_histogram(aes(x=Wave, fill="Jaws")) +
    labs(title="Olas Jaws", x="Altura Ola (m)", y="Recuento") +
    scale_fill_manual(name="Location",    values=c(Nazare="coral", Jaws="#009999")) +
    guides(fill=FALSE)

# Scatter
aes_ = aes(x=Wind, y=Wave)
jaws.plt.smooth <- jaws.plt.gg +
    geom_jitter(aes_) + stat_density_2d(aes_) + geom_smooth(aes_) +
    labs(title="Jaws")

jaws.plt.bin2d <- jaws.plt.gg +
    geom_bin2d(aes_, binwidth=c(1,0.1)) + 
    scale_fill_viridis_c("", option="plasma") +
    labs(title="Viento y Olas, Jaws", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")

jaws.plt.hist_wave

jaws.plt.qq_wind
jaws.plt.hist_wind
jaws.plt.qq_wave
jaws.plt.hist_wave
jaws.plt.smooth
jaws.plt.bin2d

library(gridExtra)
double_hist_waves <- grid.arrange(jaws.plt.hist_wave + ylim(0, 6500), nazare.plt.hist_wave + ylim(0, 6500) , ncol=2)

ggsave("double_hist_waves.pdf", path="figures", plot=double_hist_waves, width=14, height=7, units='cm')

# Save plots
ggsave("jaws_qq_wind.pdf", path="figures", plot=jaws.plt.qq_wind, width=9, height=7, units='cm')
ggsave("jaws_hist_wind.pdf", path="figures", plot=jaws.plt.hist_wind, width=9, height=7, units='cm')

ggsave("jaws_qq_wave.pdf", path="figures", plot=jaws.plt.qq_wave, width=9, height=7, units='cm')
ggsave("jaws_hist_wave.pdf", path="figures", plot=jaws.plt.hist_wave, width=9, height=7, units='cm')

ggsave("jaws_smooth.pdf", path="figures", plot=jaws.plt.smooth, width=12, height=12, units='cm')
ggsave("jaws_bin2d.pdf", path="figures", plot=jaws.plt.bin2d, width=12, height=12, units='cm')

jaws.plt.all <- ggplot(jaws, aes(x=Wind, y=Wave)) +
    geom_bin2d(aes_, binwidth=c(1,0.1)) + 
    #scale_fill_viridis_c("", option="plasma") +
    scale_fill_gradient("Recuento") +
    geom_smooth(aes(color="gam")) + geom_smooth(aes(color="lm"), method=lm) + 
    scale_colour_manual(name="modelo", values=c("green", "red")) +
    labs(title="Viento y Olas, Jaws", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")

nazare.plt.all <- ggplot(nazare, aes(x=Wind, y=Wave)) +
    geom_bin2d(aes_, binwidth=c(1,0.1)) + 
    #scale_fill_viridis_c("", option="plasma") +
    scale_fill_gradient("Recuento") +
    geom_smooth(aes(color="gam")) + geom_smooth(aes(color="lm"), method=lm) + 
    scale_colour_manual(name="model", values=c("green", "red")) +
    labs(title="Viento y Olas, Nazaré", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")

nazare.plt.all
jaws.plt.all

ggsave("nazare_all.pdf", path="figures", plot=nazare.plt.all, width=14, height=10, units='cm')
ggsave("jaws_all.pdf", path="figures", plot=jaws.plt.all, width=14, height=10, units='cm')

boxplot_wave <- nazare.plt.gg +
    geom_boxplot(aes(y=Wave, x="Nazare", fill="Nazare")) +
    geom_boxplot(data=jaws, aes(y=Wave, x="Jaws", fill="Jaws")) + ylim(0, 6.5) +
    scale_fill_manual(name="Location",    values=c(Nazare="coral", Jaws="#009999")) +
    labs(title="Olas", y="Altura olas (metros)", x="Surf Spots") +
    guides(fill=FALSE)

boxplot_wind <- nazare.plt.gg +
    geom_boxplot(data=nazare, aes(y=Wind, x="Nazare", fill="Nazare")) +
    geom_boxplot(data=jaws, aes(y=Wind, x="Jaws", fill="Jaws")) + 
    scale_fill_manual(name="Location",    values=c(Nazare="coral", Jaws="#009999")) +
    labs(title="Viento", y="Velocidad del viento (nudos)", x="Surf Spots", fill="") +
    guides(fill=FALSE)

boxplot_wind
boxplot_wave

# Save plots
ggsave("boxplot_wind.pdf", path="figures", plot=boxplot_wind, width=7, height=7, units='cm')
ggsave("boxplot_wave.pdf", path="figures", plot=boxplot_wave, width=7, height=7, units='cm')

# Nazare all lineal regression
nazare.lr = lm(Wave ~ Wind, data = nazare)
autoplot(nazare.lr)

# Jaws all lineal regression
jaws.lr = lm(Wave ~ Wind, data = jaws)
autoplot(jaws.lr)

jaws.lr

# Filter by hour of the day
time_between <- function (time, a, b) {
    h <- as.numeric(format(as.POSIXct(time), "%H"))
    (h >= a & h <= b)
}

set.seed(41)
nazare_500 <- sample_n(subset(nazare, time_between(Time, 8, 17)), 500) # 500 samples between 8 and 17 h
summary(nazare_500[,2:3])

set.seed(42)
jaws_500 <- sample_n(subset(nazare, time_between(Time, 8, 17)), 500) # 500 samples between 8 and 17 h
summary(jaws_500[,2:3])

print(xtable(summary(nazare_500[,2:3])), file = "tables/summary_nazare500.tex", compress = FALSE, floating=FALSE, latex.environments=NULL, booktabs=TRUE)
print(xtable(summary(jaws_500[,2:3])), file = "tables/summary_jaws500.tex", compress = FALSE, floating=FALSE, latex.environments=NULL, booktabs=TRUE)

nazare_500.lr = lm(Wave ~ Wind, data = nazare_500)
nazare_500.lr
nazare_500.plt.lm <- autoplot(nazare_500.lr)

nazare_500.plt.gg <- ggplot(nazare_500, aes(x=Wind, y=Wave))
nazare_500.plt.lm_fit <- nazare_500.plt.gg +
    geom_jitter() + geom_smooth(method=lm) +
    labs(title="Nazare 500")

confint.lm(nazare_500.lr)
with(nazare_500, cor(Wind, Wave))

ggsave("nazare_500_lm.pdf", path="figures", plot=nazare_500.plt.lm, width=14, height=12, units='cm')
ggsave("nazare_500_lmFit.pdf", path="figures", plot=nazare_500.plt.lm_fit, width=14, height=12, units='cm')

jaws_500.lr = lm(Wave ~ Wind, data = jaws_500)
jaws_500.lr
jaws_500.plt.lm <- autoplot(jaws_500.lr)

jaws_500.plt.gg <- ggplot(jaws_500, aes(x=Wind, y=Wave))
jaws_500.plt.lm_fit <- jaws_500.plt.gg +
    geom_jitter() + geom_smooth(method=lm) +
    labs(title="jaws 500")

confint(jaws_500.lr, level=0.95)
with(jaws_500, cor(Wind, Wave))

ggsave("jaws_500_lm.pdf", path="figures", plot=jaws_500.plt.lm, width=12, height=12, units='cm')
ggsave("jaws_500_lmFit.pdf", path="figures", plot=jaws_500.plt.lm_fit, width=12, height=12, units='cm')

summary(jaws.lr)
#table(summary(jaws_500.lr))

summary(nazare.lr)
#xtable(summary(nazare_500.lr))

t.test(nazare_500$Wave, jaws_500$Wave, vas.equal=T)

# lm Cogiendo solo el viento entre 12 y 25 en Jaws
jaws_sub <- subset(jaws, Wind > 12 & Wind < 25) 

jaws_sub.lr = lm(Wave ~ Wind, data = jaws_500)
jaws_sub.lr
jaws_sub.plt.lm <- autoplot(jaws_small.lr)

aws_small.plt <- ggplot(jaws_small, aes(x=Wind, y=Wave)) +
    geom_jitter() +
    geom_smooth(aes(color="lm"), method=lm) +
    labs(title="Regresión Jaws (12, 25)", x="Velocidad del viento (nudos)", y = "Altura Olas (m)") +
    guides(colour = FALSE)

confint(jaws_small.lr, level=0.95)
with(jaws_small, cor(Wind, Wave))

ggsave("jaws_1225_reg.pdf", path="figures", plot=jaws_small.plt, width=12, height=12, units='cm')
