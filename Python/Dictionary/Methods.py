dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}

# clear() method removes all items from the dictionary
print("dict: ", dict)
dict.clear()
print("dict after removing all entries using clear(): ", dict)

# del dict["key"] method removes the item with the specified key name
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
del dict["Class"]
print("dict after removing entry with key 'Class' using del dict['key']: ", dict)

# del dict method removes the dictionary completely
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
del dict
print("dict after removing the dictionary completely using del dict: ", dict) # NameError: name 'dict' is not defined

# copy() method returns a copy of the specified dictionary
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
dict_copy = dict.copy()
print("dict_copy: ", dict_copy)

# fromkeys() method returns a dictionary with the specified keys and values
keys = ("Name", "Age", "Class")
values = "Culette"
dict = dict.fromkeys(keys, values)
print("dict: ", dict)

# get() method returns the value of the item with the specified key
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
print("dict.get('Name'): ", dict.get("Name")) # Culette

# items() method returns a view object. The view object contains the key-value pairs of the dictionary, as tuples in a list
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
print("dict.items(): ", dict.items()) # dict_items([('Name', 'Culette'), ('Age', 5), ('Class', 'Dog')])

# keys() method returns a view object. The view object contains the keys of the dictionary, as a list
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
print("dict.keys(): ", dict.keys()) # dict_keys(['Name', 'Age', 'Class'])

# setdefault() method returns the value of the item with the specified key. If the key does not exist, insert the key, with the specified value
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
print("dict.setdefault('Name'): ", dict.setdefault("Name")) # Culette
print("dict.setdefault('Breed'): ", dict.setdefault("Breed", "Shih Tzu")) # Shih Tzu 

# update() method inserts the specified items to the dictionary
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
dict.update({"Breed": "Shih Tzu"})
print("dict after inserting new item using update(): ", dict)

# values() method returns a view object. The view object contains the values of the dictionary, as a list
dict = {"Name": "Culette", "Age": 5, "Class": "Dog"}
print("dict: ", dict)
print("dict.values(): ", dict.values()) # dict_values(['Culette', 5, 'Dog'])


