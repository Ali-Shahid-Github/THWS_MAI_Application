import cv2 as cv
import numpy as np
from matplotlib import pyplot as plt
# from functions import *




path = 'img_1.jpg'
flag = 1



def readImage(path, flag):
    img = cv.imread(path, flag)
    print("Image has been read whose size is {}".format(img.shape))
    return img

img = readImage(path, flag)



def showImage(name, img):
    cv.imshow(name, img)
    cv.waitKey(0)
    cv.destroyAllWindows()
    
showImage('original Image',img)

    
def saveImageDisk(fileName,img):
    cv.imwrite(fileName, img)
    print("File saved")

saveImageDisk('savedImage.jpg', img)


def resizeImage(img, dim):
    #dim = (width, height)
    return cv.resize(img, dim)

showImage('resized Image',resizeImage(img, (300,250)))

print("Image shape is {}".format(img.shape))



def placeText(img, text, loc, font, fontscale, color, thickness):
    return cv.putText(img,text,loc,font,fontscale,color,thickness)

showImage('Text Image',placeText(img,
                    "It is Lahore",
                    (230,60),
                    cv.FONT_HERSHEY_COMPLEX,
                    1,
                    (0,255,111),
                    2))



def placeLine(img, p1, p2, color, thicknes):
    return cv.line(img,p1,p2,color,thicknes)


blackImg = np.zeros((400,400,3), np.uint8)
showImage('Black Image', blackImg)

showImage('Line Image',placeLine(blackImg,(30,30),(100,100),(255,0,0),4))

def placeRec(img, p1, p2, color, thicknes):
   return cv.rectangle(img,p1,p2, color,thicknes)


showImage('Rec Image',placeRec(blackImg,(200,100),(100,300),(255,0,0),4))


def placeCircle(img, point, radius, color, thickness):
   return cv.circle(img,point,radius, color,thickness)

showImage('Circle Image',placeCircle(blackImg,(200,200),100,(0,255,0),4))




showImage('Square Image',placeRec(blackImg,(200,200),(300,300),(255,0,0),4))



def placeTrianlge(img, p1, p2, p3, color, thickness):
    cv.line(img, p1, p2, color, thickness)
    cv.line(img, p2, p3, color, thickness)
    cv.line(img, p1, p3, color, thickness)
    return img

p1 = (200, 200)
p2 = (300, 200)
p3 = (250, 120)
showImage('Traingle',placeTrianlge(blackImg, p1, p2, p3,(255,0,0),4))



rgbImage = readImage(path, flag)
grayImage = cv.cvtColor(rgbImage, cv.COLOR_BGR2GRAY)
showImage('Gray Image',grayImage)


def startWebCam():
    v= cv.VideoCapture(0)
    while(True):
          
        isData, img = v.read()
        if isData:
            cv.imshow('Web Capture', cv.flip(img, 1))
            if cv.waitKey(1) & 0xFF == ord('q'):
                break
      
    cv.destroyAllWindows()  
    v.release()
startWebCam()

def readVideo(path):
    v= cv.VideoCapture(path)
    #v.set(3,640)  #set width
    #v.set(4,480)   #set height
    while True:
        isData, img = v.read()
        if isData: 
            cv.imshow("Video Sparrow",img)
            if cv.waitKey(60) & 0xFF==ord('q'):
                cv.destroyAllWindows()
                break
        else:
            cv.destroyAllWindows()
            break
    v.release()
    cv.destroyAllWindows()

readVideo("video_1.mp4")


def findEdges(img, min_thres, max_thres):
    return cv.Canny(img,min_thres,max_thres )

Image_2 = readImage('img_2.png', flag)
showImage('Image' ,Image_2 )
showImage('Edge Image' ,findEdges(Image_2, 100, 220) )


def cropImage(img, x1, y1, x2, y2):
    return img[y1:y2, x1:x2]

showImage('crop Image', cropImage(Image_2, 250,30, 750,400 ))


def doSharpen(img, depth):
    kernel = np.array([
                   [0, -1, 0],
                   [-1, 5,-1],
                   [0, -1, 0]
                   ])
    return cv.filter2D(img,depth,kernel)
showImage('sharpen Image', doSharpen(Image_2, -1 ))



def contours(img, min_thres, max_thres, color, thickness):
    edges= cv.Canny(img,min_thres,max_thres )
    
    contours, hierachy = cv.findContours(edges, cv.RETR_TREE, cv.CHAIN_APPROX_NONE)
    cv.drawContours(img, contours, -1, color, thickness)
    return img
showImage('contour Image' ,contours(Image_2, 83, 62, (255,0,0), 2) )



def identityFilter(img, depth):
    kernel = np.array([
                   [1, 0, 0],
                   [1, 1, 0],
                   [0, 0, 1]
                   ])
    return cv.filter2D(img,depth,kernel)
showImage('identity Filter', identityFilter(rgbImage, -1 ))

def gausionFilter(img, depth):
    return cv.GaussianBlur(img, (5,5),-1)
Image_2 = readImage('img_2.png', flag)
showImage('Gausion Filter', gausionFilter(Image_2, -1 ))

def medianFilter(img, kSize):
    return cv.medianBlur(src=img, ksize=kSize)
showImage('Median Filter', medianFilter(Image_2, 3 ))

def averageFilter(img, kSize):
    return cv.blur(img, (kSize,kSize))
showImage('Average Filter', averageFilter(Image_2, 5 ))



def showHistogram(img):
    plt.hist(img.ravel(),256,[0,256])
    plt.show()

showHistogram(rgbImage)

def templateMatching(img,template, method, threshold):
    img_gray = cv.cvtColor(img, cv.COLOR_BGR2GRAY)
    height, width = template.shape
    
    res = cv.matchTemplate(img_gray,template,method)

    location = np.where( res >= threshold)
    for points in zip(*location[::-1]):
        print(width)
        cv.rectangle(img, points, (points[0] + width, points[1] + height), (0,0,255), 1)
    
    return img
template = readImage('template.png', 0)
Image_2 = readImage('img_2.png', 1)

showImage('Image' ,template )
showImage('Template Matched', templateMatching(Image_2,template, cv.TM_CCOEFF_NORMED, 0.80))


def applyThresholing(img):
    th, dst = cv.threshold(img, 128, 255, cv.THRESH_BINARY)
    return dst

showImage('Thresholding', applyThresholing(grayImage))

def negativeImage(img):
    return cv.bitwise_not(img)

showImage('NegativeImage', negativeImage(Image_2))



def applyLog(img):
    img_log = (np.log(img+1)/(np.log(1+np.max(img))))*255

    return np.array(img_log, dtype=np.uint8) # converting image back to the int format
showImage('Log transform', applyLog(Image_2))

def applyPowerLaw(img, gamma):
    return np.array(255*(img / 255) ** gamma, dtype = 'uint8')
showImage('Power Law', applyPowerLaw(Image_2, 2))

def applyErode(img):
    return cv.erode(img, np.ones((7,7), np.uint8), iterations=2)
image_3 = readImage('Image_3.png', 0)
showImage('Image', image_3)
showImage('Eroded', applyErode(image_3))


def applyDilate(img):
    return cv.dilate(img, np.ones((7,7), np.uint8), iterations=2)
showImage('Dilated', applyDilate(image_3))
  

def applyOpening(img):
    return applyDilate(applyErode(img))
showImage('Opening', applyOpening(image_3))


def applyClosing(img):
    return applyErode(applyDilate(img))
showImage('Closing', applyClosing(image_3))

image_4 = readImage('Image_4.jpg', 0)

showImage('Boundary', findEdges(image_4, 100, 150))



def applyRegionFilling(img):
    th, image = cv.threshold(img, 200, 255, cv.THRESH_BINARY);
    imageFlood = image.copy()
    #creating mask
    h, w = image.shape[:2]
    mask = np.zeros((h+2, w+2), np.uint8)

    #applying the floodfill
    cv.floodFill(imageFlood, mask, (0,0), 255);

    #Reverse image
    imageFlood_inverse = cv.bitwise_not(imageFlood)
    return imageFlood_inverse


showImage('Image', image_4)

# Invert floodfilled image
showImage('regionFilling',applyRegionFilling(image_4))





















