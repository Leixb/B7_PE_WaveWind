nazare = read.csv("data/Nazare.csv")
jaws = read.csv("data/Jaws.csv")

summary(nazare)
summary(jaws)

library(ggplot2)
library(tikzDevice)

pl <- ggplot(nazare, aes(x=Wind, y=Wave)) 
#pl + geom_bin2d(bins=35)
#pl + geom_jitter()+ stat_density_2d() + geom_smooth(method=lm)
pl + geom_bin2d(binwidth=c(1,0.1)) + scale_fill_viridis_c("", option="plasma") +
  labs(title="Nazare", x="Velocidad del viento (nudos)",
       y = "Altura Olas (m)")

ggsave("figures/nazare.pdf", width=15, height=15, units='cm')

tikz(file = "figures/jaws.tex", width = 5, height = 5)

pl <- ggplot(jaws, aes(x=Wind, y=Wave)) 
#pl + geom_bin2d(bins=35)
#pl + geom_jitter()+ stat_density_2d() + geom_smooth(method=lm)
pl + geom_bin2d(binwidth=c(1,0.1)) + scale_fill_viridis_c("", option="plasma") +
  labs(title="Jaws", x="Velocidad del viento (nudos)",
       y = "Altura Olas (m)")


print(pl)
dev.off()

ggsave("figures/jaws.pdf", width=15, height=15, units='cm')
