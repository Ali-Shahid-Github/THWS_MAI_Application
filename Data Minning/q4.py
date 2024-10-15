
import pandas as pd


dataset = pd.read_csv('q4.csv')
samples = []
for i in range(0, dataset.shape[0]):
  samples.append([str(dataset.values[i,j]) for j in range(0, 4)])

# Training the Apriori model
from apyori import apriori
rules = apriori(transactions = samples, min_support = 0.02, min_confidence = 0.5, min_lift = 3, min_length = 2, max_length = 3)



results = list(rules)

def getR1(results):
    r1 = []
    for result in results:
        r1.append(tuple(result[2][0][0])[0])
    return r1
        
def getR2(results):
    r2 = []
    for result in results:
        r2.append(tuple(result[2][0][1]))
    return r2
      
def getR3(results):
    r3 = []
    for result in results:
        r3.append(tuple(result[2][0][2])[0])
    return r3

def getSupport(results):
    support = []
    for result in results:
        support.append(result[1])
    return support

def getConfidence(results):
    con = []
    for result in results:
        con.append(result[2][0][2])
    return con

def getLifts(results):
    lift = []
    for result in results:
        lift.append(result[2][0][3])
    return lift

        
dataFrame = pd.DataFrame()

    
dataFrame['R1'] = getR1(results)
dataFrame['R2'] = getR2(results)
dataFrame['Support'] = getSupport(results)
dataFrame['Confidences'] = getConfidence(results)
dataFrame['lifts'] = getLifts(results)


print(dataFrame)
    
    