from PIL import Image
import numpy as np

layer1 = Image.open('layer1.png')
layer2 = Image.open('layer2.png')

layer1_array = np.array(layer1)
layer2_array = np.array(layer2)

decrypted_array = np.bitwise_xor(layer1_array, layer2_array)
decrypted_image = Image.fromarray(decrypted_array)

decrypted_image.save('decrypted_image.png')
decrypted_image.show()
