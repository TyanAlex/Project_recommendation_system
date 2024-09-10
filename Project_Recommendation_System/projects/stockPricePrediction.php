<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/stockPricePrediction.css">
    <title>stock_price_prediction</title>
</head>
<body>
    <p class="description">Machine learning has significant applications in the stock price prediction. 
        In this machine learning project, we will be talking about predicting the returns on stocks. This is a very complex task and has uncertainties. We will develop this project into two parts:</p>
    <ol>
        <li>First, we will learn how to predict stock price using the LSTM neural network.</li>
        <li>Then we will build a dashboard using Plotly dash for stock analysis.</li>
    </ol>

    <h2>Datasets</h2>
    <ol>
        <li>To build the stock price prediction model, we will use the NSE TATA GLOBAL dataset. 
            This is a dataset of Tata Beverages from Tata Global Beverages Limited, National Stock Exchange of India: 
            <a href="https://data-flair.training/blogs/download-tata-global-beverages-stocks-data/">Tata Global Dataset</a></li>
        <li>To develop the dashboard for stock analysis we will use another stock dataset with multiple stocks like Apple, Microsoft, Facebook: 
            <a href="https://data-flair.training/blogs/download-stocks-price-data/">Stocks Dataset</a></li>
    </ol>

    <h2>Source code</h2>
    <p><a href="https://data-flair.training/blogs/download-stock-price-prediction-project-code/">Download source code</a></p>

    <ol>
        <li>Imports</li>
        <div class="container">
            <div class="code-wrap">
<pre>
    <code>
import pandas as pd
import numpy as np

import matplotlib.pyplot as plt
%matplotlib inline

from matplotlib.pylab import rcParams
rcParams['figure.figsize']=20,10
from keras.models import Sequential

from sklearn.preprocessing import MinMaxScaler
    </code>
</pre>
            </div>
        </div>

        <li>Read the dataset:</li>
        <pre>
        <code>
df=pd.read_csv("NSE-TATA.csv")
df.head()            
        </code>
        </pre>


        <li>Analyze the closing prices from dataframe:</li>
        <pre>
        <code>
df["Date"]=pd.to_datetime(df.Date,format="%Y-%m-%d")
df.index=df['Date']

plt.figure(figsize=(16,8))
plt.plot(df["Close"],label='Close Price history')
        </code>
        </pre>

        <li>Sort the dataset on date time and filter “Date” and “Close” columns:</li>
        <pre>
        <code>
data=df.sort_index(ascending=True,axis=0)
new_dataset=pd.DataFrame(index=range(0,len(df)),columns=['Date','Close'])

for i in range(0,len(data)):
    new_dataset["Date"][i]=data['Date'][i]
    new_dataset["Close"][i]=data["Close"][i]
        </code>
        </pre>


        <li>Normalize the new filtered dataset:</li>
        <pre>
        <code>
scaler=MinMaxScaler(feature_range=(0,1))
final_dataset=new_dataset.values
train_data=final_dataset[0:987,:]
valid_data=final_dataset[987:,:]
new_dataset.index=new_dataset.Date
new_dataset.drop("Date",axis=1,inplace=True)
scaler=MinMaxScaler(feature_range=(0,1))
scaled_data=scaler.fit_transform(final_dataset)
x_train_data,y_train_data=[],[]
for i in range(60,len(train_data)):
    x_train_data.append(scaled_data[i-60:i,0])
    y_train_data.append(scaled_data[i,0])
                
x_train_data,y_train_data=np.array(x_train_data),np.array(y_train_data)
x_train_data=np.reshape(x_train_data,(x_train_data.shape[0],x_train_data.shape[1],1))
        </code>
        </pre>

        <li>Build and train the LSTM model:</li>
        <pre>
        <code>
lstm_model=Sequential()
lstm_model.add(LSTM(units=50,return_sequences=True,input_shape=(x_train_data.shape[1],1)))
lstm_model.add(LSTM(units=50))
lstm_model.add(Dense(1))
inputs_data=new_dataset[len(new_dataset)-len(valid_data)-60:].values
inputs_data=inputs_data.reshape(-1,1)
inputs_data=scaler.transform(inputs_data)
lstm_model.compile(loss='mean_squared_error',optimizer='adam')
lstm_model.fit(x_train_data,y_train_data,epochs=1,batch_size=1,verbose=2)
        </code>
        </pre>

        <li>Take a sample of a dataset to make stock price predictions using the LSTM model:</li>
        <pre>
        <code>
X_test=[]
    for i in range(60,inputs_data.shape[0]):
X_test.append(inputs_data[i-60:i,0])
X_test=np.array(X_test)
X_test=np.reshape(X_test,(X_test.shape[0],X_test.shape[1],1))
predicted_closing_price=lstm_model.predict(X_test)
predicted_closing_price=scaler.inverse_transform(predicted_closing_price)
        </code>
        </pre>

        <li>Save the LSTM model:</li>
        <pre>
        <code>
lstm_model.save("saved_model.h5")
        </code>
        </pre>

        <li>Visualize the predicted stock costs with actual stock costs:</li>
        <pre>
        <code>
train_data=new_dataset[:987]
valid_data=new_dataset[987:]
valid_data['Predictions']=predicted_closing_price
plt.plot(train_data["Close"])
plt.plot(valid_data[['Close',"Predictions"]])
        </code>
        </pre>
    </ol>

    <h2>Summary</h2>
    <p>Stock price prediction is a machine learning project for beginners; in this tutorial we learned how to develop a stock cost prediction model and how to build an interactive dashboard for stock analysis. We implemented stock market prediction using the LSTM model. OTOH, Plotly dash python framework for building dashboards.</p>
</body>
</html>