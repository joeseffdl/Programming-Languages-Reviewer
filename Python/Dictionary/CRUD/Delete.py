dict = {"Name": "Caicai", "Age": 5, "Class": "Dog"}

# Delete entire dictionary
print("dict: ", dict)

del dict["Class"] # Remove entry with key 'Class'
print("dict after removing entry with key 'Class' using del dict['key']: ", dict)

dict.clear() # Remove all entries in dict
print("dict after removing all entries using clear(): ", dict)


