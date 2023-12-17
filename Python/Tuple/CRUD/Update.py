tuple = ("Apple", "Mango", 36, 12) # Tuple with 4 elements - 2 strings and 2 integers
second_tuple = (1, 2, 3, 4, 5, 6, 7, 8, 9, 10) # Tuple with 10 elements - 10 integers

# Updating elements in a tuple
#tuple[2] = 40 ## This will raise an error

# Create a new tuple with updated elements
new_tuple = tuple[:2] + (40, 50) + tuple[3:]
print("new_tuple: ", new_tuple)

