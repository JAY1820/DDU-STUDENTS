import threading

def count_vowels(file_name):
    vowels = 'aeiouAEIOU'
    with open(file_name, 'r') as file:
        text = file.read()
        count = 0
        for char in text:
            if char in vowels:
                count += 1
        print(f'Number of vowels: {count}')

def count_consonants(file_name):
    consonants = 'bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ'
    with open(file_name, 'r') as file:
        text = file.read()
        count = 0
        for char in text:
            if char in consonants:
                count += 1
        print(f'Number of consonants: {count}')

file_name = 'text.txt'
thread_vowels = threading.Thread(target=count_vowels, args=(file_name,))
thread_consonants = threading.Thread(target=count_consonants, args=(file_name,))

thread_vowels.start()
thread_consonants.start()

thread_vowels.join()
thread_consonants.join()
