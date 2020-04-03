# -*- coding: utf-8 -*-
"""
Created on Tue Jun 25 13:04:42 2019

@author: Mudit Maheshwari
"""

#Building CNN
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Convolution2D
from tensorflow.keras.layers import MaxPooling2D
from tensorflow.keras.layers import Flatten
from tensorflow.keras.layers import Dense
from tensorflow.keras.layers import Dropout

#Initialising CNN
classifier = Sequential()

#Convolution Layer
classifier.add(Convolution2D(32, (3, 3), input_shape=(50, 50, 3), activation = 'relu'))

#Pooling Layer
classifier.add(MaxPooling2D(pool_size=(2,2)))

#Adding second convolution layer and pooling layer
classifier.add(Convolution2D(64, (3, 3), activation = 'relu'))
classifier.add(MaxPooling2D(pool_size=(2,2)))
classifier.add(Convolution2D(128, (3, 3), activation = 'relu'))
classifier.add(MaxPooling2D(pool_size=(2,2)))
classifier.add(Convolution2D(256, (3, 3), activation = 'relu'))
classifier.add(MaxPooling2D(pool_size=(2,2)))

#Flattening Layer
classifier.add(Flatten())

#Full Connection Layer
classifier.add(Dense(activation='relu',units = 128))
classifier.add(Dense(activation='softmax', units = 37))

#Compiling the CNN
classifier.compile(optimizer = 'SGD', loss = 'categorical_crossentropy', metrics = ['accuracy'])

#Fitting the CNN
from tensorflow.keras.preprocessing.image import ImageDataGenerator
train_datagen = ImageDataGenerator(
        rescale=1./255,
        shear_range=0.2,
        zoom_range=0.2,
        horizontal_flip=True)

test_datagen = ImageDataGenerator(rescale=1./255)

training_set = train_datagen.flow_from_directory(
                                                    'Gesture Image Data/train',
                                                    target_size=(50, 50),
                                                    batch_size=32,
                                                    class_mode='categorical')

test_set = test_datagen.flow_from_directory(
                                            'Gesture Image Data/test',
                                            target_size=(50, 50),
                                            batch_size=32,
                                            class_mode='categorical')

classifier.fit_generator(
                    training_set,
                    steps_per_epoch=41625,
                    epochs=5,
                    validation_data=test_set,
                    validation_steps=13875)

#from keras.models import load_model

classifier.save('my_model.h5')  # creates a HDF5 file 'my_model.h5'
#del model  # deletes the existing model

# returns a compiled model
# identical to the previous one
#classifier = load_model('my_model.h5')


#Prediction
"""
import numpy as np
from keras.preprocessing import image
test_image = image.load_img('temp/J_test.jpg', target_size = (64, 64))
test_image = image.img_to_array(test_image)
test_image = np.expand_dims(test_image, axis = 0)
result = classifier.predict(test_image)
a = training_set.class_indices
y_classes = result.argmax(axis=-1)
if result[0][0] == 0:
 prediction = 'A'
else:
 prediction = 'wrong'
 """
 
