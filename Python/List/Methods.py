# append() - Adds an element at the end of the list.
appendExample = ["Python", "PHP", "JavaScript"]
print("appendExample: ", appendExample)
appendExample.append("Java")
print("appendExample: ", appendExample)

# count() - Returns the number of elements with the specified value.
countExample = ["Python", "PHP", "JavaScript", "Python"]
print("countExample: Count - 'Python'", countExample.count("Python"))

# extend() - Add the elements of a list (or any iterable), to the end of the current list.
extendExample = ["Python", "PHP", "JavaScript"]
print("extendExample: ", extendExample)
print("Extend list with values: 'Java' and 'C++'")
extendExample.extend(["Java", "C++"])
print("extendExample: ", extendExample)

# index() - Returns the index of the first element with the specified value.
indexExample = ["Python", "PHP", "JavaScript"]
print("indexExample: ", indexExample)
print("indexExample: Index of 'PHP' - ", indexExample.index("PHP"))

# insert() - Adds an element at the specified position.
insertExample = ["Python", "PHP", "JavaScript"]
print("insertExample: ", insertExample)
print("insertExample: Insert 'Java' at index 1")
insertExample.insert(1, "Java")
print("insertExample: ", insertExample)

# pop() - Removes the element at the specified position.
popExample = ["Python", "PHP", "JavaScript"]
print("popExample: ", popExample)
print("popExample: Remove element at index 1")
popExample.pop(1)
print("popExample: ", popExample)

# remove() - Removes the first item with the specified value.
removeExample = ["Python", "PHP", "JavaScript"]
print("removeExample: ", removeExample)
print("removeExample: Remove element 'PHP'")
removeExample.remove("PHP")
print("removeExample: ", removeExample)

# reverse() - Reverses the order of the list.
reverseExample = ["Python", "PHP", "JavaScript"]
print("reverseExample: ", reverseExample)
print("reverseExample: Reverse list")
reverseExample.reverse()
print("reverseExample: ", reverseExample)

# sort() - Sorts the list.
sortExample = ["Python", "PHP", "JavaScript"]
print("sortExample: ", sortExample)
print("sortExample: Sort list")
sortExample.sort()
print("sortExample: ", sortExample)

# clear() - Removes all the elements from the list.
clearExample = ["Python", "PHP", "JavaScript"]
print("clearExample: ", clearExample)
print("clearExample: Clear list")
clearExample.clear()
print("clearExample: ", clearExample)

# copy() - Returns a copy of the list.
copyExample = ["Python", "PHP", "JavaScript"]
print("copyExample: ", copyExample)
print("copyExample: Copy list")
copyExample2 = copyExample.copy()
print("copyExample2: ", copyExample2)

# join() - Joins the elements of an iterable to the end of the string.
joinExample = ["Python", "PHP", "JavaScript"]
print("joinExample: ", joinExample)
print("joinExample: Join list")
joinExample2 = " ".join(joinExample)
print("joinExample2: ", joinExample2)

# split() - Splits a string into a list.
splitExample = "Python PHP JavaScript"
print("splitExample: ", splitExample)
print("splitExample: Split string")
splitExample2 = splitExample.split(" ")
print("splitExample2: ", splitExample2)

