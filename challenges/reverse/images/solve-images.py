from PIL import Image
import numpy as np

# Load both layers
layer1 = Image.open('layer1.png')
layer2 = Image.open('layer2.png')

# Convert images to arrays
layer1_array = np.array(layer1)
layer2_array = np.array(layer2)

# Perform XOR operation on the pixel values to decrypt the message
decrypted_array = np.bitwise_xor(layer1_array, layer2_array)

# Convert the result back to an image
decrypted_image = Image.fromarray(decrypted_array)

# Save the decrypted image to visualize the hidden message
decrypted_image.save('flag.png')

decrypted_image.show()
