# Python's Built-In List Functions

# len() - Gives the total length of the list.
lenExample = ["abcd", 786, 2.23, "john", 70.2]
print("lenExample: ", lenExample)

# max() - Returns item from the list with max value.
maxExample, maxExample2 = ["JavaScipt", "PHP", "Python"], [123, 456, 789]
print("maxExample: ", maxExample, "Max value: ", max(maxExample))
print("maxExample2: ", maxExample2, "Max value: ", max(maxExample2))

# min() - Returns item from the list with min value.
minExample, minExample2 = ["JavaScipt", "PHP", "Python"], [123, 456, 789]
print("minExample: ", minExample, "Min value: ", min(minExample))
print("minExample2: ", minExample2, "Min value: ", min(minExample2))

# list() - Converts a tuple into list.
tupleToListExample = (123, "Python", "PHP")
print("tupleToListExample: ", tupleToListExample, "Type: ", type(tupleToListExample))

str = "Hello World"
print("str: ", str, "Type: ", type(str))
strToListExample = list(str)
print("strToListExample: ", strToListExample, "Type: ", type(strToListExample))

# range() - Returns a sequence of numbers, starting from 0 by default, and increments by 1 (by default), and stops before a specified number.
rangeExample = list(range(10))
print("rangeExample: ", rangeExample, "Type: ", type(rangeExample))

