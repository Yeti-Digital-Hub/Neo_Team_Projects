from qrcode.constants import ERROR_CORRECT_L
import qrcode
def image(url):
    qr = qrcode.QRCode(
        version=3,
        error_correction = ERROR_CORRECT_L,
        box_size=3,
        border=5
    )

    qr.add_data(url)
    qr.make(fit=True)

    img = qr.make_image(fill_color="red" , back_color="black")
    img.save('qr_image.png')