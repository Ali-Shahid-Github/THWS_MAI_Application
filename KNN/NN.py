
import numpy as np
import pandas as pd
from sklearn.preprocessing import LabelEncoder as LE
from sklearn.model_selection import train_test_split as tts
from collections import  Counter
import matplotlib.pyplot as plt

dataSet = pd.read_csv('Iris_DataSet.csv')  # loading the dataset


X_Features = dataSet[['sepal_length', 'sepal_width', 'petal_length', 'petal_width']].values
Y_Feature = dataSet['species'].values


Y_Feature=LE.fit_transform(LE,Y_Feature)        #transforming our string data into integers where setosa=0, versicolor=1
                                                #virginica=2

X_Features_Train, X_Features_Test, Y_Feature_Train,  Y_Feature_Test, =tts(X_Features,Y_Feature,test_size=0.3)

def distance(x1, y1):
    return np.sqrt(np.sum(x1-y1)**2)


def Knn(k, x, y, predict) :
    X_Train = x
    Y_Train = y

    labels = []
    for i in predict:
        dis = [distance(i, x) for x in X_Train]
        neigbhours = np.argsort(dis)
        nearest_neighbour=neigbhours[0]
        nearest_Label = Y_Train[nearest_neighbour]       
        labels.append(nearest_Label)
    return np.array(labels)


result=Knn(3,X_Features_Train, Y_Feature_Train,X_Features_Test)
print((np.sum(result==Y_Feature_Test)/len(Y_Feature_Test))*100)


p=np.array([[7.6,3.0,6.6,2.1]])
result=Knn(3,X_Features_Train, Y_Feature_Train,p)
print(result)

'''
plt.figure()
plt.scatter(X_Features[:,0], X_Features[:,1], c=Y_Feature,
            edgecolors='k', s=20)
plt.show()
plt.savefig("abc.png")

'''