list = ["abcd", 786, 2.23, "john", 70.2] # List of strings and numbers
tinylist = [123, "mark"] # List of numbers and strings

print("list: ", list) # Prints complete list
print("list[0]: ", list[0]) # Prints first element of the list
print("list[1:3]: ", list[1:3]) # Prints slice starting from 2nd element till 3rd element
print("list[2:]: ", list[2:]) # Prints elements starting from 3rd element
print("tinylist * 2: ", tinylist * 2) # Prints list two times
print(list + tinylist) # Prints concatenated lists