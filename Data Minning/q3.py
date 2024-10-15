# Hierarchical Clustering

# Importing the libraries
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

# Importing the dataset
dataset = pd.read_csv('q3.csv')

from sklearn.preprocessing import LabelEncoder

# le1 = LabelEncoder()
# le2 = LabelEncoder()
le3 = LabelEncoder()
le4 = LabelEncoder()


# df_0 = le1.fit_transform(dataset.iloc[:, 0])
# df_1 = le2.fit_transform(dataset.iloc[:, 1])
df_2 = le3.fit_transform(dataset.iloc[:, 2])
df_3 = le4.fit_transform(dataset.iloc[:, 3])

# df_0 = df_0.reshape(len(df_0),1)
# df_1 = df_1.reshape(len(df_1),1)
df_2 = df_2.reshape(len(df_2),1)
df_3 = df_3.reshape(len(df_3),1)


# X = np.concatenate((df_0, df_1, df_2, df_3), axis=1)

X = np.concatenate(( df_2, df_3), axis=1)



import scipy.cluster.hierarchy as sch
dendrogram = sch.dendrogram(sch.linkage(X, method = 'ward'))
plt.title('Dendrogram')
plt.ylabel('Euclidean distances')
plt.show()

# Training the Hierarchical Clustering model on the dataset
from sklearn.cluster import AgglomerativeClustering
hc = AgglomerativeClustering(n_clusters =3, affinity = 'euclidean', linkage = 'ward')
y_hc = hc.fit_predict(X)

# Visualising the clusters
plt.scatter(X[y_hc == 0, 0], X[y_hc == 0, 1], s = 100, c = 'red', label = 'Cluster 1')
plt.scatter(X[y_hc == 1, 0], X[y_hc == 1, 1], s = 100, c = 'blue', label = 'Cluster 2')
plt.scatter(X[y_hc == 2, 0], X[y_hc == 2, 1], s = 100, c = 'green', label = 'Cluster 3')

plt.title('Clusters of Players')
plt.xlabel('Delivery Length')
plt.ylabel('Shot Type')
plt.legend()
plt.show()