
import numpy as np
import pandas as pd

dataset = pd.read_csv('b.csv')

dataset = dataset.replace('Unknown', np.nan)

from sklearn.impute import SimpleImputer

imputer = SimpleImputer(missing_values=np.nan, strategy='most_frequent')
imputer.fit(dataset)
dataset = pd.DataFrame(imputer.transform(dataset))
print(dataset)

X = dataset.iloc[:, :-1]
y = dataset.iloc[:, -1]





#here we are encoding the categorical data into numerical data using LabelEnoder

from sklearn.preprocessing import LabelEncoder

le1 = LabelEncoder()
le2 = LabelEncoder()
le3 = LabelEncoder()
le4 = LabelEncoder()
le5 = LabelEncoder()


df_0 = le1.fit_transform(X.iloc[:, 0])
df_1 = le2.fit_transform(X.iloc[:, 1])
df_2 = le3.fit_transform(X.iloc[:, 2])
df_3 = le4.fit_transform(X.iloc[:, 3])


#here we are transforming the shape into one column item and then concatenating into one Frame
df_0 = df_0.reshape(len(df_0),1)
df_1 = df_1.reshape(len(df_1),1)
df_2 = df_2.reshape(len(df_2),1)
df_3 = df_3.reshape(len(df_3),1)

X = np.concatenate(( df_0, df_1, df_2, df_3), axis=1)

y = le5.fit_transform(y)


from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.20, random_state = 0)


#Training the K-NN model on the Training set
from sklearn.neighbors import KNeighborsClassifier
classifier = KNeighborsClassifier(n_neighbors = 7, metric = 'minkowski', p = 2)
classifier.fit(X_train, y_train)


# Training the Naive Bayes model
# from sklearn.naive_bayes import GaussianNB
# classifier = GaussianNB()
# classifier.fit(X_train, y_train)

y_pred = classifier.predict(X_test)

y_1 = le5.inverse_transform(y_pred)
y_2 = le5.inverse_transform(y_test)



#creating dataframe to display data
dataFrame = pd.DataFrame()
dataFrame['Test'] = y_1
dataFrame['Predict'] =y_2

print(dataFrame)


# Making the Confusion Matrix
from sklearn.metrics import confusion_matrix, accuracy_score
print(accuracy_score(y_test, y_pred))


cm = confusion_matrix(y_test, y_pred)
print(cm)



# # Predicting a new result
# print(classifier.predict(sc.transform([[30,87000]])))


