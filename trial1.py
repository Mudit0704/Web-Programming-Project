from tensorflow.keras.models import load_model

#classifier.save('my_model.h5')  # creates a HDF5 file 'my_model.h5'
#del model  # deletes the existing model

# returns a compiled model
# identical to the previous one
classifier = load_model('my_model.h5')


#Prediction

import numpy as np
from keras.preprocessing import image
test_image = image.load_img('Gesture Image Data/temp/i.jpg', target_size = (50, 50))
test_image = image.img_to_array(test_image)
test_image = np.expand_dims(test_image, axis = 0)
result = classifier.predict(test_image)
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

a = training_set.class_indices
y_classes = result.argmax()
"""if result[0][0] == 0:
 prediction = 'A'
else:
 prediction = 'wrong'
"""
 
 # -*- coding: utf-8 -*-
"""
Created on Fri Dec 13 15:42:13 2019

@author: Mudit
"""
"""
import cv2
import numpy as np
from PIL import Image
from tensorflow.keras import models

#Load the saved model
model = models.load_model('my_model.h5')
video = cv2.VideoCapture(0)

while True:
        _, frame = video.read()

        #Convert the captured frame into RGB
        im = Image.fromarray(frame, 'RGB')

        #Resizing into 128x128 because we trained the model with this image size.
        im = im.resize((50,50))
        img_array=np.asarray( im, dtype="float32" )
         #= np.array(im)

        #Our keras model used a 4D tensor, (images x height x width x channel)
        #So changing dimension 128x128x3 into 1x128x128x3 
        img_array = np.expand_dims(img_array, axis=0)

        #Calling the predict method on model to predict 'me' on the image
        prediction = int(model.predict(img_array)[0][0])

        #if prediction is 0, which means I am missing on the image, then show the frame in gray color.
        print(prediction)
        if prediction == 0:
                frame = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

        cv2.imshow("Capturing", frame)
        key=cv2.waitKey(1)
        if key == ord('q'):
                break
video.release()
cv2.destroyAllWindows()
"""
"""
import cv2
import numpy as np
from tensorflow.keras.models import load_model
from skimage.transform import resize, pyramid_reduce
import PIL
from keras.preprocessing import image
from PIL import Image

model = load_model('my_model.h5')


def prediction(pred):
    return(chr(pred+ 65))


def keras_predict(model, image):
    data = image.img_to_array(image)
    
    pred_probab = model.predict(data)[0]
    pred_class = list(pred_probab).index(max(pred_probab))
    return max(pred_probab), pred_class

def keras_process_image(img):
    
    img = cv2.resize(img, (1,50,50), interpolation = cv2.INTER_AREA)
  
    return img
 

def crop_image(image, x, y, width, height):
    return image[y:y + height, x:x + width]

def main():
    l = []
    
    while True:
        
        cam_capture = cv2.VideoCapture(0)
        _, image_frame = cam_capture.read()  
    # Select ROI
        im2 = crop_image(image_frame, 300,300,300,300)
        image_grayscale = cv2.cvtColor(im2, cv2.COLOR_BGR2GRAY)
    
        image_grayscale_blurred = cv2.GaussianBlur(image_grayscale, (15,15), 0)
        im3 = cv2.resize(image_grayscale_blurred, (50,50), interpolation = cv2.INTER_AREA)


    
        im4 = np.resize(im3, (50, 50, 3))
        im5 = np.expand_dims(im4, axis=0)
    

        pred_probab, pred_class = keras_predict(model, im5)
    
        curr = prediction(pred_class)
        print(curr)
        cv2.putText(image_frame, curr, (700, 300), cv2.FONT_HERSHEY_COMPLEX, 4.0, (255, 255, 255), lineType=cv2.LINE_AA)
            
            
    
 
    # Display cropped image
        cv2.rectangle(image_frame, (300, 300), (600, 600), (255, 255, 00), 3)
        cv2.imshow("frame",image_frame)
        
        
    #cv2.imshow("Image4",resized_img)
        cv2.imshow("Image3",image_grayscale_blurred)

        if cv2.waitKey(25) & 0xFF == ord('q'):
                cv2.destroyAllWindows()
                break


if __name__ == '__main__':
    main()

cam_capture.release()
cv2.destroyAllWindows()"""