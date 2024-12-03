from PIL import Image
import numpy as np

flag_image = Image.open('flag.png')
flag_array = np.array(flag_image)

layer1_array = np.random.randint(0, 256, flag_array.shape, dtype=np.uint8)
layer2_array = np.bitwise_xor(flag_array, layer1_array)

layer1 = Image.fromarray(layer1_array)
layer2 = Image.fromarray(layer2_array)

layer1.save('layer1.png')
layer2.save('layer2.png')


