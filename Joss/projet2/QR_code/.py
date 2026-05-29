import cv2

detector = cv2.QRCodeDetector()

val, points, qrcode = detector.detectAndDecode(cv2.imread("qr_image.png"))
print(val)
print("oui oui")