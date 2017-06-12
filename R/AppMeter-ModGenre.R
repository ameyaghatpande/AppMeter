setwd("C:/Users/yceran/Google Drive/Capstone/AppMeter") #windows

library("systemfit")
library(dplyr)

AData <- data.table::fread("/Users/test/Downloads/android-for-amarjit.csv",fill=TRUE)

# #Import Data
# ameya - AData <- read.csv(file="/Users/test/Downloads/android-for-amarjit.csv", header = TRUE)
# AData <- read.csv(file="/Users/test/Downloads/clean_android_genre.csv", header = TRUE)
# AData$ldownloads<-log(AData$downloads)
# AData$lwom<-log(AData$all_rating_count+1)
# AData$lage<-log(AData$age)
# AData$lrate<-log(AData$all_rating)
# AData$WR<-AData$all_rating*AData$all_rating_count
# AData$lWR<-log(AData$WR)
# ameya - zz<-aggregate(AData[, 3], list(AData$genre), mean)
# zz<-aggregate(AData[, 3], list(AData$mod_genre), mean)
# ameya - colnames(zz)[1]<-"genre"
# colnames(zz)[1]<-"mod_genre"
# colnames(zz)[2]<-"mWOMgenre"
# ameya - zz2<-aggregate(AData[, 3], list(AData$genre), length)
# zz2<-aggregate(AData[, 3], list(AData$mod_genre), length)
# ameya - colnames(zz2)[1]<-"genre"
# colnames(zz2)[1]<-"mod_genre"
# colnames(zz2)[2]<-"lmWOMgenre"
# AData$mWOMgenre=0
# AData$lmWOMgenre=0
# ameya - genres<-unique(zz$genre)
# genres<-unique(zz$mod_genre)
# lg<-length(genres)
# 
# for (i in 1:lg){
#   
#   ameya - AData[which(AData$genre==genres[i]),]$mWOMgenre=zz[i,2]
#   ameya - AData[which(AData$genre==genres[i]),]$lmWOMgenre=zz2[i,2]
#   AData[which(AData$mod_genre==genres[i]),]$mWOMgenre=zz[i,2]
#   AData[which(AData$mod_genre==genres[i]),]$lmWOMgenre=zz2[i,2]
#   
# }
# 
# ameya - save(AData, file="AData.RData")
# save(AData, file="/Users/test/Downloads/ADataModGenretemp.RData")
# 



####RUN THE PROGRAM FROM HERE

#First, set your path correctly
setwd("C:/Users/yceran/Google Drive/Capstone/AppMeter") 

#install.packages("dplyr")
library(systemfit)
library(dplyr)

# ameya - load("/Users/test/Downloads/AData.RData")
load("/Users/test/Downloads/ADataModGenretemp.RData")

AData<-AData[,-11]
AData<-AData[,-c(4,5,6,8)]      #How is mWOMGenre, lmWOMgenre and lmwom calculated
AData$mWOMgenre2<-(AData$mWOMgenre*AData$lmWOMgenre-AData$all_rating_count)/(AData$lmWOMgenre-1)
AData$lmwom<-log(AData$mWOMgenre2)

#Ameya new logic
ADataP<-AData
ADataP$price[ADataP$price == 0]<-0.001
ADataP$dummy_price0<-0
ADataP$dummy_price1<-0
ADataP$dummy_price2<-0
ADataP$dummy_price3<-0
ADataP$dummy_price4<-0

ADataP$dummy_price0[ADataP$price == 0.001]<-1
ADataP$dummy_price1[ADataP$price > 0.001 & ADataP$price <= 0.99]<-1
ADataP$dummy_price2[ADataP$price > 0.99 & ADataP$price <= 1.49]<-1
ADataP$dummy_price3[ADataP$price > 1.49 & ADataP$price <= 2.82]<-1
ADataP$dummy_price4[ADataP$price > 2.82]<-1

ADataP$ageS <- ADataP$lage *ADataP$lage

ADataP<-ADataP[which(ADataP$downloads<=75000),]

#ameya - ADataP<-AData[which(AData$price>0),]
#for free apps
#ADataP<-AData[which(AData$price==0),]


## 75% of the sample size
smp_size <- floor(0.75 * nrow(ADataP))

## set the seed to make your partition reproductible
set.seed(123)
train_ind <- sample(seq_len(nrow(ADataP)), size = smp_size)

train <- ADataP[train_ind, ]
test <- ADataP[-train_ind, ]

#downloads = log(raters) + log(age) + price + log(rating) + genre
# ameya - eqDown <-ldownloads~ lwom+lage+price+lrate+genre 
#eqDown <-ldownloads ~ lwom + lage + price + lrate + mod_genre
#for free apps
# Ameya ask professor whether to take "lwom" or "lmwom"
# Ameya - also changing lrate to all_rating
#eqDown <-ldownloads ~ lwom + lage + price + lrate + mod_genre + dummy_price

eqDown <-ldownloads ~ lwom + age + price + all_rating + mod_genre + dummy_price1 + dummy_price2 + dummy_price3 + dummy_price4

#WOM = log(raters) + file_size + log(rating)
# Ameya - changed lrate to all_rating
#eqWOM<-lwom~ldownloads+file_size+lrate
eqWOM<-lwom~ldownloads + file_size + all_rating

# price + genre + log(rating) + log(age) + file_size
# ameya - inst<-~price+genre+lrate+lage+file_size     #ask prof about ~
#inst<-~price+mod_genre+lrate+lage+file_size
# for free apps
#inst<-~price + mod_genre+lrate+lage+file_size + dummy_price
inst<-~price + mod_genre + all_rating + age + file_size + dummy_price1 + dummy_price2 + dummy_price3 + dummy_price4

system <- list(DL = eqDown, WOM = eqWOM)


fitI2sls <- systemfit(system, method = "2SLS", inst = inst, data =train)
summary(fitI2sls)    #ask prof (NAs produced by interger overflow)

A = cbind(test$ldownloads, predict(fitI2sls, test))


CO<-fitI2sls$coefficients
length(CO)
# ameya - genres<-unique(AData$genre)
genres<-unique(AData$mod_genre)


test$Coefg=0
lg = 20
for (i in 1:lg){
  cgenge<-paste("DL_mod_genre",genres[i],sep="")
  #ameya - test[which(test$genre==genres[i]),]$Coefg=CO[cgenge]
  test[which(test$mod_genre==genres[i]),]$Coefg=CO[cgenge]
}


lc=length(CO)
nCO=names(CO)
#ameya for (j in 1:5)
for (j in 1:5){
    nam<-paste("B",j-1,sep="")
      assign(nam,CO[nCO[j]])
}

nam<-paste("B",5,sep="")
assign(nam,CO[nCO[25]])

#ameya for (k in 1:4){
for (k in 1:4){
    nam<-paste("A",k-1,sep="")
    #ameya assign(nam,CO[nCO[34+k]])
    assign(nam,CO[nCO[25+k]])
}

test$lDhat<-(B0+B1*A0+B1*A2*test$file_size+(B1*A3+B4)*test$lrate+B3*test$price+B5*test$dummy_price+B2*test$lage+test$Coefg)/(1-B1*A1)

test$lwhat<-A0+A1*test$lDhat+A2*test$file_size+A3*test$lrate

A = seq(1,300,30)

D1 = exp((B0+B1*A0+B1*A2*50+(B1*A3+B4)*log(4)+B3*5+B5*1+B2*log(A)-0.4230585079)/(1-B1*A1))

D2 = exp((B0+B1*A0+B1*A2*50+(B1*A3+B4)*log(4)+B3*0+B5*0+B2*log(A)-0.4230585079)/(1-B1*A1))


plot(A,D1,ylim=(500))

lines(A,D2)

loop.round <- function(numbers, arbitrary.numbers) {
  arrnd <- function(x, ns, r1,r2){
    
    ifelse(x>ns,ifelse(abs(x - ns) <= range2 , ns, x),ifelse(abs(x - ns) <= range1, ns, x))
    
    }

  arbitrary.numbers=sort(arbitrary.numbers)
  k=length(arbitrary.numbers)
  for(i in seq_along(arbitrary.numbers)){
    i2=i-1
    i3=i+1
   range1=ifelse(i>1,(arbitrary.numbers[i]-arbitrary.numbers[i2])/2,10000)
   range2=ifelse(i<k, (arbitrary.numbers[i3]-arbitrary.numbers[i])/2, 10000)
    numbers <- arrnd(numbers, arbitrary.numbers[i], range1,range2)
  }
  numbers
}



vv1<-summary(train$ldownloads)
vv2<-summary(test$ldownloads)
test$Dlevel1=0
test$Dlevel2=0
test$Dlevel1=loop.round(test$ldownloads, c(vv1[1], vv1[2], vv1[4], vv1[5])) 

test$Dlevel2=loop.round(test$lDhat, c(vv1[1], vv1[2], vv1[4], vv1[5])) 




