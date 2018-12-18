
library(ggplot2)
library(xtable)
library(dplyr)

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
    geom_histogram(aes(x=Wave)) +
    labs(title="Histogram Nazaré Wave")

# Scatter
aes_ = aes(x=Wind, y=Wave)
nazare.plt.smooth <- nazare.plt.gg +
    geom_jitter(aes_) + stat_density_2d(aes_) + geom_smooth(aes_) +
    labs(title="Nazare")

nazare.plt.bin2d <- nazare.plt.gg +
    geom_bin2d(aes_, binwidth=c(1,0.1)) + 
    scale_fill_viridis_c("", option="plasma") +
    labs(title="Nazare", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")


nazare.plt.qq_wind
nazare.plt.hist_wind
nazare.plt.qq_wave
nazare.plt.hist_wave
nazare.plt.smooth
nazare.plt.bin2d

# Save plots
ggsave("nazare_qq_wind.pdf", path="figures", plot=nazare.plt.qq_wind, width=15, height=15, units='cm')
ggsave("nazare_hist_wind.pdf", path="figures", plot=nazare.plt.hist_wind, width=15, height=15, units='cm')

ggsave("nazare_qq_wave.pdf", path="figures", plot=nazare.plt.qq_wave, width=15, height=15, units='cm')
ggsave("nazare_hist_wave.pdf", path="figures", plot=nazare.plt.hist_wave, width=15, height=15, units='cm')

ggsave("nazare_smooth.pdf", path="figures", plot=nazare.plt.smooth, width=15, height=15, units='cm')
ggsave("nazare_bin2d.pdf", path="figures", plot=nazare.plt.bin2d, width=15, height=15, units='cm')

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
    geom_histogram(aes(x=Wave)) +
    labs(title="Histogram Jaws Wave")

# Scatter
aes_ = aes(x=Wind, y=Wave)
jaws.plt.smooth <- jaws.plt.gg +
    geom_jitter(aes_) + stat_density_2d(aes_) + geom_smooth(aes_) +
    labs(title="Jaws")

jaws.plt.bin2d <- jaws.plt.gg +
    geom_bin2d(aes_, binwidth=c(1,0.1)) + 
    scale_fill_viridis_c("", option="plasma") +
    labs(title="Jaws", x="Velocidad del viento (nudos)", y = "Altura Olas (m)")

jaws.plt.qq_wind
jaws.plt.hist_wind
jaws.plt.qq_wave
jaws.plt.hist_wave
jaws.plt.smooth
jaws.plt.bin2d

# Save plots
ggsave("jaws_qq_wind.pdf", path="figures", plot=jaws.plt.qq_wind, width=15, height=15, units='cm')
ggsave("jaws_hist_wind.pdf", path="figures", plot=jaws.plt.hist_wind, width=15, height=15, units='cm')

ggsave("jaws_qq_wave.pdf", path="figures", plot=jaws.plt.qq_wave, width=15, height=15, units='cm')
ggsave("jaws_hist_wave.pdf", path="figures", plot=jaws.plt.hist_wave, width=15, height=15, units='cm')


ggsave("jaws_smooth.pdf", path="figures", plot=jaws.plt.smooth, width=15, height=15, units='cm')
ggsave("jaws_bin2d.pdf", path="figures", plot=jaws.plt.bin2d, width=15, height=15, units='cm')

boxplot_wave <- nazare.plt.gg +
    geom_boxplot(aes(y=Wave, x="Nazare", fill="Nazare")) +
    geom_boxplot(data=jaws, aes(y=Wave, x="Jaws", fill="Jaws")) + ylim(0, 6.5) +
    scale_colour_manual(name="Location",
    values=c(Nazare="red", Jaws="blue"))

boxplot_wind <- nazare.plt.gg +
    geom_boxplot(data=nazare, aes(y=Wind, x="Nazare", fill="Nazare")) +
    geom_boxplot(data=jaws, aes(y=Wind, x="Jaws", fill="Jaws")) + 
    scale_colour_manual(name="Location",
    values=c(Nazare="red", Jaws="blue"))

boxplot_wind
boxplot_wave

# Save plots
ggsave("boxplot_wind.pdf", path="figures", plot=boxplot_wind, width=15, height=15, units='cm')
ggsave("boxplot_wave.pdf", path="figures", plot=boxplot_wave, width=15, height=15, units='cm')

# Nazare all lineal regression
nazare.lr = lm(Wave ~ Wind, data = nazare)
par(mfrow = c(2, 2))
plot(nazare.lr)

# Jaws all lineal regression
jaws.lr = lm(Wave ~ Wind, data = jaws)
par(mfrow = c(2, 2))
plot(jaws.lr)

# Filter by hour of the day
time_between <- function (time, a, b) {
    h <- as.numeric(format(as.POSIXct(time), "%H"))
    (h >= a & h <= b)
}

set.seed(42)
nazare_500 <- sample_n(subset(nazare, time_between(Time, 8, 17)), 500) # 500 samples between 8 and 17 h
summary(nazare_500[,2:3])

set.seed(43)
jaws_500 <- sample_n(subset(nazare, time_between(Time, 8, 17)), 500) # 500 samples between 8 and 17 h
summary(jaws_500[,2:3])

nazare_500.lr = lm(Wave ~ Wind, data = nazare_500)
par(mfrow = c(2, 2))
plot(nazare_500.lr)

jaws_500.lr = lm(Wave ~ Wind, data = jaws_500)
par(mfrow = c(2, 2))
plot(jaws_500.lr)
