list_One = ["Math", "English", 1997, 2022] # List of strings and numbers
list_Two = [1, 2, 3, 4, 5 ] # List of numbers

# Deleting Values in a List
print("list_One: ", list_One) # Prints complete list
del list_One[2] # Deletes element at index 2
print("After deleting value at index 2 : ", list_One) # Prints complete list
del list_Two[1:5] # Deletes elements from index 1 to 5
print("After deleting values from index 1 to 5 : ", list_Two) # Prints complete list
del list_Two # Deletes entire list
print("After deleting entire list_Two : ", list_Two) # Prints complete list
