
import numpy as np
import pandas as pd


dataset = pd.read_csv('q1.csv')
X = dataset.iloc[:, :-1]
y = dataset.iloc[:, -1]

from sklearn.preprocessing import LabelEncoder


#here we are encoding the categorical data into numerical data using LabelEnoder
le1 = LabelEncoder()
le2 = LabelEncoder()
le3 = LabelEncoder()
le4 = LabelEncoder()

df_0 = le1.fit_transform(dataset.iloc[:, 0])
df_1 = le2.fit_transform(dataset.iloc[:, 1])
df_2 = le3.fit_transform(dataset.iloc[:, 2])

#here we are transforming the shape into one column item and then concatenating into one Frame
df_0 = df_0.reshape(len(df_0),1)
df_1 = df_1.reshape(len(df_1),1)
df_2 = df_2.reshape(len(df_2),1)

X = np.concatenate((df_0, df_1, df_2), axis=1)

#encoding the TargetVariable
le5 = LabelEncoder()
y = le5.fit_transform(y)



from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)



# Training and testing the model
from sklearn.svm import SVR
regressor = SVR()
regressor.fit(X_train, y_train)


y_pred = regressor.predict(X_test)


#showing the rSquare goodnes of fit
from sklearn.metrics import r2_score
print(abs(np.around(r2_score(y_test, y_pred),1)))

#converting back into categorical values from numerical values
np.set_printoptions(precision=2)
y_pred = y_pred.astype(int)
y_pred = le5.inverse_transform(y_pred)
y_test = le5.inverse_transform(y_test)


#creating dataframe to display data
dataFrame = pd.DataFrame()
dataFrame['Test'] = y_test
dataFrame['Predict'] =y_pred

print(dataFrame)