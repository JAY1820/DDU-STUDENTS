import random
import string

def generate_text(num_chars):
    return ''.join(random.choice(string.ascii_letters) for _ in range(num_chars))

def write_to_file(file_name, text):
    with open(file_name, 'w') as file:
        file.write(text)

file_name = 'text.txt'
text = generate_text(10000000)
write_to_file(file_name, text)
