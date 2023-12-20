for letter in "Python":
    if letter == "h":
        break
    print ("Current letter: ", letter)
    
var = 10
while var > 0:
    print ("Current variable value: ", var)
    var = var -1
    if var == 5:
        break

id = [1,2,3,4,5]
print(id)
x = int(input("Enter the id to be searched: "))

for i in range(len(id)):
    if id[i] == x:
        print("Id found at index", i)
        break
if i < len(id):
    print("Id found at position ", i + 1)
else:
    print("Id not found")