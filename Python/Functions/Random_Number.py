import random

# choice() method returns a random item from a list, tuple, or string.
print("random.choice([1, 2, 3, 5, 9]) : ", random.choice([1, 2, 3, 5, 9]))
print("random.choice('A String') : ", random.choice('A String'))

# randrange() method returns a randomly selected element from range(start, stop, step).
# start: Start point of the range. This would be included in the range.
# stop: Stop point of the range. This would be excluded from the range.
# step: A number specifying the incrementation. Default value is 1.
print("randrange(1, 100, 2) : ", random.randrange(1, 100, 2))
print("randrange(100) : ", random.randrange(100))

# random() method returns a random float number between 0.0 to 1.0.
print("random() : ", random.random())

# seed() method initializes the basic random number generator.
random.seed()
print("Random number with default seed", random.random())
random.seed(10)
print("Random number with int seed", random.random())
random.seed("hello", 2)
print("Random number with string seed", random.random())

# shuffle() method randomizes the items of a list in place.
list = [20, 16, 10, 5]
random.shuffle(list)
print("Reshuffled list : ", list)

# uniform() method returns a random float number between the two given parameters (both included).
print("Random Float uniform(5, 10) : ", random.uniform(5, 10))

