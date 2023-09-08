# 1 Who does execute & manage threads in Python; operating system or PVM?
# 2. What is the role of start() and join() in the context of threading.Thread?

# 3. Create a Python program for the following requirements:
# a. Create and use a thread thread_1to10 to print numbers from 1 to 10.
# b. Create and use a thread thread_50to60 to print numbers from 50 to 60.
# c. Start all the threads, however
# i. The thread thread_50to60 must finish first.
# ii. The thread thread_1to10must finish last.

import threading
import time

def thread_1to10():
    for i in range(1,11):
        print(i)

def thread_50to60():
    for i in range(50,61):
        print(i)

t1 = threading.Thread(target=thread_1to10)
t2 = threading.Thread(target=thread_50to60)

t1.start()
t2.start()

t2.join()
t1.join()

print("Done!")

# 4. Create a Python program for the following requirements: